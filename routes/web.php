<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Volt;
use LivewireFilemanager\Filemanager\Http\Controllers\Files\FileController;

// Trang dashboard khi đã đăng nhập
Route::get('/', function () {
    return redirect()->route('dashboard');
})->middleware(['auth', 'verified']);

// Trang login khi chưa đăng nhập
Volt::route('/', 'pages.auth.login')
    ->middleware('guest');
    
Volt::route('/register', 'pages.auth.login')
    ->middleware('guest')
    ->name('register');
Volt::route('/login', 'pages.auth.login')
    ->middleware('guest')
    ->name('login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('{path}', [FileController::class, 'show'])->where('path', '.*')->name('assets.show');

require __DIR__ . '/auth.php';
