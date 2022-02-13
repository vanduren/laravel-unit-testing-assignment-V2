<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('contact-us', function () {
        return view('contact');
    })->name('contact');
    Route::get('about-us', function () {
        return view('about');
    })->name('about');
});

require __DIR__.'/auth.php';
