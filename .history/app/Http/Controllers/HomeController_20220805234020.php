<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slidersExtras = Slider::latest()->get();
        $sliderMain = Slider::oldest()->first();
        //Lây ra category cha
        $categories = Category::where('parent_id',0)->get();
        return view('client.home',compact('sliderMain', 'slidersExtras', 'categories'));
    }

    public function product(){
        $categories = Category::where('parent_id', 0)->get();
        $sliderMain = null;
        return view('client.product.shop-grid',compact('sliderMain','categories'));
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
