<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Perpustakaan</title>
</head>
<body>
    <h1>Daftar buku perpustakaan</h1>

    <ul>
        @foreach ($buku as $item)
            <li><strong>{{$item['judul']}}</strong> - Penulis: {{ $item
            ['pengarang']}}</li>
        @endforeach
    </ul>

</body>
</html>