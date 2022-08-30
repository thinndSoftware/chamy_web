<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function view()
    {
        $date = DoneOrder::all();
        dd($date);
    }
}
