<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entrevistador\WorkController;

Route::redirect('', 'entrevistador/works');

Route::resource('works',WorkController::class)->names('works');
