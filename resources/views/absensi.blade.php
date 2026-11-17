
@extends('master')

@section('title', 'Halaman Absensi')

@section('menu_absensi', 'active')

@section('content')
    <h1>Data Absensi Mahasiswa</h1>
    <p>Berikut adalah daftar kehadiran mahasiswa.</p>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Kelas</th>
                <th>Hadir</th>
                <th>Izin</th>
                <th>Sakit</th>
                <th>Alfa</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>23001</td>
                <td>Andi Saputra</td>
                <td>TI-1A</td>
                <td>18</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>23002</td>
                <td>Budi Santoso</td>
                <td>TI-1A</td>
                <td>17</td>
                <td>1</td>
                <td>0</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>23003</td>
                <td>Citra Lestari</td>
                <td>TI-1B</td>
                <td>19</td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>23004</td>
                <td>Dina Amelia</td>
                <td>TI-1B</td>
                <td>16</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
@endsection
