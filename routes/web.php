<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentedroomController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});//widok na podstawie szablonu welcome
/*
Route::name('users.')->prefix('users')->group(function () {
    Route::get('', function () {
        dd('test');
    })->name('index');
});//localhost/users*/
//prefix wspolna cz w URL np./localhost
//name opis nazwy trasy
//Adres odwrotny users.index


//logowanie do app
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
Route::resource('users', UserController::class)->only([
    'index',
]);

Route::get('users/search',[UserController::class, 'search'] )->name('users.search');
Route::get('/users',[UserController::class, 'index']) ->name('users.index');