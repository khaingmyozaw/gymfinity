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

Route::get('/sign-up', function() {
    return view('pages.auth.register-page');
})->name('signup');
Route::get('/sign-in', function() {
    return view('pages.auth.login-page');
})->name('signin');