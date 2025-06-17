<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('shop.welcome');
})->name('home');


Route::get('/contact', function () {
    return view('shop.contact');
})->name('contact');

Route::get('/shop', function () {
    return view('shop.shop');
})->name('shop');

Route::get('/recipes', function () {
    return view('shop.recipes');
})->name('recipes');

Route::get('/farmers', function () {
    return view('shop.farmers');
})->name('farmers');
