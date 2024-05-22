<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');
Route::get('/providers', [LandingPageController::class, 'providers'])->name('landingPage.providers');
Route::get('/caregivers', [LandingPageController::class, 'caregivers'])->name('landingPage.caregivers');
