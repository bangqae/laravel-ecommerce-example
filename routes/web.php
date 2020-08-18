<?php

use Illuminate\Support\Facades\Route; // Baru dari laravel 7 ? idk lol

// Home
Route::get('/', 'LandingPageController@index')->name('landing-page');

// Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

// Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name(
    'saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name(
    'saveForLater.switchToCart');

// Empty save for later
Route::get('/empty', function () {
    Cart::instance('saveForLater')->destroy();
});

Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
