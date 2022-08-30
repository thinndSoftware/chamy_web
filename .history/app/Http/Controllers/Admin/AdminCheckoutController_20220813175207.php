<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\DoneOrderMail;
use App\Models\DoneOrder;
use App\Models\Order;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use PDF;

class AdminCheckoutController extends Controller
{
    private $order, $doneOrder;
    /**
     * Class constructor.
     */
    public function __construct(Order $order, DoneOrder $doneOrder)
    {
        $this->order = $order;
        $this->doneOrder = $doneOrder;
    }
    public function index()
    {
        $all_order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name')
            ->orderBy('orders.id', 'asc')->paginate(5);
        // $all_order = $this->order->paginate(5);
        // $all_order_user = $this->order->user();

        return view('admin.orders.order', compact('all_order'));
    }
    public function view_order($id)
    {
        $order_by_id = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('shipping', 'orders.shipping_id', '=', 'shipping.shipping_id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->select('orders.*', 'users.*', 'shipping.*', 'order_details.*')->first();
        // $order_by_id = Order::all()->paginate(5);
        $user = $this->order->find($id)->user;
        $product_order = $this->order->find($id)->orderDetail;

        // \DB::enableQueryLog();
        $shipping = $this->order->find($id)->shipping;
        // dd(\DB::getQueryLog());

        return  view('admin.orders.view_order', compact('order_by_id','shipping', 'product_order', 'user', 'id'));
    }
    public function print_order($id)
    {
        $order_by_id = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('shipping', 'orders.shipping_id', '=', 'shipping.shipping_id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->select('orders.*', 'users.*', 'shipping.*', 'order_details.*')->first();
        // \DB::enableQueryLog();
        $product_order = DB::table('order_details')->where('order_id', $id)->get();
        // dd(\DB::getQueryLog());
        $user = DB::table('users')->find($order_by_id->user_id);
        // dd($product_order);
        // $user = Order::find($id)->user;
        // $product_order = Order::find($id)->orderDetail;

        PDF::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.print.bill',  compact('order_by_id', 'user', 'product_order'));


        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML($this->print_order_convert($id));
        return $pdf->stream('bill.pdf');
    }
    public function done_order($id)
    {
        try {
            DB::beginTransaction();
            // Thêm dữ liệu vào done_orders
            $dataOrder = $this->order->find($id);
            $this->doneOrder->create([
                'order_id' => $id,
                'user_id' => $dataOrder->user_id,
                'shipping_id' => $dataOrder->shipping_id,
                'order_total' => $dataOrder->order_total,
                'order_status' => "Đã xác nhận",
            ]);
            // $shipping = $this->order->find($id)->shipping;
            // Thực hiện gửi mail xác nhận đơn hàng
            // $mailable = new DoneOrderMail($id);
            // Mail::to('namphieu123@gmail.com')->send($mailable);
            $type = 'print.bill';
            $this->sendMail_done_order($id, $type);
            // Xóa dữ liệu bảng orders
            $this->order->find($id)->delete();
            // $order = Order::find($id)->delete();
            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => "sucsset"
            ], 200);
        } catch (Exception $exception) {
            DB::rollback();
            Log::error('Message: ' . $exception->getMessage.'Line: ' . $exception->getLine);
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
    public function sendMail_done_order($id, $type= 'mail.done_order')
    {
        if($type == 'mail.done_order'){
            $shipping = $this->order->find($id)->shipping;
            $mailable = new DoneOrderMail($id, $type);
            Mail::to($shipping->shipping_email)->send($mailable);
            return redirect()->route('orders.order');
        }
        $shipping = $this->order->find($id)->shipping;
        $mailable = new DoneOrderMail($id,$type);
        Mail::to($shipping->shipping_email)->send($mailable);
    }
}
