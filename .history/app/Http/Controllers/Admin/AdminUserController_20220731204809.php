<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->$user = $user;
        dd($user);
    }
    public function index()
    {
        $users = $this->user->paginate(10);
        return view('admin.users.user', compact('users'));
    }
}
