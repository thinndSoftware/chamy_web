<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        if (Auth::check()) {
           return 'đã được đăng nhập';
        }
        return redirect()->route('login');
    }
}
