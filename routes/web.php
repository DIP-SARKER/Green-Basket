<?php

use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\SellerAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('consumer.welcome');
})->name('home');


Route::get('/register', [CustomerAuthController::class,'showForm']);
Route::post('/register', [CustomerAuthController::class,'register'])->name('registerbutton');

Route::get('/customer/login', [CustomerAuthController::class,'showForm'])->name('customer_auth');
Route::post('/customer/login', [CustomerAuthController::class,'login']);
Route::post('/customer/logout', [CustomerAuthController::class,'logout'])->name('customer_logout');


Route::get('/customerprofile', function () {
    return view('consumer.customerProfile'); })->name('cprofile');

 
Route::get('/contact', function () {
    return view('consumer.contact');
})->name('contact');

Route::get('/shop', function () {
    return view('consumer.shop.shop');
})->name('shop');

Route::get('/shop/vegetableShop', function () {
    return view('consumer.shop.vegetableShop');
})->name('vegetableShop');

Route::get('/shop/fruitShop', function () {
    return view('consumer.shop.fruitShop');
})->name('fruitShop');

Route::get('/shop/meatShop', function () {
    return view('consumer.shop.meatShop');
})->name('meatShop');

Route::get('/shop/fishShop', function () {
    return view('consumer.shop.fishShop');
})->name('fishShop');

Route::get('/shop/dairyShop', function () {
    return view('consumer.shop.dairyShop');
})->name('dairyShop');

Route::get('/shop/bakeryShop', function () {
    return view('consumer.shop.bakeryShop');
})->name('bakeryShop');

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
    return view('admin.dashboard');
})->name('admin-dashboard');

Route::get('/admin/products', function () {
    return view('admin.products_management');
})->name('products-management');

Route::get('/admin/orders', function () {
    return view('admin.orders_management');
})->name('orders-management');

Route::get('/admin/farmers', function () {
    return view('admin.farmers_management');
})->name('farmers-management');

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




Route::get('/sellerregister', [SellerAuthController::class,'showForm']);
Route::post('/sellerregister', [SellerAuthController::class,'register']);
Route::get('/seller/login', [SellerAuthController::class,'showForm'])->name('seller_auth');
Route::post('/seller/login', [SellerAuthController::class,'login']);
Route::post('/seller/logout', [SellerAuthController::class,'logout'])->name('seller_logout');


Route::get('/sellerProfile', function () {
    return view('seller.sellerProfile'); });