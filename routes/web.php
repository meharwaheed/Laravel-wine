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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('getWines');
Route::resource('ausWines', \App\Http\Controllers\HomeController::class);
Route::get('ausWine_destroy/{ausWine_destroy}', [\App\Http\Controllers\HomeController::class, 'destroy'])->name('ausWine_destroy');
