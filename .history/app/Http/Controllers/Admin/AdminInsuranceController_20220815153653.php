<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminInsuranceController extends Controller
{
    public function index()
    {
        return view('admin.insurances.insurance');
    }
    public function create()
    {
        return view('admin.insurances.create');
    }

    public function store()
    {
        dd('done');
    }
}
