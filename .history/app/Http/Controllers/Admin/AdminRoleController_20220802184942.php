<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        return view('admin.roles.role', compact('roles'));
    }
    public function create()
    {
        $permissions = $this->permission->where('parent_id', 0)->get();
        return view('admin.roles.create', compact('permissions'));
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $role = $this->role->create([
                'name' => $request->name,
                'display_name' => $request->display_name,
            ]);
            $role->permissions()->attach($request->permission_id);
            DB::commit();
            return redirect()->route('roles.role');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message:' . $exception->getMessage . 'Line: ' . $exception->getLine);
        }
    }
    public function edit($id)
    {
        $permissions = $this->permission->where('parent_id', 0)->get();
        $roles = $this->role->find($id);
        $permissionChecked = $roles->permissions;
        return view('admin.roles.edit', compact('permissions', 'roles', 'permissionChecked'));
    }
    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $role = $this->role->find($id);
            $role->update([
                'name' => $request->name,
                'display_name' => $request->display_name,
            ]);
            $role->permissions()->sync($request->permission_id);
            DB::commit();
            return redirect()->route('roles.role');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message:' . $exception->getMessage . 'Line: ' . $exception->getLine);
        }
    }
    public function delete($id)
    {
        try {
            $this->role->find($id)->delete();
            return response()->json([
                'code'=>200,
                'mesage'=>'soft delete success'
            ],200)
        } catch (Exception $exception) {
            return
        }
    }
}
