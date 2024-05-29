<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');
Route::get('/providers', [LandingPageController::class, 'providers'])->name('landingPage.providers');
Route::get('/caregivers', [LandingPageController::class, 'caregivers'])->name('landingPage.caregivers');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [SignupController::class, 'index'])->name('signup.index');
Route::get('/register/caregiver', [SignupController::class, 'caregiver'])->name('signup.caregiver');
Route::get('/register/provider', [SignupController::class, 'provider'])->name('signup.provider');
