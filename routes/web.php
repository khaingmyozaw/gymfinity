<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// Route::get('/nav', function() {
//     return view('pages.nav');
// });