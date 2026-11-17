
@extends('master')

@section('title', 'Halaman Jadwal')

@section('menu_jadwal', 'active')

@section('content')
    <h1>Jadwal Perkuliahan</h1>
    <p>Berikut adalah daftar jadwal perkuliahan mahasiswa.</p>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Mata Kuliah</th>
                <th>Jam</th>
                <th>Ruangan</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Senin</td>
                <td>Pemrograman Web</td>
                <td>08.00 - 10.00</td>
                <td>Lab 1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Selasa</td>
                <td>Basis Data</td>
                <td>10.00 - 12.00</td>
                <td>Lab 2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Rabu</td>
                <td>Algoritma dan Pemrograman</td>
                <td>08.00 - 10.00</td>
                <td>Ruang 3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Kamis</td>
                <td>Sistem Informasi</td>
                <td>13.00 - 15.00</td>
                <td>Ruang 2</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Jumat</td>
                <td>Pemrograman Laravel</td>
                <td>08.00 - 10.00</td>
                <td>Lab 1</td>
            </tr>
        </tbody>
    </table>
@endsection
