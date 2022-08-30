<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPermissionController;
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
Route::get('/category/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/product-details/{id}', [HomeController::class, 'product_detail'])->name('shop-details');
Route::get('/list/shoping-cart.', [HomeController::class, 'product_cart'])->name('shoping-cart');
Route::get('/list/checkout', [HomeController::class, 'product_checkout'])->name('checkout');
Route::get('/list/blog-details', [HomeController::class, 'blog_detail'])->name('blog_details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');





Route::get('/admin', [AdminController::class, 'loginAdmin']);
Route::post('/admin', [AdminController::class, 'postLoginAdmin']);
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::prefix('/admin')->group(function () {
    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.category')->can('list_category');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create')->can('add_category');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit')->can('edit_category');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete')->can('delete_category');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    });
    Route::prefix('/menus')->group(function () {
        Route::get('/', [MenusController::class, 'index'])->name('menus.menu')->can('list_menu');
        Route::get('/create', [MenusController::class, 'create'])->name('menus.create')->can('add_menu');
        Route::post('/store', [MenusController::class, 'store'])->name('menus.store');
        Route::get('/edit/{id}', [MenusController::class, 'edit'])->name('menus.edit')->can('edit_menu');
        Route::get('/delete/{id}', [MenusController::class, 'delete'])->name('menus.delete')->can('delete_menu');
        Route::post('/update/{id}', [MenusController::class, 'update'])->name('menus.update');
    });
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.product')->can('list_product');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create')->can('add_product');
        Route::post('/create', [ProductController::class, 'store'])->name('products.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit')->can('edit_product');
        Route::post('/edit/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('products.delete')->can('delete_product');
    });
    Route::prefix('/slider')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('sliders.slider')->can('list_slider');
        Route::get('/create', [SliderController::class, 'create'])->name('sliders.create')->can('add_slider');
        Route::post('/strore', [SliderController::class, 'store'])->name('sliders.strore');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('sliders.edit')->can('edit_slider');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('sliders.update');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('sliders.delete')->can('delete_slider');
    });
    Route::prefix('/setting')->group(function () {
        Route::get('/', [AdminSettingController::class, 'index'])->name('settings.setting')->can('list_setting');
        Route::get('/create', [AdminSettingController::class, 'create'])->name('settings.create')->can('add_setting');
        Route::post('/store', [AdminSettingController::class, 'store'])->name('settings.store');
        Route::get('/edit/{id}', [AdminSettingController::class, 'edit'])->name('settings.edit')->can('edit_setting');
        Route::post('/update/{id}', [AdminSettingController::class, 'update'])->name('settings.update');
        Route::get('/delete/{id}', [AdminSettingController::class, 'delete'])->name('settings.delete')->can('delete_setting');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('users.user')->can('list_user');
        Route::get('/create', [AdminUserController::class, 'create'])->name('users.create')->can('add_user');
        Route::post('/store', [AdminUserController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('users.edit')->can('edit_user');
        Route::post('/update/{id}', [AdminUserController::class, 'update'])->name('users.update');
        Route::get('/delete/{id}', [AdminUserController::class, 'delete'])->name('users.delete')->can('delete_user');
    });
    Route::prefix('roles')->group(function () {
        Route::get('/', [AdminRoleController::class, 'index'])->name('roles.role')->can('list_role');
        Route::get('/create', [AdminRoleController::class, 'create'])->name('roles.create')->can('add_role');
        Route::post('/store', [AdminRoleController::class, 'store'])->name('roles.store');
        Route::get('/edit/{id}', [AdminRoleController::class, 'edit'])->name('roles.edit')->can('edit_role');
        Route::post('/update/{id}', [AdminRoleController::class, 'update'])->name('roles.update');
        Route::get('/delete/{id}', [AdminRoleController::class, 'delete'])->name('roles.delete')->can('delete_role');
    });
    Route::prefix('permissions')->group(function () {
        Route::get('/create', [AdminPermissionController::class, 'create'])->name('permissions.create')->can('add_permission');
        Route::post('/store', [AdminPermissionController::class, 'store'])->name('permissions.store');
    });
});
