
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }

        nav a.active {
            background-color: #007bff;
            border-radius: 5px;
        }

        .content {
            padding: 30px;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/jadwal" class="@yield('menu_jadwal')">Jadwal</a>
        <a href="/nilai" class="@yield('menu_nilai')">Nilai</a>
        <a href="/absensi" class="@yield('menu_absensi')">Absensi</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
