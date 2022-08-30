<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCheckoutController extends Controller
{
    public function index()
    {
        $all_oder = DB::table('orders')
        ->join('user','order.user_id', '=', 'user.id')
        return view('admin.orders.order');
    }
}
