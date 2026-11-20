<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::get('/version', function () {
    return response()->json([
        'version' => app()->version(),
        'php' => phpversion(),
    ]);
});

require __DIR__.'/settings.php';
