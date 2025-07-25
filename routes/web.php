<?php

use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\SellerAuthController;
use App\Http\Middleware\AuthSeller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Seller\ProductController as SellerProductController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\SellerController as AdminSellerController;


Route::get('/', function () {
    return view('consumer.welcome');
})->name('home');


Route::get('/register', [CustomerAuthController::class, 'showForm']);
Route::post('/register', [CustomerAuthController::class, 'register'])->name('registerbutton');

Route::get('/customer/login', [CustomerAuthController::class, 'showForm'])->name('customer_auth');
Route::post('/customer/login', [CustomerAuthController::class, 'login']);
Route::post('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer_logout');
Route::get('/customer/profile', [CustomerAuthController::class,'showProfile'])->name('cprofile');


// Route::get('/customerprofile', function () {
//     return view('consumer.customerProfile');
// })->name('cprofile');


Route::get('/contact', function () {
    return view('consumer.contact');
})->name('contact');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/category/{id}', [ProductController::class, 'category'])->name('shop.category');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');




Route::get('/recipes', function () {
    return view('consumer.recipes');
})->name('recipes');

Route::get('/farmers', function () {
    return view('consumer.farmers');
})->name('farmers');

Route::get('/about', function () {
    return view('consumer.about');
})->name('about');



Route::get('/seasonal', function () {
    return view('consumer.extra.seasonal');
})->name('seasonal');
Route::get('/deliveryinfo', function () {
    return view('consumer.extra.deliveryinfo');
})->name('deliveryinfo');

Route::get('/faq', function () {
    return view('consumer.extra.faq');
})->name('faq');

Route::get('/loyaltyprogram', function () {
    return view('consumer.extra.loyaltyprogram');
})->name('loyaltyprogram');

Route::get('/paymentsecurity', function () {
    return view('consumer.extra.paymentsecurity');
})->name('paymentsecurity');

Route::get('/referfriends', function () {
    return view('consumer.extra.referfriends');
})->name('referfriends');

Route::get('/returnaproduct', function () {
    return view('consumer.extra.returnaproduct');
})->name('returnaproduct');

Route::get('/sustainability', function () {
    return view('consumer.extra.sustainability');
})->name('sustainability');

Route::get('/privacypolicy', function () {
    return view('consumer.extra.privacypolicy');
})->name('privacypolicy');

Route::get('/termsandcondition', function () {
    return view('consumer.extra.termsandcondition');
})->name('termsandcondition');


Route::get('/admin', function () {
    return view('admin.login');
})->name('admin-login');


Route::get('/admin/dashboard', function () {
    return view('admin.overview');
})->name('admin-overview');



Route::get('/admin/products', [AdminProductController::class, 'index'])->name('products-management');
Route::patch('/admin/products/{id}/toggle-activity', [AdminProductController::class, 'toggleActivity'])->name('products.toggleStatus');
Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])->name('products.delete');

Route::get('/admin/farmers', [AdminSellerController::class, 'index'])->name('sellers-management');
Route::put('/admin/farmers/{id}/update', [AdminSellerController::class, 'update'])->name('sellers.update');
Route::delete('/admin/farmers/{id}/delete', [AdminSellerController::class, 'delete'])->name('sellers.delete');




Route::get('/admin/orders', function () {
    return view('admin.orders_management');
})->name('orders-management');


Route::get('/admin/customers', function () {
    return view('admin.customers_management');
})->name('customers-management');

Route::get('/admin/analytics', function () {
    return view('admin.analytics');
})->name('analytics-dashboard');

Route::get('/admin/discounts', function () {
    return view('admin.discounts');
})->name('discounts-management');

Route::get('/admin/support', function () {
    return view('admin.support');
})->name('support-management');

Route::get('/admin/settings', function () {
    return view('admin.settings');
})->name('settings');





Route::get('/sellerregister', [SellerAuthController::class, 'showForm']);
Route::post('/sellerregister', [SellerAuthController::class, 'register']);
Route::get('/seller/login', [SellerAuthController::class, 'showForm'])->name('seller_auth');
Route::post('/seller/login', [SellerAuthController::class, 'login']);
Route::post('/seller/logout', [SellerAuthController::class, 'logout'])->name('seller_logout');


Route::get('/sellerProfile', function () {
    return view('seller.sellerProfile');
});


Route::middleware([AuthSeller::class])->group(function () {
    Route::get('/products/create', [SellerProductController::class, 'create'])->name('seller.products.create');
    Route::post('/products', [SellerProductController::class, 'store'])->name('seller.products.store');
});



