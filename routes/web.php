<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BukuController;
use App\Http\Controllers\KaryawanController;

// Route::get('/profil/{nama}/{kelas}/{cita}', function ($nama, $kelas, $cita) {
//     $nama = str_replace('_', ' ', $nama);
//     $kelas = str_replace('_', ' ', $kelas);
//     $cita = str_replace('_', ' ', $cita);

//     return "Halo, nama saya $nama, saya dari kelas $kelas 
//     dan cita cita saya adalah $cita";
// )};

// Route::prefix('perpustakaan')->group(function () {
//     Route::get('/buku', function() {
//         return"Ini adalah halaman daftar buku perpustakaan";
//     });
//     Route::get('/anggota', function(){
//         return"Ini adalah halaman daftar anggota perpustakaan";
//     });
//     Route::get('pinjaman', function () {
//         return"Ini adalah halaman data pinjaman buku perpustakaan";
//     });

// Route::get('/welcome-buku', [BukuController::class, 'index' ]);

// Route::get('/buku', [BukuController::class, 'tampil']);

Route::resource('karyawan', KaryawanController::class)->only([
    'index', 'store', 'destroy'
]);



