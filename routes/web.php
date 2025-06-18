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
