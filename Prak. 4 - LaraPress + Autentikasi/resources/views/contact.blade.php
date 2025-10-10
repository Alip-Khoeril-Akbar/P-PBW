<?php
// kontak.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami - LaraPress</title>
  <style>
    body {
      font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background-color: #f9fafb;
      color: #111827;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Navbar */
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #fff;
      padding: 0.75rem 2rem;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .nav-left img {
      width: 30px;
      height: 30px;
    }

    .nav-links {
      display: flex;
      gap: 1.5rem;
    }

    .nav-links a {
      font-weight: 500;
      color: #374151;
      text-decoration: none;
      padding-bottom: 0.25rem;
      border-bottom: 2px solid transparent;
      transition: all 0.2s ease;
    }

    .nav-links a:hover {
      color: #111827;
      border-color: #3b82f6;
    }

    .nav-links a.active {
      color: #111827;
      border-color: #3b82f6;
    }

    .nav-right {
      font-weight: 500;
      color: #374151;
    }

    /* Header */
    header {
      text-align: center;
      padding: 3rem 1rem 1rem;
    }

    header h1 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: #111827;
    }

    header p {
      font-size: 1rem;
      color: #4b5563;
      margin: 0;
    }

    /* Konten */
    .container {
      flex: 1;
      max-width: 1000px;
      margin: 2rem auto 3rem;
      padding: 0 2rem;
    }

    .contact-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .card {
      background-color: #fff;
      border-radius: 14px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
      transition: all 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.12);
    }

    .icon {
      font-size: 2.2rem;
      color: #3b82f6;
      margin-bottom: 1rem;
    }

    .card h3 {
      margin: 0.5rem 0;
      font-size: 1.25rem;
      color: #111827;
    }

    .card p {
      margin: 0;
      font-size: 1rem;
      color: #4b5563;
    }

    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #6b7280;
      border-top: 1px solid #e5e7eb;
      background-color: #fff;
    }
  </style>
  <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navbar -->
<nav>
  <div class="nav-left">
    <img src="https://laravel.com/img/logomark.min.svg" alt="Logo">
    <div class="nav-links">
      <a href="/welcome">Home</a>
      <a href="/about">Tentang</a>
      <a href="/contact" class="active">Kontak</a>
    </div>
  </div>
  <div class="nav-right">Alip ▼</div>
</nav>

<header>
  <h1>Kontak Kami</h1>
  <p>Butuh bantuan? Silakan hubungi kami melalui kontak berikut.</p>
</header>

<div class="container">
  <div class="contact-cards">
    <div class="card">
      <div class="icon"><i class="fas fa-envelope"></i></div>
      <h3>Email</h3>
      <p>LaraPress@contoh.com</p>
    </div>
    <div class="card">
      <div class="icon"><i class="fas fa-phone-alt"></i></div>
      <h3>Telepon</h3>
      <p>+62 812-3456-7890</p>
    </div>
  </div>
</div>

<footer>
  &copy; <?= date("Y") ?> LaraPress. Semua Hak Dilindungi.
</footer>

</body>
</html>
