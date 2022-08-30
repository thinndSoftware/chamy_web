<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCheckoutController extends Controller
{
    public function index()
    {
        $all_order = DB::table('orders')
        ->join('users','orders.user_id', '=', 'users.id')
        ->select('orders.*','users.name')
        ->orderBy('orders.id','asc')->paginate(5);
        return view('admin.orders.order',compact('all_order'));
    }
    public function view_order($id)
    {
        $order_by_id = DB::table('orders')
        ->join('users', 'orders.user_id', '=', 'users.id')
        ->join('shipping', 'orders.shipping_id', '=', 'shipping.shipping_id')
        ->join('order_details', 'orders.id', '=', 'order_details.order_id')
        ->select('orders.*', 'users.*', 'shipping.*', 'order_details.*')->first();
        dd($order_by_id);
        return  view('admin.orders.view_order');
    }
}
