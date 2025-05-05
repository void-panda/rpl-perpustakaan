<?php

use App\Http\Controllers\AnggotaNonSiswaController;
use App\Http\Controllers\AnggotaSiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function() {
    Route::get('/login', AuthController::class)->name('login');
});

Route::middleware([])->group(function() {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('buku', BukuController::class);           
    Route::resource('petugas', PetugasController::class);
    Route::resource('anggota-siswa', AnggotaSiswaController::class);
    Route::resource('anggota-nonsiswa', AnggotaNonSiswaController::class);
});