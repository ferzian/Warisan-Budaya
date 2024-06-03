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

Route::get('/musium', function () {
    return view('/Main/halamanMusium');
});

Route::get('/bena', function () {
    return view('/Blog/ntt/BenaTraditionalVillage');
});
