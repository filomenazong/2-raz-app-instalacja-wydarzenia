<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentedroomController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Users routes
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    

    // Rentedrooms routes - tylko jeden raz
    Route::resource('rentedrooms', RentedroomController::class)->only(['index']);
});