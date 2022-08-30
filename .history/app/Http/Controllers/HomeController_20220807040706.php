<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slidersExtras = Slider::latest()->get();
        $sliderMain = Slider::oldest()->first();
        //Lây ra category cha
        $categories = Category::where('parent_id',0)->get();
        $products = Product::latest()->take(8)->get();
        $productsRecommend = Product::latest('views_count','desc')->take(12)->get();
        $productsAppreciate = Product::inRandomOrder()->limit(12)->get();
        return view('client.home',compact('sliderMain', 'slidersExtras', 'categories', 'products', 'productsRecommend', 'productsAppreciate'));
    }

    public function product($id){
        $categories = Category::where('parent_id', 0)->get();
        $productList = Product::where('category_id', $id)->paginate(16);
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        $productsDiscount = Product::latest('discount', 'asce')->take(6)->get();
        return view('client.product.shop-grid', compact('categories', 'productsRecommend', 'productsDiscount', 'productList'));
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
