<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminCheckoutController;
use App\Http\Controllers\Admin\AdminContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminInsuranceController;
use App\Http\Controllers\Admin\AdminPermissionController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\Admin\AdminRoleController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SendMailController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\CheckoutController;

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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/search', [HomeController::class, 'search'])->name('search-product');

// Product
Route::get('/category/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/category/product/product-details/{id}', [HomeController::class, 'product_detail'])->name('shop-details');

// Cart
Route::get('/list/shoping-cart', [HomeController::class, 'product_cart'])->name('shoping-cart');
Route::post('/list/save-cart', [HomeController::class, 'save_cart'])->name('save_cart');
Route::get('/delete-card/{id}', [HomeController::class, 'delete_cart'])->name('delete_cart');
Route::post('/update-card', [HomeController::class, 'update_cart'])->name('update_cart');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'login_checkout'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'save_checkout_customer'])->name('save-checkout');



// Blog
Route::get('/blog/details/{id}', [HomeController::class, 'blog_detail'])->name('blog_details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

// Contact
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/send-contact', [HomeController::class, 'sendContact'])->name('contact.send');

//Insurance
Route::get('/insurance', [HomeController::class, 'insurance'])->name('insurance');
Route::post('/insurance', [HomeController::class, 'insurance'])->name('insurance');



Route::get('/admin', [AdminController::class, 'loginAdmin'])->name('login');
Route::post('/admin', [AdminController::class, 'postLoginAdmin']);
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/register', [AdminController::class, 'show_register'])->name('register');
Route::post('/register', [AdminController::class, 'register'])->name('register.create');

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
    Route::prefix('blog')->group(function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('blogs.blog');
        Route::get('/create', [AdminBlogController::class, 'create'])->name('blogs.create');
        Route::post('/store', [AdminBlogController::class, 'store'])->name('blogs.store');
        Route::get('/edit/{id}', [AdminBlogController::class, 'edit'])->name('blogs.edit');
        Route::post('/update/{id}', [AdminBlogController::class, 'update'])->name('blogs.update');
        Route::get('/delete/{id}', [AdminBlogController::class, 'delete'])->name('blogs.delete');
    });
    Route::prefix('order')->group(function () {
        Route::get('/', [AdminCheckoutController::class, 'index'])->name('orders.order');
        Route::get('/view-order/{id}', [AdminCheckoutController::class, 'view_order'])->name('order.view');
        Route::get('/print-order/{id}', [AdminCheckoutController::class, 'print_order'])->name('order.print');
        Route::get('/done/{id}', [AdminCheckoutController::class, 'done_order'])->name('order.done');
        Route::get('/send_order/{id}', [AdminCheckoutController::class, 'sendMail_done_order'])->name('order.sendmail');
        Route::get('/delete_order/{id}', [AdminCheckoutController::class, 'delete_order'])->name('order.delete');
    });
    Route::prefix('reports')->group(function () {
        Route::get('/report', [AdminReportController::class, 'view'])->name('report.view');
        Route::post('/report', [AdminReportController::class, 'getReport'])->name('report.getReport');
        Route::get('/print-report/{DateTimeBefore}/{DateTimeAfter}', [AdminReportController::class, 'print_report'])->name('report.print');
        Route::get('/product', [AdminReportController::class, 'view_product'])->name('report.product');
        Route::post('/product', [AdminReportController::class, 'getReportProduct'])->name('report.getProduct');
        Route::get('/report-product/{DateTimeBefore}/{DateTimeAfter}', [AdminReportController::class, 'print_product'])->name('report.Printproduct');
    });
    Route::prefix('/contact')->group(function () {
        Route::get('/',[AdminContactController::class, 'index'])->name('contact.view');
        Route::get('/contact-rep/{id}',[AdminContactController::class, 'view'])->name('contact.view.detail');
        Route::post('/contact-rep',[AdminContactController::class, 'sendContact'])->name('contact.rep');
        Route::get('/contact-delete/{id}',[AdminContactController::class, 'delete'])->name('contact.delete');
    });
    Route::prefix('/insurance')->group(function () {
        Route::get('/',[AdminInsuranceController::class,'index'])->name('insurance.view');
        Route::get('/create',[AdminInsuranceController::class,'create'])->name('insurance.create');
        Route::post('/create',[AdminInsuranceController::class,'store'])->name('insurance.store');
        Route::get('/edit/{id}',[AdminInsuranceController::class,'edit'])->name('insurance.edit');
        Route::post('/update/{id}',[AdminInsuranceController::class,'update'])->name('insurance.update');
        Route::get('/delete/{id}',[AdminInsuranceController::class,'delete'])->name('insurance.delete');
    });
});
