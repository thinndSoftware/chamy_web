<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slidersExtras = Slider::latest()->get();
        dd($slidersExtras);
        $sliderMain = Slider::all();
        $sliderMain = $sliderMain[0];
        return view('client.home',compact('sliderMain', 'slidersExtras'));
    }

    public function product(){
        return view('client.product.shop-grid');
    }


    public function product_detail(){
        return view('client.list.shop-details');
    }
    public function product_cart(){
        return view('client.list.shoping-cart');
    }
    public function product_checkout(){
        return view('client.list.shop-checkout');
    }
    public function blog_detail(){
        return view('client.list.blog-details');
    }

    public function blog(){
        return view('client.blog.blog');
    }

    public function contact(){
        return view('client.contact.contact');
    }
}
