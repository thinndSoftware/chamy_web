<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    public function createPermissions()
    {
        return view('admin.permissions.create');
    }
}
