<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Main/home');
});

Route::get('/galeri', function () {
    return view('Main/galeri');
});

Route::get('/about', function () {
    return view('Main/about');
});

Route::get('/monas', function () {
    return view('/Blog/jakarta/monas');
});
