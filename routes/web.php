<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', IndexController::class);
Route::get('/contact', ContactController::class);

Route::get('/jobs', [JobController::class, 'index']);

Route::resource('comments', CommentController::class);

Route::resource('tags', TagController::class);

Route::get('/signup', [AuthController::class, 'showSignupForm']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware for authenticated users
Route::middleware('auth')->group(function () {
    Route::resource('blog', PostController::class);
});

Route::middleware('onlyMy')->group(function () {
    Route::get('/about', AboutController::class);
});
