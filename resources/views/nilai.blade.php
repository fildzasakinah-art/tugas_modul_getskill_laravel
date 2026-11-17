
@extends('master')

@section('title', 'Halaman Nilai')

@section('menu_nilai', 'active')

@section('content')
    <h1>Data Nilai Mahasiswa</h1>
    <p>Berikut adalah daftar nilai akademik mahasiswa.</p>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Kelas</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>23001</td>
                <td>Andi Saputra</td>
                <td>TI-1A</td>
                <td>85</td>
                <td>80</td>
                <td>90</td>
                <td>85</td>
            </tr>
            <tr>
                <td>2</td>
                <td>23002</td>
                <td>Budi Santoso</td>
                <td>TI-1A</td>
                <td>80</td>
                <td>75</td>
                <td>85</td>
                <td>80</td>
            </tr>
            <tr>
                <td>3</td>
                <td>23003</td>
                <td>Citra Lestari</td>
                <td>TI-1B</td>
                <td>90</td>
                <td>85</td>
                <td>95</td>
                <td>90</td>
            </tr>
            <tr>
                <td>4</td>
                <td>23004</td>
                <td>Dina Amelia</td>
                <td>TI-1B</td>
                <td>75</td>
                <td>80</td>
                <td>85</td>
                <td>80</td>
            </tr>
        </tbody>
    </table>
@endsection
