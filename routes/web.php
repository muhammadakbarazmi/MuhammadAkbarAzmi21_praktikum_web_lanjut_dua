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
Route::get('/index', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);
Route::get('/articles/{id}', [App\Http\Controllers\PageController::class, 'articles']);


Route::get('/', [App\Http\Controllers\HomeController::class, '_invoke']);
Route::get('/about', [App\Http\Controllers\AboutController::class, '__invoke']);
Route::get('/articles/{id}', [App\Http\Controllers\ArticlesController::class, '__invoke']);


