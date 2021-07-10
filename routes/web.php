<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/test', [App\Http\Controllers\IndexController::class, 'test']);

Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/create', [App\Http\Controllers\BlogController::class, 'create']);
Route::post('/store', [App\Http\Controllers\BlogController::class, 'store']);