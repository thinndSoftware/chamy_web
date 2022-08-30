<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    private $role, $permission;
    public function __construct(Role $role, Permission $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }
    public function index()
    {
        $roles = $this->role->paginate(10);
        return view('admin.roles.role',compact('roles'));
    }
    public function create()
    {
        $permissions = $this->permission->where('parent_id',0)->get();
        return view('admin.roles.create',compact('permissions'));
    }
    public function store(Request $request)
    {
        $this->role->create([
            'name'=> $request->name,
            'display_name'=> $request->display_name,
        ]);

    }
}
