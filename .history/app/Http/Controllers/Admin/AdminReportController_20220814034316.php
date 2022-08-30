<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportDateRequest;
use App\Models\DoneOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class AdminReportController extends Controller
{
    private $DateTimeBefore ,$DateTimeAfter;

    public function view()
    {
        return view('admin.reports.report');
    }
    public function getReport(ReportDateRequest $request)
    {

        $this->DateTimeBefore = $request->date_time_before;
        $this->DateTimeAfter = $request->date_time_after;
        $DateTimeBeforeFormat = Carbon::parse($this->DateTimeBefore)->format('Y-m-d H:h:s');;
        $DateTimeAfterFormat = Carbon::parse($this->DateTimeAfter)->format('Y-m-d H:h:s');;
        $reports = DoneOrder::whereBetween('created_at', [$this->DateTimeBefore, $this->DateTimeAfter])->get();
        return view('admin.reports.report', compact('reports', 'DateTimeBeforeFormat', 'DateTimeAfterFormat'));
    }
    public function print_report($DateTimeBefore, $DateTimeAfter)
    {

        // DB::enableQueryLog();

        $reports = DoneOrder::whereBetween('created_at', [$DateTimeBefore, $DateTimeAfter])->get();

        // dd(DB::getQueryLog());
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.print.report',  compact('reports', 'DateTimeBefore', 'DateTimeAfter'));
        return $pdf->stream('bill.pdf');
    }
    public function view_product()
    {
        return view('admin.reports.product');
    }
    public function getReportProduct()
    {

        $this->DateTimeBefore = $request->date_time_before;
        $this->DateTimeAfter = $request->date_time_after;
        $DateTimeBeforeFormat = Carbon::parse($this->DateTimeBefore)->format('Y-m-d H:h:s');;
        $DateTimeAfterFormat = Carbon::parse($this->DateTimeAfter)->format('Y-m-d H:h:s');;
        $reports = DoneOrder::whereBetween('created_at', [$this->DateTimeBefore, $this->DateTimeAfter])->get();
        return view('admin.reports.report', compact('reports', 'DateTimeBeforeFormat', 'DateTimeAfterFormat'));
    }
    public function print_product($DateTimeBefore, $DateTimeAfter)
    {

        // DB::enableQueryLog();

        $reports = DoneOrder::whereBetween('created_at', [$DateTimeBefore, $DateTimeAfter])->get();

        // dd(DB::getQueryLog());
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.print.report',  compact('reports', 'DateTimeBefore', 'DateTimeAfter'));
        return $pdf->stream('bill.pdf');
    }
}
