<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;


// Home
Route::get('/', [HomeController::class, '__invoke'])->name('home');

// About Company Routes
Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

// Legal Routes
Route::view('/terms', 'terms')->name('legal.terms');

// Dashboard & Profile
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

// Profile
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';