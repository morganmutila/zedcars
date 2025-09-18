<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

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
    Route::view('account/listings', 'profile.listings')->name('profile.listings');
    Route::view('account/reviews', 'profile.reviews')->name('profile.reviews');
    Route::view('account/favorites', 'profile.favorites')->name('profile.favorites');
});

Route::middleware(['auth'])->group(function () {
    Route::get('account', [ProfileController::class, 'profile'])->name('profile');
    Route::view('account/settings', [ProfileController::class, 'accountSettings'])->name('profile.settings');
});



require __DIR__.'/auth.php';