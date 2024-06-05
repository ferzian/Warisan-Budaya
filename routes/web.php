<?php

use App\Models\bangunan;
use Illuminate\Support\Arr;
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

Route::get('/login', function () {
    return view('Main/login');
});

Route::get('/bangunan', function () {
    return view('kategori/bangunan', ['bangunan' => Bangunan::all()]);
});

Route::get('/bangunan/{blogBangunan:title}', function (Bangunan $blogBangunan) {
    // $blogBangunan = Bangunan::find($title);

    return view('kategori/blogBangunan', ['blogBangunan' => $blogBangunan]);
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
