<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
//Route::get('/about', [IndexController::class, 'showPage'])->defaults('slug', 'about');

/*Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});*/

/*Route::get('/privacy', function () {
    return view('privacy');
});*/

Route::get('/post/{id}', [IndexController::class, 'showPost'])->name('post.show');

// Admin
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/admin/post', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/post', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('/admin/post/{post}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('/admin/post/{post}/edit', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('/admin/{post}/destroy', [PostController::class, 'destroy'])->name('admin.post.destroy');

    Route::get('/admin/pages', [PageController::class, 'index'])->name('admin.pages.index');
    Route::get('/admin/page', [PageController::class, 'create'])->name('admin.page.create');
    Route::post('/admin/page', [PageController::class, 'store'])->name('admin.page.store');
    Route::get('/admin/page/{page}/edit', [PageController::class, 'edit'])->name('admin.page.edit');
    Route::put('/admin/page/{page}/edit', [PageController::class, 'update'])->name('admin.page.update');
    Route::delete('/admin/{page}/destroy', [PageController::class, 'destroy'])->name('admin.page.destroy');

    //Route::get('/admin/menus', [MenuController::class, 'index'])->name('admin.menus');

    Route::get('/admin/account', [AccountController::class, 'index'])->name('admin.account');
    Route::put('/admin/account', [AccountController::class, 'update'])->name('admin.account.update');
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

Route::feeds();

// Catch-all route for dynamic pages (MUST be last)
Route::get('/{slug}', [IndexController::class, 'showPage'])
    ->where('slug', '[a-zA-Z0-9\-]+');
