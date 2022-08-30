<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoneOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminReportController extends Controller
{

    public function view()
    {
        // DB::enableQueryLog();
        // $date = DoneOrder::whereDate('created_at',['2022-08-10  ','2022-08-12'])->dd();
        // $test = DB::table('done_orders')
        // ->select('*')
        // ->whereBetween('created_at', ['2022-08-05 00:00:00', '2022-08-10 23:59:59'])
        // ->get();

        $result = DoneOrder::whereBetween('created_at', ['2022-08-05 00:00:00', '2022-08-10 23:59:59'])->get();
        // dd($result);

        // dd(DB::get)
        // dd($date);
        // $dateNow = new Date;
        // dd(DoneOrder::w->format('m/d/Y'));
        // dd(DoneOrder::all()[0]->created_at->format('d/m/Y'));
        return view('admin.reports.report');
    }
    public function getReport(Request $request)
    {
        $DateTimeBefore = Carbon::parse($request->date_time_before)->format('Y-m-d H:h:s');;
        $DateTimeAfter = Carbon::parse($request->date_time_before)->format('Y-m-d H:h:s');;
        $result = DoneOrder::whereBetween('created_at', ['2022-08-05 00:00:00', '2022-08-10 23:59:59'])->get();

        // dd($request->date_time_before);
        // $a = date('d-M-y', strtotime($request->date_time_before));
    }
}
