<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function() {
    Route::get('/login', AuthController::class)->name('login');
});

Route::middleware([])->group(function() {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('books', App\Http\Controllers\BookController::class);           
});