<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/detail', function() {
    return view('pages.products.product-details');
});
Route::get('/register', function() {
    return view('pages.register-page');
});
Route::get('/login', function() {
    return view('pages.login-page');
});