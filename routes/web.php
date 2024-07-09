<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/p-detail', function() {
    return view('pages.products.product-details');
});

Route::get('/b-detail', function() {
    return view('pages.blogs.blog-details');
});
Route::get('/i-detail', function() {
    return view('pages.products.item-details');
});

Route::get('/register', function() {
    return view('pages.register-page');
});
Route::get('/login', function() {
    return view('pages.login-page');
});