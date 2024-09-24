<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/mhs-home', function () {
    return view('mahasiswa.home');
});

Route::get('/mhs-profil', function () {
    return view('mahasiswa.about');
});

Route::get('/mhs-peminjaman', function () {
    return view('mahasiswa.peminjaman');
});

Route::get('/mhs-detail', function () {
    return view('mahasiswa.detail');
});

Route::get('/mhs-ebook', function () {
    return view('mahasiswa.ebook');
});

Route::get('/mhs-detail_ebook', function () {
    return view('mahasiswa.detail_ebook');
});

Route::get('/mhs-riwayat_peminjaman', function () {
    return view('mahasiswa.riwayat_peminjaman');
});

Route::get('/mhs-riwayat_pengembalian', function () {
    return view('mahasiswa.riwayat_pengembalian');
});

Route::get('/mhs-biodata', function () {
    return view('mahasiswa.biodata');
});

Route::get('/register', function () {
    return view('users.register');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', function () {
    return view('users.login');
});



