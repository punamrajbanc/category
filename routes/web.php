<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//category routes
Route::get('category', [App\Http\Controllers\CategoryController::class,'index']);
Route::get('category/create', [App\Http\Controllers\CategoryController::class,'create']);
Route::post('category/store', [App\Http\Controllers\CategoryController::class,'store'])->name('category.store');
