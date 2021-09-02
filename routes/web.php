<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WEB\RestauranteController;
use App\Http\Controllers\WEB\CardapioController;

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

Route::get('/', [RestauranteController::class,'index']);
Route::get('restaurante/{restaurante}/cardapios', [CardapioController::class,'index'])->name('cardapios.index');
