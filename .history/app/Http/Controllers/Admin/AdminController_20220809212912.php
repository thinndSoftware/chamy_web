<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // public function index(){
    //     return view('admin.dashboard');
    // }
    public function loginAdmin()
    {
        if (auth()->check()) {
            return redirect()->route('category.category');
        }
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $remember = $request->has('rememberMe') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $remember)) {
            // return redirect('admin.dashboard');
            // dd(Auth::user());
            return redirect()->route('category.category');
        }
        return view('admin.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }
    public function show_register()
    {
        # code...
    }
}
