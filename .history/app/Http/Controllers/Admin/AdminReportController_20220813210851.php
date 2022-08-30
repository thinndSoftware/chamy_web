<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoneOrder;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function view()
    {
        $date = DoneOrder::wherDate('created_at','');
        $dateNow = new Date;
        // dd(DoneOrder::w->format('m/d/Y'));
        dd(DoneOrder::all());
    }
}
