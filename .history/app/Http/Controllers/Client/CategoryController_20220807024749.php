<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $categories = Category::where('parent_id',0)->get();
        $productsRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        return view('client.product.shop-grid',compact('categories','productsRecommend'));
    }
}
