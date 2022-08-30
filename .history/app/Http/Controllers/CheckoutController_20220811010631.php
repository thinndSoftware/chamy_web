<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        if (Auth::check()) {
           return view('client.list.checkout');
        }
        return redirect()->route('login');
    }
}
