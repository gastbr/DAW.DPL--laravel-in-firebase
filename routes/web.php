<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [FirebaseAuthController::class, 'login'])->name('login');

Route::get('register', [FirebaseAuthController::class, 'register']);

Route::post('register', [FirebaseAuthController::class, 'register'])->name('register');
