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


Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::view('dashboard', 'dashboard')->name('dashboard');
    // Profile
    Route::view('account', 'profile')->name('profile');
});



require __DIR__.'/auth.php';