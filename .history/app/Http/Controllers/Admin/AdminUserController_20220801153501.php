<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.user');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("Message :". $exception->getMessage()."Line: ".$exception->getLine());
        }
    }
    public function edit($id)
    {
        $roles = $this->role->all();
        $user = $this->user->find($id);
        $rolesOfUser = $user->roles;
        return view('admin.users.edit',compact('roles', 'user', 'rolesOfUser'));
    }
    public function update($id)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.user');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("Message :" . $exception->getMessage() . "Line: " . $exception->getLine());
        }
    }
}

