<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoneOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminReportController extends Controller
{
    public function view()
    {
        // DB::enableQueryLog();
        $date = DoneOrder::whereDate('created_at',['2022-08-10  ','2022-08-12'])->dd();
        $test = DB::table("done_orders")
        ->where("created_at", "between", '2022 - 08 - 05')
        ->where("'2022-08-10", "23:59:59'", 'undefined')
        ->get();
        dd($test);
        // dd(DB::get)
        // dd($date);
        // $dateNow = new Date;
        // dd(DoneOrder::w->format('m/d/Y'));
        // dd(DoneOrder::all()[0]->created_at->format('d/m/Y'));
    }
}
