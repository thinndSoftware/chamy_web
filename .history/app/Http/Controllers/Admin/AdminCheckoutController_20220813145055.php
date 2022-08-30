<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\DoneOrderMail;
use App\Models\DoneOrder;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // $all_order = DB::table('orders')
        //     ->join('users', 'orders.user_id', '=', 'users.id')
        //     ->select('orders.*', 'users.name')
        //     ->orderBy('orders.id', 'asc')->paginate(5);
        $all_order = Order::paginate(5);

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
        $user = Order::find($id)->user;
        $product_order = Order::find($id)->orderDetail;
        return  view('admin.orders.view_order', compact('order_by_id', 'product_order', 'user', 'id'));
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
        // Thêm dữ liệu vào done_orders
        $dataOrder = $this->order->find($id);
        $this->doneOrder->create([
            'order_id' => $id,
            'user_id'=> $dataOrder->user_id,
            'shipping_id' => $dataOrder->shipping_id,
            'order_total' => $dataOrder->order_total,
            'order_status' => "Đã xác nhận",
        ]);
        $user = User::find(1);
        // dd($user);
        $mailable = new DoneOrderMail($user);
        Mail::to('namphieu123@gmail.com')->send($mailable);
        // Xóa dữ liệu bảng orders
        // $this->order->find($id)->delete();
        // $order = Order::find($id)->delete();
        // Xóa element đang hiển thị
        // Thực hiện gửi mail xác nhận đơn hàng
        /*  try {

        } catch (Exception $exception) {

        } */
    }
}
