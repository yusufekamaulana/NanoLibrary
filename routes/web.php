<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageBookController;
use App\Http\Controllers\ManageMahasiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;

Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);
Route::get('register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', function () {
        return view('mhs.index');
    })->name('home');

Route::prefix('mhs')->group(function () {

    Route::get('aboutus', function () {
        return view('mhs.aboutus');
    })->name('mhs.aboutus');

    Route::get('/biodata', [MahasiswaController::class, 'showProfile'])->middleware('auth');

    Route::get('detailbuku', function () {
        return view('mhs.detailbuku');
    })->name('mhs.detailbuku');

    Route::get('layananbuku', function () {
        return view('mhs.layananbuku');
    })->name('mhs.layananbuku');

    Route::get('riwayatpeminjaman', function () {
        return view('mhs.riwayatpeminjaman');
    })->name('mhs.riwayatpeminjaman')->middleware('auth'); // Middleware untuk memastikan pengguna login

    Route::get('riwayatpengembalian', function () {
        return view('mhs.riwayatpengembalian');
    })->name('mhs.riwayatpengembalian')->middleware('auth'); // Middleware untuk memastikan pengguna login
});

Route::get('/adm-home', function () {
    return view('admin.index');
});

Route::get('/adm-biodata', function () {
    return view('admin.biodata');
});

Route::get('/adm-buku', function () {
    return view('admin.data_buku');
});

Route::get('/adm-kunjungan', function () {
    return view('admin.data_kunjungan');
});

Route::get('/adm-mahasiswa', function () {
    return view('admin.data_mahasiswa');
});

Route::get('/adm-peminjaman', function () {
    return view('admin.layanan_peminjaman');
});

Route::get('/adm-pengembalian', function () {
    return view('admin.layanan_pengembalian');
});

Route::get('/adm-denda', function () {
    return view('admin.layanan_denda');
});

Route::resource('adm-buku', ManageBookController::class);
Route::resource('adm-mahasiswa', ManageMahasiswaController::class);

