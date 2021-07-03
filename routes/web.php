<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\WorkController;

Route::get('/', Homecontroller::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('works', [WorkController::class, 'index'])->name('works.index');

Route::get('works/{work}', [WorkController::class, 'show'])->name('works.show');

Route::post('works/{work}/applied', [WorkController::class, 'applied'])->middleware('auth')->name('works.applied');
