<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug){

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);   
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['name' => 'Zefanya Teguh Foyd Silalahi']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/welcome', function () {
    return view('welcome', ['title' => 'Welcome']);
});