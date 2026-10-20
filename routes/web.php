<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; 
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});
 


Route::get('/home', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/array/shuffle', [MainController::class, 'shuffleProducts'])->name('array.shuffle');
Route::get('/array/sort', [MainController::class, 'sortProducts'])->name('array.sort');
Route::get('/array/filter', [MainController::class, 'filterProducts'])->name('array.filter');

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');


Route::get('/reports/create', function() {
    return view('reports.create');
})->name('reports.create');
