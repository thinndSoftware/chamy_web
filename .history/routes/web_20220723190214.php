<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop-grid', [HomeController::class, 'product'])->name('product');
Route::get('/list/shop-details', [HomeController::class, 'product_detail'])->name('shop-details');
Route::get('/list/shoping-cart.', [HomeController::class, 'product_cart'])->name('shoping-cart');
Route::get('/list/checkout', [HomeController::class, 'product_checkout'])->name('checkout');
Route::get('/list/blog-details', [HomeController::class, 'blog_detail'])->name('blog_details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');




Route::get('/admin', [AdminController::class, 'loginAdmin']);
Route::post('/admin', [AdminController::class, 'postLoginAdmin']);

Route::prefix('/admin')->group(function(){
    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.category');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    });
    Route::prefix('/menus')->group(function () {
        Route::get('/', [MenusController::class, 'index'])->name('menus.menu');
        Route::get('/create', [MenusController::class, 'create'])->name('menus.create');
        Route::post('/store',[MenusController::class, 'store'])->name('menus.store');
        Route::get('/edit/{id}', [MenusController::class, 'edit'])->name('menus.edit');
        Route::get('/delete/{id}', [MenusController::class, 'delete'])->name('menus.delete');
        Route::post('/update/{id}', [MenusController::class, 'update'])->name('menus.update');
    });
    Route::prefix('/product')->group(function(){
        Route::get('/', [ProductController::class,'index'])->name('products.product');
        Route::get('/create', [ProductController::class,'create'])->name('products.create');
        Route::post('/create',[ProductController::class,'store'])->name('products.store');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
        Route::post('/edit/{id}',[ProductController::class,'update'])->name('products.update');
        Route::get('/delete',[ProductController::class,'delete'])->name('products.delete');
    });
});
