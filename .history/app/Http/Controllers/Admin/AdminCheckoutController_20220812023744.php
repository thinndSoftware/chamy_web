<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCheckoutController extends Controller
{
    public function index()
    {
        $all_order = DB::table('orders')
        ->join('users','orders.user_id', '=', 'users.id')
        ->select('orders.*','users.name')
        ->orderBy('orders.id','desc')->get();
        return view('admin.orders.order',compact('all_oder'));
    }
}
