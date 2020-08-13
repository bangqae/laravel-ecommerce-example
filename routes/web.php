<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'landing-page');
// Route::get('/', [
//     'uses' => 'LandingPageController@index',
//     'as' => 'index'
// ]);
Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
