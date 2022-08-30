<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        if (Auth::check()) {
           return redirect()->route('checkout');
        }
        return redirect()->route('login');
    }
}
