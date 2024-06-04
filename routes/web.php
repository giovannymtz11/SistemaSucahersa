<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\BajasController;

Route::get('/inicio', [ProductosController::class, 'index'])->name('inicio');

Route::get('/login', [SesionController::class, 'login'])->name('login');
Route::post('/login', [SesionController::class, 'login']); 
Route::get('/', [SesionController::class, 'login']); 

Route::get('/signin', [SesionController::class, 'signin'])->name('signin');
Route::post('/register', [SesionController::class, 'register'])->name('register');

Route::get('/forgotPassword', [SesionController::class, 'forgotPassword'])->name('forgotPassword');
Route::post('/update-password', [SesionController::class, 'updatePassword'])->name('updatePassword');

Route::get('/grafico-bajas', [BajasController::class, 'mostrarGraficoBajas'])->name('graficoBajas');

