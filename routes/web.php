<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntegralController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('index');

Route::get('/hojaderuta', [IntegralController::class, 'index'])->name('hoja_de_ruta');

Route::get('/hojaderuta/proceso', [IntegralController::class, 'proceso'])->name('hoja_de_ruta_proceso');