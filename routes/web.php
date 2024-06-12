<?php

use App\Http\Controllers\CaregiversControllers;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProvidersControllers;
use App\Http\Controllers\SignupController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\CaregiverMiddleware;
use App\Http\Middleware\ProviderMiddleware;
use App\Http\Middleware\RevalidateBackHistory;
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





Route::middleware([AuthMiddleware::class])->group(function () {
    //caregivers routes
    Route::middleware([CaregiverMiddleware::class])->group(function () {
        Route::get('account/caregiver/dasboard', [CaregiversControllers::class, 'index'])->name('caregiver.index');
        Route::get('account/caregiver/myjobs', [CaregiversControllers::class, 'myJobs'])->name('caregiver.myjobs');
        Route::get('account/caregiver/savedjobs', [CaregiversControllers::class, 'savedJobs'])->name('caregiver.savedjobs');
    });
    //providers routes
    Route::middleware([ProviderMiddleware::class])->group(function () {
        Route::get("/account/provider/dashboard", [ProvidersControllers::class, 'index'])->name('provider.index');
        Route::get('/account/provider/alljobs', [ProvidersControllers::class, 'alljobs'])->name('provider.alljobs');
        Route::get('/account/provider/profile', [ProvidersControllers::class, 'profile'])->name('provider.profile');
    });
    //logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
