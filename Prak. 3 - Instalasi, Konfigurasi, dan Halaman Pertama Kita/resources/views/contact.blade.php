<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak - LaraPress</title>
    <!-- Panggil CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Jika Anda ingin menghubungi kami, silakan gunakan informasi di bawah ini:</p>
        <ul class="info">
            <li>📧 Email: laraPress@example.com</li>
            <li>📞 Telepon: +62 812-3456-7890</li>
        </ul>

        <div class="nav">
            <a href="{{ url('/') }}">🏠 Halaman Utama</a>
            <a href="{{ url('/tentang-kami') }}">ℹ️ Tentang Kami</a>
        </div>
    </div>
</body>
</html>
