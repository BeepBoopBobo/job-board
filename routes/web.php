<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostController;

Route::resource('jobs', JobPostController::class)
    ->only(['index', 'show']);

Route::get('', fn() => to_route('jobs.index'));