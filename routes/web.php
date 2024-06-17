<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\BajasController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/inicio', [ProductosController::class, 'index'])->name('inicio');
    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios');
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');
    Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
    Route::put('/usuarios/{usuario}/estado', [UsuarioController::class, 'updateEstado'])->name('usuarios.updateEstado');
});

Route::get('/grafico-bajas', [BajasController::class, 'mostrarGraficoBajas'])->name('graficoBajas');
