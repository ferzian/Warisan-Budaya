<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Main/home');
});

Route::get('/about', function () {
    return view('Main/about');
});

Route::get('/login', function () {
    return view('Main/login');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/posts', function () {
    return view('kategori/posts', ['posts' => Post::all()]);
});

Route::get('/posts/{post:title}', function (Post $post) {
    return view('kategori/post', ['post' => $post]);
});

Route::get('/musium', function () {
    return view('/Main/halamanMusium');
});
