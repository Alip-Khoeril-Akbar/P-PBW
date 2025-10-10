<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - LaraPress</title>
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

    /* Konten */
    main {
      flex: 1;
      max-width: 800px;
      margin: 4rem auto;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.08);
      padding: 3rem 2rem;
      text-align: center;
    }

    main h1 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: #111827;
    }

    main h1 span {
      color: #3b82f6;
    }

    main p {
      font-size: 1rem;
      color: #4b5563;
      line-height: 1.7;
      margin-bottom: 2rem;
    }

    .buttons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    a.btn {
      text-decoration: none;
      color: #fff;
      padding: 0.6rem 1.4rem;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.2s ease;
    }

    .btn-home { background: #3b82f6; }
    .btn-contact { background: #f59e0b; }

    .btn-home:hover { background: #2563eb; transform: translateY(-2px); }
    .btn-contact:hover { background: #d97706; transform: translateY(-2px); }

    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #6b7280;
      border-top: 1px solid #e5e7eb;
      background-color: #fff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav>
  <div class="nav-left">
    <img src="https://laravel.com/img/logomark.min.svg" alt="Logo">
    <div class="nav-links">
      <a href="/welcome">Home</a>
      <a href="/about" class="active">Tentang</a>
      <a href="/contact">Kontak</a>
    </div>
  </div>
  <div class="nav-right">Alip ▼</div>
</nav>

<main>
  <h1>Tentang <span>LaraPress</span></h1>
  <p>
    LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari
    dasar-dasar framework <strong>Laravel 12</strong>.  
    Tujuan utama proyek ini adalah membantu mahasiswa memahami konsep MVC, routing, dan templating dalam Laravel dengan cara yang mudah dan menyenangkan.
  </p>
</main>

<footer>
  &copy; <?php echo date('Y'); ?> LaraPress — Dibuat dengan ❤️ di Laragon
</footer>

</body>
</html>
