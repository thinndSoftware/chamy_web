<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoneOrder;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function view()
    {
        $date = DoneOrder::all();
        $dateNow = new Date;
        dd($dateNow->format('m/d/Y'));
    }
}
