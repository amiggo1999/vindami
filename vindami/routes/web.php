<?php

Route::get('/', 'LandingPageController@index')->name('landingpage');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('empty', function() {
    Cart::destroy();
});

Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');