<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function tampil()
    {
        $daftarBuku = [
            ['judul' => 'Belajar Pemrograman Laravel', 'pengarang' => 'Andi Pratama'],
            ['judul' => 'Algoritma dan Struktur Data', 'pengarang' => 'Budi Raharjo'],
            ['judul' => 'Pemrograman Web Dasar', 'pengarang' => 'Rina Marlina'],
            ['judul' => 'Basis Data Relasional', 'pengarang' => 'Joko Santoso'],
            ['judul' => 'Kecerdasan Buatan untuk Pemula', 'pengarang' => 'Siti Aminah'],
        ];

        return view('buku')->with('buku', $daftarBuku);
    }
}