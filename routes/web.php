<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SistemasController;
use App\Http\Controllers\CalidadController;
use App\Http\Controllers\CalidadSCRAPController;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/sistemas', [SistemasController::class, 'index'])->name('sistemas.index');
Route::get('/personal', [PersonalController::class, 'index'])->name('personal.index');

// Ruta para el sitio de Calidad
Route::get('/calidad', [CalidadController::class, 'index'])->name('calidad.index');

// Ruta para el sitio de Registro de Scrap(Calidad)
Route::get('/calidad/registro-scrap', [CalidadSCRAPController::class, 'index'])->name('calidad.scrap.index');
Route::get('/calidad/scrap/create', [CalidadSCRAPController::class, 'create'])->name('calidad.scrap.create');
Route::post('/calidad/scrap/store', [CalidadSCRAPController::class, 'store'])->name('calidad.scrap.store');

