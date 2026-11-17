<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; 
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/array/shuffle', [MainController::class, 'shuffleProducts'])->name('array.shuffle');
Route::get('/array/sort', [MainController::class, 'sortProducts'])->name('array.sort');
Route::get('/array/filter', [MainController::class, 'filterProducts'])->name('array.filter');

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');
Route::get('/reports/{report}/edit', [ ReportController::class, 'edit'])->name('reports.edit');
Route::put('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');


Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');
});




Route::get('/reports/create', function() {
    return view('reports.create');
})->name('reports.create');

require __DIR__.'/auth.php';
