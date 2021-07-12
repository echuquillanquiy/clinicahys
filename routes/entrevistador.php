<?php

use App\Http\Livewire\Entrevistador\WorksApplicants;
use App\Http\Livewire\Entrevistador\WorksRequirement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entrevistador\WorkController;

Route::redirect('', 'entrevistador/works');

Route::resource('works',WorkController::class)->names('works');

Route::get('works/{work}/requirements', [WorkController::class, 'requirements'])->name('works.requirements');

Route::get('works/{work}/applicants', WorksApplicants::class)->middleware('can:Actualizar trabajos')->name('works.applicants');

Route::post('works/{work}/status', [WorkController::class, 'status'])->name('works.status');
