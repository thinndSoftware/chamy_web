<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddAccountRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
            // dd(Auth::user()->roles[0]->id);
            if(Auth::user()->roles[0]->id === 2){
                return redirect()->route('shoping-cart');

            }
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
        return view('admin.register');
    }
    public function register(AddAccountRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->roles()->attach(2);
            DB::commit();
            return redirect()->route('login');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("Message :" . $exception->getMessage() . "Line: " . $exception->getLine());
        }
    }
}
