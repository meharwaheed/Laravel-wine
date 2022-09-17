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
Route::get('/', [App\Http\Controllers\AusWineController::class, 'getWines'])->name('getWines');
Route::get('/createWine', [App\Http\Controllers\AusWineController::class, 'getForm'])->name('getForm');
Route::post('save',[\App\Http\Controllers\AusWineController::class, 'save'])->name('save');
Route::get('edit/{edit}', [\App\Http\Controllers\AusWineController::class, 'editWine'])->name('edit');
Route::put('update/{update}', [\App\Http\Controllers\AusWineController::class, 'updateWine'])->name('update');
Route::get('delete/{delete}', [\App\Http\Controllers\AusWineController::class, 'delete'])->name('delete');
