<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\Web\PlaceController;
use App\Http\Controllers\Web\QuotationController;
use App\Http\Controllers\Web\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\WorkController;

Route::get('/', Homecontroller::class)->name('home');

Route::get('cotizaciones', [CotizacionController::class, 'index'])->name('cotizaciones');
Route::post('cotizaciones/store', [CotizacionController::class, 'store'])->name('cotizaciones.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('works', [WorkController::class, 'index'])->name('works.index');

Route::get('works/{work}', [WorkController::class, 'show'])->name('works.show');

Route::post('works/{work}/applied', [WorkController::class, 'applied'])->middleware('auth')->name('works.applied');

Route::resource('services', ServiceController::class)->names('services');

Route::resource('places', PlaceController::class)->names('places');

Route::resource('quotations', QuotationController::class)->names('quotations');

Route::post('quotations/{quotation}/status', [QuotationController::class, 'status'])->middleware('auth')->name('quotations.status');

Route::get('profiles', [UserController::class, 'curriculum'])->middleware('auth')->name('profiles.curriculum');
Route::post('profiles/saves', [UserController::class, 'savecurriculum'])->middleware('auth')->name('saves.curriculum');
Route::get('profiles/{profile}/editcv', [UserController::class, 'editcv'])->middleware('auth')->name('editcv.curriculum');
Route::put('profiles/{profile}', [UserController::class, 'updatecv'])->middleware('auth')->name('updatecv.curriculum');
Route::get('profiles/{profile}/download', [UserController::class, 'download'])->middleware('auth')->name('download.cv');
