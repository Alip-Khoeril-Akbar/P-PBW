# Praktikum 3 - Instalasi, Konfigurasi, dan Halaman Pertama Kita

## Identitas
- **Nama**: Alip Khoeril Akbar  
- **NPM**: 4523210009  
- **Mata Kuliah**: Praktikum Pemrograman Berbasis Web  

---

## Deskripsi
### Tujuan
Praktikum 3 ini mahasiswa diharapkan mampu mengerjakan dan memahami langkah-langkah praktikum berikut.  
Langkah-langkah yang dikerjakn dan dipelajari antara lain:
1. Menginstal proyek Laravel 12 baru menggunakan Composer.
2. Menjalankan server development lokal menggunakan php artisan serve.
3. Memahami struktur folder esensial untuk memulai.
4. Mendefinisikan rute (Route) sederhana di routes/web.php.
5. Membuat dan memodifikasi file tampilan (View) menggunakan Blade.
6. Memahami alur kerja fundamental Laravel: Request -> Route -> View -> Response.

### Alat yang Digunakan
- Server Lokal (Laragon atau XAMPP sudah terinstal dan berjalan).
- Composer (terinstal secara global).
- Terminal / Command Line (CMD, PowerShell, atau terminal bawaan Laragon).
- Code Editor (VS Code sangat disarankan).
- Web Browser (Google Chrome, Firefox, dll.).

---

## Langkah-langkah Praktikum dan Screenshot
### Bagian 2 Langkah-Langkah Praktikum
#### Langkah 1: Instalasi Proyek Laravel "LaraPress"
composer create-project laravel/laravel LaraPress
<img width="1920" height="1080" alt="Screenshot 2025-10-03 093206" src="https://github.com/user-attachments/assets/d1d8246a-7b08-4a3d-9791-21878795f0dc" />

#### Langkah 2: Menjalankan Aplikasi untuk Pertama Kali
1. **Masuk ke Folder Proyek**  
    cd LaraPress
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 094405" src="https://github.com/user-attachments/assets/ba7ba0c6-d66b-4c3d-9bda-7271b06ccf26" />

2. **Jalankan Server Artisan**  
    php artisan serve
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 094441" src="https://github.com/user-attachments/assets/a2501fd3-2c8f-4f8e-b585-49c6ee1e0abf" />

3. **Lihat Hasilnya**  
    http://127.0.0.1:8000
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 094900" src="https://github.com/user-attachments/assets/c9a77365-6f0c-4359-afb1-a2dd3733e0a4" />

#### Langkah 3: Memahami Alur Kerja Pertama (Route -> View)
<img width="1920" height="1080" alt="Screenshot 2025-10-03 095050" src="https://github.com/user-attachments/assets/290bf797-ef4f-4edb-afd8-be7771f25306" />
<img width="1920" height="1080" alt="Screenshot 2025-10-03 095147" src="https://github.com/user-attachments/assets/1d24d81c-e2a5-4125-bfa3-7675f6e76db0" />

#### Langkah 4: Membuat Halaman Statis Baru ("Tentang Kami")
1. **Buat Rute Baru**  
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 095420" src="https://github.com/user-attachments/assets/3e643493-65ed-4ca3-8654-1b56c0dabd91" />


2. **Buat File View Baru**  
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 095516" src="https://github.com/user-attachments/assets/d9fcc208-3678-4a7b-8328-c4cee8d1d13e" />


3. **Uji Coba Halaman Baru**  
    http://127.0.0.1:8000/tentang-kami
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 095553" src="https://github.com/user-attachments/assets/21129912-e360-410d-99fd-381ffa8ca444" />

4. **Menambahkan Link Navigasi**  
<img width="1920" height="1080" alt="Screenshot 2025-10-03 095706" src="https://github.com/user-attachments/assets/df7932d8-c283-4c1f-859f-9801930bd5ec" />
<img width="1920" height="1080" alt="Screenshot 2025-10-03 095719" src="https://github.com/user-attachments/assets/31b36acf-9f42-4136-9135-bf56a5586762" />
<img width="1920" height="1080" alt="Screenshot 2025-10-03 095751" src="https://github.com/user-attachments/assets/6d715ff3-4976-4d63-9691-f1c0f6e7c245" />
<img width="1920" height="1080" alt="Screenshot 2025-10-03 095801" src="https://github.com/user-attachments/assets/fb49328e-4cf5-46da-b62a-df8d5eab5d86" />

### Bagian 3: Tugas Mandiri
1. **Buat Satu Halaman Statis baru "Kontak"**  
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 102538" src="https://github.com/user-attachments/assets/3f1dda7c-9207-4dff-b23c-59e62ea5ed99" />
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105355" src="https://github.com/user-attachments/assets/b33315ad-1f5b-44fb-be67-cb353ad5170a" />


2. **Halaman ini harus bisa diakses melalui URL**  
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 102538" src="https://github.com/user-attachments/assets/13a62dba-d2c1-44a0-b748-0d8a54583960" />
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105531" src="https://github.com/user-attachments/assets/87e5efba-2141-4eed-abd9-812b458686b1" />

3. **Isi halaman tersebut dengan informasi kontak fiktif (misal: email dan nomor telepon)"**  
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105355" src="https://github.com/user-attachments/assets/cd6ea62a-210c-4fe7-a0d6-88d8fa62b199" />

4. **tambahkan link navigasi ke dan dari halaman "Kontak" di halaman lainnya**  
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105355" src="https://github.com/user-attachments/assets/112435fb-9aca-4fee-bcf4-a02a703fa929" />
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105415" src="https://github.com/user-attachments/assets/af392dfa-8849-4687-a2ee-f5a3b176343f" />
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105424" src="https://github.com/user-attachments/assets/3312949a-8e7b-4d1d-a7d1-2cc816c95d65" />
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105517" src="https://github.com/user-attachments/assets/a10b1181-39cd-4fc1-b362-ed4f511d1381" />
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105523" src="https://github.com/user-attachments/assets/a36c5b36-1c11-496a-b796-a29c9287edfa" />
    <img width="1920" height="1080" alt="Screenshot 2025-10-03 105531" src="https://github.com/user-attachments/assets/b9b0358c-5782-44cd-81c4-db02375fa5b8" />

