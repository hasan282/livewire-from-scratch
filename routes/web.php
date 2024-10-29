<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('learn', 'learn.main-lists')
    ->middleware(['auth', 'verified'])
    ->name('learn');

Route::get('learn/{section}', [Controllers\LearnController::class, 'index']);

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
