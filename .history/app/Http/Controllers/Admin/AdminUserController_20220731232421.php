<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user,Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }
    public function index()
    {
        $users = $this->user->paginate(10);
        return view('admin.users.user', compact('users'));
    }
    public function create()
    {
        $roles = $this->role->all();
        return view('admin.users.create',compact('roles'));
    }
    public function store(Request $request)
    {
        $user = $this->user->create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,

        ])
    }
}
