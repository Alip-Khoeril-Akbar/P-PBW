<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - LaraPress</title>
    <!-- Panggil CSS dari public/css/style.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Tentang LaraPress</h1>
        <p>
            LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk 
            mempelajari dasar-dasar framework Laravel 12.
        </p>
        <div class="nav">
            <a href="{{ url('/') }}">🏠 Halaman Utama</a>
            <a href="{{ url('/kontak') }}">📩 Hubungi Kami</a>
        </div>
    </div>
</body>
</html>
