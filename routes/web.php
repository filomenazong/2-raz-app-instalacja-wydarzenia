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
});

//Renderroom
Route::resource('rentedrooms', RentedroomController::class)->only([
    'index',
]);
Route::get('rentedrooms/search', [RentedroomController::class, 'search'])->name('rentedrooms.search');
Route::get('/rentedrooms', [RentedroomController::class, 'index'])->name('rentedrooms.index');

//User
/*
Route::resource('users', UserController::class)->only([
    'index',
]);

Route::get('users/search',[UserController::class, 'search'] )->name('users.search');
Route::get('/users',[UserController::class, 'index']) ->name('users.index');

Route::name('users.')->prefix('users')->group(function (){
        Route::get('', [UserController::class, 'index'])
            ->name('index');
});
*/

Route::resource('users', UserController::class)->only(['index']);
    Route::get('users/search', [UserController::class, 'search'])->name('users.search');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');