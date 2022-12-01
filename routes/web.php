<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\DifusionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MensajesController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Ruta Protegida Mensajes
Route::resource('mensajes', MensajesController::class)->middleware('auth');

// Rutas Protegidas para laravel/Excel
Route::get('articulos/exportar', [ArticulosController::class, 'ExportExcel'])->middleware('auth')->name('exportarArticulos');
Route::post('articulos/importar', [ArticulosController::class, 'ImportarExcel'])->middleware('auth')->name('importarArticulos');
Route::resource('articulos', ArticulosController::class)->middleware('auth');

// Ruta enviarMail
Route::get('difusion/enviarSaludo/{nombre}/{direccion}', [DifusionController::class, 'Bienvenida']);

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

// Ruta Protegida HOME
Route::view('/home', 'home')->name('HOME')->middleware('auth');
