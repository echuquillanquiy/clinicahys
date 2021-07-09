<?php

use App\Http\Livewire\Entrevistador\WorksRequirement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entrevistador\WorkController;

Route::redirect('', 'entrevistador/works');

Route::resource('works',WorkController::class)->names('works');

Route::get('works/{work}/requirements', [WorkController::class, 'requirements'])->name('works.requirements');
