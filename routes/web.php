<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; 

Route::get('/', function () {
    return view('welcome');
});
 


Route::get('/home', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/array/shuffle', [MainController::class, 'shuffleProducts'])->name('array.shuffle');
Route::get('/array/sort', [MainController::class, 'sortProducts'])->name('array.sort');
Route::get('/array/filter', [MainController::class, 'filterProducts'])->name('array.filter');
