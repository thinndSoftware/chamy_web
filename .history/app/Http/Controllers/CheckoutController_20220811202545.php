<?php
namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Contracts\Session\Session;
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
        $this->checkout->create([
            'shipping_name'=> $request->name,
            'shipping_address'=>
            $request->address_detail.'Xã, Phường: '. $request->address_wards.'Tỉnh, Thành Phố: '.$request->address_city,
            'shipping_phone'=>$request->phone,
            'shipping_email'=>$request->email,
            'shipping_description'=>$request->description
        ]);
        $shipping_id  = $this->checkout->shipping_id;
        $request->session()->put('shipping_id', $shipping_id);
        dd(session()->get('shipping_id'));
        return "gửi thông tin giao hàng thành công";
    }
}
