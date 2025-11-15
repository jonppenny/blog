<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Front\IndexController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Auth\Register;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post/{id}', [IndexController::class, 'showPost']);

// Admin
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/posts', [PostController::class, 'index']);
    Route::post('/admin/posts', [PostController::class, 'store']);
    Route::get('/admin/{post}/edit', [PostController::class, 'edit']);
    Route::put('/admin/{post}', [PostController::class, 'update']);
    Route::delete('/admin/{post}', [PostController::class, 'destroy']);

    Route::get('/admin/pages', [PageController::class, 'index']);
    Route::post('/admin/pages', [PageController::class, 'store']);
    Route::get('/admin/{page}/edit', [PageController::class, 'edit']);
    Route::put('/admin/{page}', [PageController::class, 'update']);
    Route::delete('/admin/{page}', [PageController::class, 'destroy']);
});

// Auth
/*Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');
Route::post('/register', Register::class)
    ->middleware('guest');*/

// Login routes
Route::view('/user/login', 'auth.login')
    ->middleware('guest')
    ->name('login');
Route::post('/user/login', Login::class)
    ->middleware('guest');
// Logout route
Route::post('/user/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');
