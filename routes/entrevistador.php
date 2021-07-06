<?php

use App\Http\Livewire\EntrevistadorWorks;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'entrevistador/works');

Route::get('works', EntrevistadorWorks::class)->middleware('can:Leer trabajos')->name('works.index');
