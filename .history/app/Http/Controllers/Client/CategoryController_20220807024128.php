<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $categories = Category::where('parent_id',0)->get();
        return view('client.product.shop-grid');
    }
}
