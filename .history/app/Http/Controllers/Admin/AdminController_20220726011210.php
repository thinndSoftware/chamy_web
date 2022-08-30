<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function index(){
    //     return view('admin.dashboard');
    // }
    public function loginAdmin()
    {
        // dd(auth()->check());
        if(auth()->check()){
            return redirect('admin/category');
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
            dd('login đc');
        }
        return view('admin.login');
    }
}
