<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminRoleController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;

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
        Route::get('/delete/{id}',[ProductController::class,'delete'])->name('products.delete');
    });
    Route::prefix('/slider')->group(function () {
        Route::get('/',[SliderController::class,'index'])->name('sliders.slider');
        Route::get('/create',[SliderController::class,'create'])->name('sliders.create');
        Route::post('/strore',[SliderController::class,'store'])->name('sliders.strore');
        Route::get('/edit/{id}',[SliderController::class,'edit'])->name('sliders.edit');
        Route::post('/update/{id}',[SliderController::class,'update'])->name('sliders.update');
        Route::get('/delete/{id}',[SliderController::class,'delete'])->name('sliders.delete');
    });
    Route::prefix('/setting')->group(function () {
        Route::get('/',[AdminSettingController::class,'index'])->name('settings.setting');
        Route::get('/create',[AdminSettingController::class,'create'])->name('settings.create');
        Route::post('/store',[AdminSettingController::class,'store'])->name('settings.store');
        Route::get('/edit/{id}',[AdminSettingController::class,'edit'])->name('settings.edit');
        Route::post('/update/{id}',[AdminSettingController::class,'update'])->name('settings.update');
        Route::get('/delete/{id}',[AdminSettingController::class,'delete'])->name('settings.delete');
    });
    Route::prefix('users')->group(function () {
        Route::get('/',[AdminUserController::class,'index'])->name('users.user');
        Route::get('/create',[AdminUserController::class,'create'])->name('users.create');
        Route::post('/store',[AdminUserController::class,'store'])->name('users.store');
        Route::get('/edit/{id}',[AdminUserController::class,'edit'])->name('users.edit');
        Route::post('/update/{id}',[AdminUserController::class,'update'])->name('users.update');
        Route::get('/delete/{id}',[AdminUserController::class,'delete'])->name('users.delete');
    });
    Route::prefix('roles')->group(function () {
        Route::get('/',[AdminRoleController::class,'index'])->name('roles.role');
        Route::get('/create',[AdminRoleController::class,'create'])->name('roles.create');
    });
});
