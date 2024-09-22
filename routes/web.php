<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home.index');
});

Route::get('/peminjaman', function () {
    return view('peminjaman.index');
});