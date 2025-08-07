<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', function () {
    return redirect()->route('home'); // Placeholder for login logic
})->name('login.post');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', function () {
    return redirect()->route('home'); // Placeholder for registration logic
})->name('register.post');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/single-blog', function () {
    return view('single-blog');
})->name('single-blog');
