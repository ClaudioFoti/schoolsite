<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Landlord routes
Route::name('landlord.')->domain( config('app.landlord_domain'))->group( function() {
    Route::get('/', \App\Http\Controllers\Landlord\WelcomeController::class )->name('welcome');
});



// Tenant routes
Route::middleware('is_tenant')->group(function () {
    Route::get('/', \App\Http\Controllers\WelcomeController::class )->name('welcome');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::resource('blogs', \App\Http\Controllers\BlogController::class);
    Route::resource('infopages', \App\Http\Controllers\InfoPageController::class);

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});



require __DIR__ . '/auth.php';
