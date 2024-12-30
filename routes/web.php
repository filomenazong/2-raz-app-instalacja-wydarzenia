<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentedroomController;

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
});
/*
Route::name('users.')->prefix('users')->group(function () {
    Route::get('', [UserController::class, 'index'])
        ->name('index');
});
*/

Route::resource('rentedrooms', RentedroomController::class)->only([
    'index',
]);
