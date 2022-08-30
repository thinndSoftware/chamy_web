<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Class constructor.
     */
    private $checkout;
    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }
    public function login_checkout()
    {
        if (Auth::check()) {
           return view('client.list.checkout');
        }
        return redirect()->route('login');
    }
    public function save_checkout_customer(Request $request)
    {

    }
}
