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

    Route::view('/peminjaman-siswa', 'peminjaman-siswa')->name('peminjaman-siswa');
    Route::view('/pengembalian-siswa', 'pengembalian-siswa')->name('pengembalian-siswa');
    Route::view('/peminjaman-nonsiswa', 'peminjaman-nonsiswa')->name('peminjaman-nonsiswa');
    Route::view('/pengembalian-nonsiswa', 'pengembalian-nonsiswa')->name('pengembalian-nonsiswa');

    Route::prefix('laporan')->name('laporan.')->group(function() {
        Route::view('/', 'laporan.index')->name('index');
        Route::view('/anggota', 'laporan.anggota')->name('anggota');
        Route::view('/buku', 'laporan.buku')->name('buku');
        Route::view('/peminjaman', 'laporan.peminjaman')->name('peminjaman');
        Route::view('/pengembalian', 'laporan.pengembalian')->name('pengembalian');
    });
});