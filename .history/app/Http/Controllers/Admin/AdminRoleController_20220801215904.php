<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    private $role;
    public function __construct(Role $role)
    {
        $this->role = $role;
    }
    public function index()
    {
        $roles = $this->role->paginate(10);
        return view('admin.roles.role',compact('roles'));
    }
    public function create()
    {
        return view('admin.roles.create');
    }
}
