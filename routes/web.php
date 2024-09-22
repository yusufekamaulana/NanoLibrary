<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/peminjaman', function () {
    return view('peminjaman.peminjaman');
});

Route::get('/e-book', function () {
    return view('peminjaman.ebook');
});

Route::get('/profile', function () {
    return view('profile.index');
});

Route::get('/detail-buku', function () {
    return view('detail.index');
});
