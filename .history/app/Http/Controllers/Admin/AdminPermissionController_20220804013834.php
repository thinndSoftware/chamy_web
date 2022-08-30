<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    public function create()
    {
        return view('admin.permissions.create');
    }
}
