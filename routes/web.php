<?php

use App\Http\Controllers\CaregiversControllers;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProvidersControllers;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.index');
Route::get('/providers', [LandingPageController::class, 'providers'])->name('landingPage.providers');
Route::get('/caregivers', [LandingPageController::class, 'caregivers'])->name('landingPage.caregivers');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [SignupController::class, 'index'])->name('signup.index');
Route::get('/register/caregiver', [SignupController::class, 'caregiver'])->name('signup.caregiver');
Route::post('register/caregiver', [SignupController::class, 'storeCaregiver'])->name('store.caregiver');
Route::get('/register/provider', [SignupController::class, 'provider'])->name('signup.provider');
Route::post('/register/provider', [SignupController::class, 'storeProvider'])->name('store.provider');
Route::post('/register/provider/info', [SignupController::class, 'storeProviderHomeInfo'])->name('store.provider.homeInfo');
Route::get("/provider/index", [ProvidersControllers::class, 'index'])->name('provider.index');
Route::get('/caregiver/index', [CaregiversControllers::class, 'index'])->name('caregiver.index');
