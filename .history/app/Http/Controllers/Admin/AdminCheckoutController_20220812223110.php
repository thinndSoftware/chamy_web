<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminCheckoutController extends Controller
{
    public function index()
    {
        $all_order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name')
            ->orderBy('orders.id', 'asc')->paginate(5);
        return view('admin.orders.order', compact('all_order'));
    }
    public function view_order($id)
    {
        $order_by_id = DB::table('orders')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->join('shipping', 'orders.shipping_id', '=', 'shipping.shipping_id')
        ->join('order_details', 'orders.id', '=', 'order_details.order_id')
        ->select('orders.*', 'users.*', 'shipping.*', 'order_details.*')->first();
         $user = Order::find($id)->user;
        $product_order = Order::find($id)->orderDetail;
        return  view('admin.orders.view_order', compact('order_by_id', 'product_order', 'user'));
    }
    public function print_order($id)
    {
        $order_by_id = DB::table('orders')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->join('shipping', 'orders.shipping_id', '=', 'shipping.shipping_id')
        ->join('order_details', 'orders.id', '=', 'order_details.order_id')
        ->select('orders.*', 'users.*', 'shipping.*', 'order_details.*')->first();
        \DB::enableQueryLog();
        $product_order = DB::table('order_details')->where('orders_id', $order_by_id->id);
        dd(\DB::getQueryLog());
        $user = DB::table('users')->find($order_by_id->user_id);
        // dd($user);
        // $user = Order::find($id)->user;
        // $product_order = Order::find($id)->orderDetail;
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.print.bill',  compact('order_by_id', 'user'));


        // $pdf = \App::make('dompdf.wrapper');
        // $pdf->loadHTML($this->print_order_convert($id));
        return $pdf->stream('bill.pdf');
    }
}
