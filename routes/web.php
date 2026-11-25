<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route Beranda (halaman utama)
Route::get('/', [HomeController::class, 'index']);

// Route Login
Route::get('/login', [HomeController::class, 'login']);

// Route Profil (memanggil data dari model Profil)
Route::get('/profil', [HomeController::class, 'profil']);

// Route Mahasiswa (memanggil data $students dari model Student)
Route::get('/mahasiswa', [HomeController::class, 'mahasiswa']);

// Route Kontak
Route::get('/kontak', [HomeController::class, 'kontak']);

// Route About (jika masih menggunakan view langsung)
Route::get('/about', function () {
    return view('about');
});