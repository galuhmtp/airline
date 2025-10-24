<?php

use App\Http\Controllers\PenerbanganController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminKotaController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\AdminPesananController;

// Halaman utama (home)
Route::get('/', function () {
    return view('welcome');
});

// Daftar pemesanan user - GUNAKAN CONTROLLER
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');
// Form pemesanan tiket - GUNAKAN CONTROLLER
Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');

// Detail penerbangan - GUNAKAN CONTROLLER
Route::get('/penerbangan/{id}', [PenerbanganController::class, 'show'])->name('penerbangan.show');

// Dashboard user (setelah login)
Route::get('/dashboard', [PenerbanganController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk pencarian penerbangan (AJAX) - TAMBAHKAN INI
Route::post('/penerbangan/search', [PenerbanganController::class, 'search'])->name('penerbangan.search');

// Dalam group middleware auth, tambahkan:
Route::get('/pemesanan/{id}/tiket', [PemesananController::class, 'tiket'])->name('pemesanan.tiket');
Route::get('/pemesanan/{id}/cetak', [PemesananController::class, 'cetakTiket'])->name('pemesanan.cetak');

// Semua halaman di bawah ini hanya bisa diakses setelah login

// Semua halaman di bawah ini hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {

    // Halaman profil (bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ---------------------------
    // Halaman User (Frontend)
    // ---------------------------

    // Daftar penerbangan
    Route::get('/penerbangan', function () {
        return view('penerbangan.index');
    })->name('penerbangan.index');

    // Detail penerbangan - PASTIKAN INI MENGGUNAKAN CONTROLLER
    Route::get('/penerbangan/{id}', [PenerbanganController::class, 'show'])->name('penerbangan.show');

    // Form pemesanan tiket
    Route::get('/pemesanan/create', [PemesananController::class, 'create'])->name('pemesanan.create');
    Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store');

    // Daftar pemesanan user
    Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');

    // Route untuk pencarian penerbangan (AJAX)
    Route::post('/penerbangan/search', [PenerbanganController::class, 'search'])->name('penerbangan.search');
});

// Gabungkan semua route admin
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Halaman statis
    Route::get('/pesanan', function () {
        return view('admin.pesanan');
    });

    // Rute Users - GUNAKAN CONTROLLER
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::post('/users/delete', [UserController::class, 'destroy'])->name('admin.users.delete'); // TAMBAHKAN INI

    // Rute Penerbangan
    Route::get('/penerbangan', [PenerbanganController::class, 'index'])->name('admin.penerbangan.index');
    Route::get('/penerbangan/create', [PenerbanganController::class, 'create'])->name('admin.penerbangan.create');
    Route::post('/penerbangan/store', [PenerbanganController::class, 'store'])->name('admin.penerbangan.store');
    Route::get('/penerbangan/{id}/edit', [PenerbanganController::class, 'edit'])->name('admin.penerbangan.edit');
    Route::put('/penerbangan/{id}/update', [PenerbanganController::class, 'update'])->name('admin.penerbangan.update');
    Route::post('/penerbangan/delete', [PenerbanganController::class, 'delete'])->name('admin.penerbangan.delete');

    // Dalam group admin, tambahkan:
    Route::get('/pesanan', [AdminPesananController::class, 'index'])->name('admin.pesanan');
    Route::get('/pesanan/{id}', [AdminPesananController::class, 'show'])->name('admin.pesanan.show');
    Route::post('/pesanan/{id}/status', [AdminPesananController::class, 'updateStatus'])->name('admin.pesanan.updateStatus');
    Route::delete('/pesanan/{id}', [AdminPesananController::class, 'destroy'])->name('admin.pesanan.destroy');

    // Rute Kota
    Route::get('/kota', [AdminKotaController::class, 'index'])->name('admin.kota.index');
    Route::post('/kota/store', [AdminKotaController::class, 'store'])->name('admin.kota.store');
    Route::delete('/kota/{id}', [AdminKotaController::class, 'destroy'])->name('admin.kota.destroy');
});

require __DIR__ . '/auth.php';
