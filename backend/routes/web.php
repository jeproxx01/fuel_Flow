<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
    return view('auth.register');
})->name('auth.register');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
