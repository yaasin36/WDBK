<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\PasienController;

Route::prefix('/admin')->middleware('auth_admin')->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Login
    Route::get('/login', [AdminController::class, 'getLogin'])->withoutMiddleware('auth_admin')->name('admin.login');
    Route::post('/login', [AdminController::class, 'postLogin'])->withoutMiddleware('auth_admin');

    // Obat
    Route::prefix('/obat')->name('admin.obat.')->group(function () {
        Route::get('/', [ObatController::class, 'index'])->name('index'); // Menampilkan daftar obat
        Route::get('/create', [ObatController::class, 'create'])->name('create'); // Menampilkan form create
        Route::post('/create', [ObatController::class, 'store'])->name('store'); // Menyimpan data obat
        Route::get('/{id}/edit', [ObatController::class, 'edit'])->where('id', '[0-9]+')->name('edit'); 
        Route::put('/{id}/edit', [ObatController::class, 'update'])->where('id', '[0-9]+')->name('update');
        Route::delete('/{id}/delete', [ObatController::class, 'destroy'])->where('id', '[0-9]+')->name('destroy'); // Menghapus data obat
    });

    // Dokter
    Route::prefix('/dokter')->name('admin.dokter.')->group(function () {
        Route::get('/', [DokterController::class, 'index'])->name('index'); // Menampilkan daftar dokter
        Route::get('/create', [DokterController::class, 'create'])->name('create'); // Menampilkan form create
        Route::post('/create', [DokterController::class, 'store'])->name('store'); // Menyimpan data dokter
        Route::get('/{id}/edit', [DokterController::class, 'edit'])->where('id', '[0-9]+')->name('edit'); // Menampilkan form edit
        Route::put('/{id}/edit', [DokterController::class, 'update'])->where('id', '[0-9]+')->name('update'); // Mengupdate data dokter
        Route::delete('/{id}/delete', [DokterController::class, 'destroy'])->where('id', '[0-9]+')->name('destroy'); // Menghapus data dokter
    });

    // Poliklinik
    Route::prefix('/poliklinik')->name('admin.poliklinik.')->group(function () {
        Route::get('/', [PoliklinikController::class, 'index'])->name('index'); // Menampilkan daftar poliklinik
        Route::get('/create', [PoliklinikController::class, 'create'])->name('create'); // Menampilkan form create
        Route::post('/create', [PoliklinikController::class, 'store'])->name('store'); // Menyimpan data poliklinik
        Route::get('/{id}/edit', [PoliklinikController::class, 'edit'])->where('id', '[0-9]+')->name('edit'); // Menampilkan form edit
        Route::put('/{id}/edit', [PoliklinikController::class, 'update'])->where('id', '[0-9]+')->name('update'); // Mengupdate data poliklinik
        Route::delete('/{id}/delete', [PoliklinikController::class, 'destroy'])->where('id', '[0-9]+')->name('destroy'); // Menghapus data poliklinik
    });

    // Pasien
    Route::prefix('/pasien')->name('admin.pasien.')->group(function () {
        Route::get('/', [PasienController::class, 'index'])->name('index'); // Menampilkan daftar pasien
        Route::get('/create', [PasienController::class, 'create'])->name('create'); // Menampilkan form create
        Route::post('/create', [PasienController::class, 'store'])->name('store'); // Menyimpan data pasien
        Route::get('/{id}/edit', [PasienController::class, 'edit'])->where('id', '[0-9]+')->name('edit'); // Menampilkan form edit
        Route::put('/{id}/edit', [PasienController::class, 'update'])->where('id', '[0-9]+')->name('update'); // Mengupdate data pasien
        Route::delete('/{id}/delete', [PasienController::class, 'destroy'])->where('id', '[0-9]+')->name('destroy'); // Menghapus data pasien
    });
});
