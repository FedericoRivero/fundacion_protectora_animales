<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\difusionController;

Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::resource('mensajes',MensajesController::class)->middleware('auth');

Route::get('articulos/exportar',[ArticulosController::class, 'ExportExcel'])->middleware('auth')->name('exportarArticulos');
Route::post('articulos/importar',[ArticulosController::class, 'ImportarExcel'])->middleware('auth')->name('importarArticulos');
Route::resource('articulos',ArticulosController::class)->middleware('auth');

Route::get('difusion/enviarSaludo/{nombre}/{direccion}',[difusionController::class, 'Bienvenida']);

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/home','home')->name('HOME')->middleware('auth');