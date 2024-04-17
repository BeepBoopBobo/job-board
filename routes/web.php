<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostController;

Route::resource('jobs', JobPostController::class)
    ->only(['index', 'show']);

Route::get('', fn() => to_route('jobs.index'));

Route::get('login', fn() => to_route('auth.create'))->name('login');

Route::resource('auth', AuthController::class)->only(['create', 'store']);

Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])
    ->name('auth.destroy');

Route::middleware('auth')->group(function () {
    Route::resource('jobs.application', JobApplicationController::class)->only(['create', 'store']);
});