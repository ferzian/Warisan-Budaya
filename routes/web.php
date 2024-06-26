<?php

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    $posts = Post::latest()->take(6)->get();
    return view('Main/home', ['home' => $posts]);
    // return view('Main/home');
});

Route::get('/about', function () {
    return view('Main/about');
});

Route::get('/index', function () {
    return view('login/index');
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

Route::get('/login', [LoginController::class, 'index']);

Route::get('/Register', [RegisterController::class, 'index']);
Route::post('/Register', [RegisterController::class, 'store']);

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');