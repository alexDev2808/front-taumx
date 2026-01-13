<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SistemasController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/sistemas', [SistemasController::class, 'index'])->name('sistemas.index');
Route::get('/personal', [PersonalController::class, 'index'])->name('personal.index');

