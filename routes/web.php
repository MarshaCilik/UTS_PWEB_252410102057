<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\PengelolaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CekLoginAdmin;
use App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'login'])->name('login');

Route::post('/login', [PageController::class, 'proses'])->name('login.proses');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
