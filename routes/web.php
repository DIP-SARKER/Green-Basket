<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('consumer.welcome');
})->name('home');


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