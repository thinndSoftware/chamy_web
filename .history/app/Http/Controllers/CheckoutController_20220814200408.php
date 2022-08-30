<?php
namespace App\Http\Controllers;

use App\Http\Requests\SaveCheckout;
use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Class constructor.
     */
    private $checkout;
    private $order;
    public function __construct(Checkout $checkout, Order $order)
    {
        $this->checkout = $checkout;
        $this->order = $order;
    }
    public function login_checkout()
    {
        if (Auth::check()) {
            if(!empty(Cart::content()->count() == 0)){
                return redirect()->route('home');
            }
           return view('client.list.checkout');
        }
        return redirect()->route('login');
    }
    public function save_checkout_customer(SaveCheckout $request)
    {
        //insert shipping table
        $checkoutInsert = $this->checkout->create([
            'shipping_name'=> $request->name,
            'shipping_address'=>
            $request->address_detail.' Xã, Phường: '. $request->address_wards.' Tỉnh, Thành Phố: '.$request->address_city,
            'shipping_phone'=>$request->phone,
            'shipping_email'=>$request->email,
            'shipping_description'=>$request->description ?? ""
        ]);

        $shipping_id = $checkoutInsert->id;
        $request->session()->put('shipping_id', $shipping_id);

        // insert oreder table

        $orderInssert = $this->order->create([
            'user_id' => Auth::user()->id,
            'shipping_id'=> $shipping_id,
            'order_total'=> Cart::subtotal(),
            'order_status'=> 'Đang chờ xử lý'
        ]);

        $contents = Cart::content();
        foreach ($contents as $content) {
            $dataOrderDetail['order_id'] = $orderInssert->id;
            $dataOrderDetail['product_id'] = $content->id;
            $dataOrderDetail['product_name'] = $content->name;
            $dataOrderDetail['product_discount'] = $content->price;
            $dataOrderDetail['product_qty'] = $content->qty;
            // $orderDetailInssert = DB::table('order_details')->insert($dataOrderDetail);
            $orderInssert->orderDetail()->create($dataOrderDetail);
        }
 Cart::destroy();

        return view('client.contact.handcard');
    }
}
