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

        dd("ádfaf");
        // $this->checkout->create([
        //     'shipping_name'=>$request->name,
        //     'shipping_address'=>
        //     $request->address_detail.'Xã, Phường: '. $request->address_wards.'Tỉnh, Thành Phố: '.$request->address_city,
        //     'shipping_phone'=>$request->phone,
        //     'shipping_email'=>$request->email,
        //     'shipping_description'=>$request->description
        // ]);
        // return redirect()->route('');
        // return "gửi thông tin giao hàng thành công";
    }
}
