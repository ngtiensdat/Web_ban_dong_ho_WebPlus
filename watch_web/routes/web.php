<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
// Đăng nhập
Route::get('/sign-in', [AuthController::class, 'showLoginForm'])->name('sign-in');
Route::post('/sign-in', [AuthController::class, 'login']);

// Đăng ký
Route::get('/sign-up', [AuthController::class, 'showRegisterForm'])->name('sign-up');
Route::post('/sign-up', [AuthController::class, 'register']);

// Đăng xuất
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Trang chủ
Route::get('/', [HomeController::class, 'home'])->name('home');

// Trang sản phẩm
Route::get('/product', [WatchController::class, 'index'])->name('product');

// Bộ sưu tập
Route::get('/collection', [PageController::class, 'collection'])->name('collection');

// Liên hệ
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Đăng nhập
Route::get('/sign-in', [PageController::class, 'signIn'])->name('sign-in');

// Đăng ký
Route::get('/sign-up', [PageController::class, 'signUp'])->name('sign-up');

// API lấy danh sách sản phẩm
Route::get('/api/watches', [WatchController::class, 'getWatches']);

// Các trang không cần Controller
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/themSP', function () {
    return view('themSP');
})->name('themSP');

Route::get('/workspace', function () {
    return view('workspace');
})->name('workspace');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');