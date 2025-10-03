<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang di LaraPress</title>
    <!-- Panggil CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Blog LaraPress</h1>
        <p>Ini adalah halaman utama dari aplikasi blog kita.</p>

        <div class="nav">
            <a href="{{ url('/tentang-kami') }}">ℹ️ Tentang Kami</a>
            <a href="{{ url('/kontak') }}">📩 Hubungi Kami</a>
        </div>
    </div>
</body>
</html>
