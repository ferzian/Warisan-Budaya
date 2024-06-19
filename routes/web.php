<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::latest()->take(5)->get();
    return view('Main/home', ['home' => $posts]);
    // return view('Main/home');
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
    $posts = Post::latest()->get();
    return view('kategori/posts', ['posts' => $posts]);
});

Route::get('/posts/{post:title}', function (Post $post) {
    return view('kategori/post', ['post' => $post]);
});

Route::get('/musium', function () {
    return view('/Main/halamanMusium');
});

Route::get('/categories/{category:name}', function (Category $category){
    return view('kategori/posts', ['posts' => $category->posts]);
});
