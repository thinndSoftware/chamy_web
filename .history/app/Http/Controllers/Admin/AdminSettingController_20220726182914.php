<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSettingRequest;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function index()
    {
        return view('admin.settings.setting');
    }

    function create()
    {
        return view('admin.settings.create');
    }
    public function store(AddSettingRequest $request)
    {

    }
}
