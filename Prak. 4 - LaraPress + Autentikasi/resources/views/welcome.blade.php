<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>
    <style>
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #111827;
        }

        h1 {
            font-size: 2rem;
            color: #111827;
            margin-bottom: 10px;
            font-weight: 600;
        }

        p {
            font-size: 1rem;
            color: #4b5563;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px 24px;
            border-radius: 8px;
            transition: all 0.2s ease;
            font-weight: 500;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        a:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .btn-login { background-color: #3b82f6; }   /* biru */
        .btn-register { background-color: #10b981; } /* hijau */
        .btn-contact { background-color: #f59e0b; }  /* oranye */
        .btn-about { background-color: #8b5cf6; }    /* ungu */

        .btn-login:hover { background-color: #2563eb; }
        .btn-register:hover { background-color: #059669; }
        .btn-contact:hover { background-color: #d97706; }
        .btn-about:hover { background-color: #7c3aed; }

        footer {
            position: absolute;
            bottom: 10px;
            font-size: 0.9em;
            color: #6b7280;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 2rem 3rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Selamat Datang di Blog <span style="color:#3b82f6;">LaraPress</span></h1>
        <p>Ini adalah halaman utama dari aplikasi blog kita.</p>

        <div class="buttons">
            <a href="/login" class="btn-login">Login</a>
            <a href="/register" class="btn-register">Daftar</a>
            <a href="/contact" class="btn-contact">Kontak</a>
            <a href="/about" class="btn-about">Tentang</a>
        </div>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> LaraPress — Dibuat dengan ❤ di XAMPP
    </footer>
</body>
</html>
