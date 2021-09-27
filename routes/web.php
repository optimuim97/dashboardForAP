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

Route::get('/', function () {
    return view('home');
    // return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();




Route::resource('entities', App\Http\Controllers\EntityController::class);


Route::resource('entityTypes', App\Http\Controllers\EntityTypeController::class);


Route::resource('products', App\Http\Controllers\ProductController::class);


Route::resource('posts', App\Http\Controllers\PostController::class);
