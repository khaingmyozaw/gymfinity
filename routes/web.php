<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/product-list', function() {
    return view('pages.clothes.clothe-list');
});