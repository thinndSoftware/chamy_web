<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportDateRequest;
use App\Models\DoneOrder;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class AdminReportController extends Controller
{
    private $DateTimeBefore, $DateTimeAfter;

    /* Start hiển thị view */
    public function view()
    {
        return view('admin.reports.report');
    }
    /* End Hiển thị view */

    /* Start hiển thị truy xuất Báo cáo theo doanh thu ( truy xuất từ bảng done_order)*/
    public function getReport(ReportDateRequest $request)
    {
        $this->DateTimeBefore = $request->date_time_before;
        $this->DateTimeAfter = $request->date_time_after;
        $DateTimeBeforeFormat = Carbon::parse($this->DateTimeBefore)->format('Y-m-d H:h:s');;
        $DateTimeAfterFormat = Carbon::parse($this->DateTimeAfter)->format('Y-m-d H:h:s');;

        $reports = DoneOrder::whereBetween('created_at', [$this->DateTimeBefore, $this->DateTimeAfter])->get();
        return view('admin.reports.report', compact('reports', 'DateTimeBeforeFormat', 'DateTimeAfterFormat'));
    }
    /* End hiển thị truy xuất Báo cáo theo doanh thu ( truy xuất từ bảng done_order)*/

    /*Start In báo cáo thống kê theo doanh thu */
    public function print_report($DateTimeBefore, $DateTimeAfter)
    {
        // DB::enableQueryLog();
        $reports = DoneOrder::whereBetween('created_at', [$DateTimeBefore, $DateTimeAfter])->get();
        // dd(DB::getQueryLog());
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.print.report',  compact('reports', 'DateTimeBefore', 'DateTimeAfter'));
        return $pdf->stream('report.pdf');
    }
    /*End In báo cáo thống kê theo doanh thu */

    /*Start hiển thị truy xuất thống kê theo sản phẩm */
    public function getReportProduct(ReportDateRequest $request)
    {
        $this->DateTimeBefore = $request->date_time_before;
        $this->DateTimeAfter = $request->date_time_after;
        $DateTimeBeforeFormat = Carbon::parse($this->DateTimeBefore)->format('Y-m-d H:h:s');;
        $DateTimeAfterFormat = Carbon::parse($this->DateTimeAfter)->format('Y-m-d H:h:s');;
        // DB::enableQueryLog();
        $products = OrderDetail::whereBetween('created_up', [$DateTimeBeforeFormat, $DateTimeAfterFormat])->get();
        // dd(DB::getQueryLog());
        // dd($products);
        return view('admin.reports.report', compact('products', 'DateTimeBeforeFormat', 'DateTimeAfterFormat'));
    }
    /*Start hiển thị truy xuất thống kê theo sản phẩm */

    /* Start in báo cáo thống kê theo sản phẩm */
    public function print_product($DateTimeBefore, $DateTimeAfter)
    {
        // DB::enableQueryLog();
        $products = OrderDetail::whereBetween('created_at', [$DateTimeBefore, $DateTimeAfter])->get();
        // dd($products);
        // dd(DB::getQueryLog());
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.print.report-product',  compact('products', 'DateTimeBefore', 'DateTimeAfter'));
        return $pdf->stream('report.pdf');
    }
    /* End in báo cáo thống kê theo sản phẩm */

    /* Start hiển thị truy xuất sản bán được theo thời gian và sắp xếp sản phẩm bán chạy nhất */
    public function getReportProductQty(ReportDateRequest $request)
    {

        $this->DateTimeBefore = $request->date_time_before;
        $this->DateTimeAfter = $request->date_time_after;

        $DateTimeBeforeFormat = Carbon::parse($this->DateTimeBefore)->format('Y-m-d H:h:s');;
        $DateTimeAfterFormat = Carbon::parse($this->DateTimeAfter)->format('Y-m-d H:h:s');;
        // DB::enableQueryLog();
        $productsQty =  OrderDetail::whereBetween('updated_at', [$this->DateTimeBefore, $this->DateTimeAfter])
            ->select('product_id','product_name', DB::raw('SUM(product_qty) as qty'))
            ->groupBy('product_id')
            ->orderBy('qty','desc')
            ->get();
        // dd(DB::getQueryLog());
        dd($productsQty);
        return view('admin.reports.report', compact('productsQty', 'DateTimeBeforeFormat', 'DateTimeAfterFormat'));
    }
    /* End hiển thị truy xuất sản bán được theo thời gian và sắp xếp sản phẩm bán chạy nhất */

    public function print_product_qty($DateTimeBefore, $DateTimeAfter)
    {
    }
}
