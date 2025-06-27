<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomePageController::class, 'dashboard'])->name('dashboard');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/register/create', [AuthController::class, 'show_register_form'])->name('register.create');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
    
    Route::get('/login/create', [AuthController::class, 'show_login_form'])->name('login.create');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});
