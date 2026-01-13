<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/personal', [PersonalController::class, 'index'])->name('personal.index');
