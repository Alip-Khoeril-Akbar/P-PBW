## Praktikum 9: Kustomisasi dan Pengembangan Aplikasi Manajemen Buku dengan Laravel & Filament 3.x
## Identitas  
- **Nama**: Alip Khoeril Akbar  
- **NPM**: 4523210009  
- **Mata Kuliah**: Praktikum Pemrograman Berbasis Web - A

---

## Deskripsi  
Pada praktikum kali ini, mahasiswa disuruh untuk membangun aplikasi **Sistem Manajemen Buku** menggunakan framework Laravel dan Filament 3.x. 
Aplikasi ini mencakup fitur lengkap CRUD (Create, Read, Update, Delete) untuk mengelola data buku dan penulis, dilengkapi dengan fitur:
- Pencarian.
- Filter.
- Upload gambar.
- dan Sistem relasi database.
  
Fitur-fitur yang ditambahkan:
- Tambah Field Description pada Book.
- Implementasi Role-Based Access.
- Tambah Widget Dashboard.
- Tambah Kategori Buku.
  
Aplikasi ini dibangun dengan fokus pada pemahaman konsep dasar Laravel dan best practices dalam pengembangan web modern.  

---

## Teknologi yang Digunakan

| Teknologi | Versi | Keterangan |
|-----------|-------|------------|
| **PHP** | ^8.2 | Bahasa pemrograman server-side |
| **Laravel Framework** | ^12.0 | Framework PHP MVC |
| **Filament** | ^3.x | Admin Panel & CRUD Generator |
| **Composer** | Latest | Dependency manager untuk PHP |
| **NPM** | Latest | Package manager untuk JavaScript |
| **Vite** | Latest | Build tool untuk frontend assets |
| **MySQL/PostgreSQL** | Latest | Database relasional |

### Package Laravel yang Digunakan:
- **Filament PHP** - Admin panel untuk manajemen data (CRUD)
- **Laravel Tinker** - REPL untuk testing dan debugging
- **Laravel Pint** - Code style fixer
- **Laravel Sail** - Docker development environment
- **Faker PHP** - Generator data dummy untuk testing

## ⚙️ Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan sistem Anda memiliki:

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL atau PostgreSQL
- Web Server (Apache/Nginx) atau bisa menggunakan Laravel built-in server

Untuk Windows, disarankan menggunakan:
- **Laragon** (sudah include PHP, MySQL, Apache)
- **XAMPP**
- **Herd**

## Secreenshot Hasil Akhir 
Berikut merupakan beberapa Screenshot dari hasil praktikum Kustomisasi dan Pengembangan Aplikasi Manajemen Buku dengan Laravel & Filament 3.x.

### 1. Tambah Field Description pada Book
- Migration: tambah kolom description (text).
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 132501" src="https://github.com/user-attachments/assets/63021cb7-b98f-446e-aaa2-fa2c15be8b67" />

- Model: tambah ke $fillable.
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 132540" src="https://github.com/user-attachments/assets/a32e7717-1720-481b-920f-2bb8439a85f4" />

- Resource: tambah Textarea component di form.
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 132651" src="https://github.com/user-attachments/assets/55b3b202-1bf4-4c26-a30b-3db76f35e238" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 132719" src="https://github.com/user-attachments/assets/450bbe5f-f87e-43d7-8032-cdaf62e52b2b" />

- Factory: generate description dengan fake()->paragraph().
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 132601" src="https://github.com/user-attachments/assets/aeed7c17-3e15-4a37-bfb2-2a1cfced9dab" />

- Tampilan akhir.
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 135835" src="https://github.com/user-attachments/assets/855123a9-f352-47a6-8240-df036b63aecf" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 135843" src="https://github.com/user-attachments/assets/2a2b1ae3-eced-4acc-812d-3be24bb68779" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 135854" src="https://github.com/user-attachments/assets/ee895996-4365-4e48-acda-9dc623950947" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 135900" src="https://github.com/user-attachments/assets/7efb4b3b-93e8-4183-a7d2-7449a9f4572c" />

### 2. Implementasi Role-Based Access
- Tambah kolom role pada tabel users.
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 134820" src="https://github.com/user-attachments/assets/77dcfc15-9d46-4e0f-954d-69e669646048" />

- Buat seeder untuk user dengan role berbeda (admin, staff, viewer)
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 134902" src="https://github.com/user-attachments/assets/f9c2a7ec-195d-4f44-924e-b9b092ccc56f" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 135002" src="https://github.com/user-attachments/assets/80d395ca-fff2-4f79-a843-6bddf7d69c37" />

- Update BookPolicy:
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 135122" src="https://github.com/user-attachments/assets/0d44e0c1-73b1-49e0-ac76-677c033b97dc" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-15 135202" src="https://github.com/user-attachments/assets/46d24144-1f76-458e-bf28-6c7b7318bd73" />

  - Admin: semua akses
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 135803" src="https://github.com/user-attachments/assets/d5febde4-294f-4a81-bb84-711580d191a7" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140021" src="https://github.com/user-attachments/assets/fea2566f-a3dc-4353-a839-d2846d6f93bb" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 135835" src="https://github.com/user-attachments/assets/909de739-4f7c-4af6-bd7c-3679f948bc62" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 135843" src="https://github.com/user-attachments/assets/25f8036c-4844-4400-8046-b21a24a2981e" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 135854" src="https://github.com/user-attachments/assets/fd5e6dc0-1e4b-48d2-a750-0e69c03783e7" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 135900" src="https://github.com/user-attachments/assets/ceeca456-50fb-49df-b28d-8892793e4614" />

  - Staff: bisa create, edit, view (tidak bisa delete)
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140050" src="https://github.com/user-attachments/assets/9dcf4fde-a310-4d38-bd3f-a11bd3f1bb22" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140100" src="https://github.com/user-attachments/assets/e317d172-f264-404d-add9-cfbbfd9dd6f7" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140135" src="https://github.com/user-attachments/assets/eb105011-64c4-4a44-9639-ac7c40b3cc75" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140147" src="https://github.com/user-attachments/assets/db72d2b1-e2e2-4881-81cd-d4ff3c10355a" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140204" src="https://github.com/user-attachments/assets/a78b418b-71e7-4f2e-b148-716a231ba1a8" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140216" src="https://github.com/user-attachments/assets/5bc5c313-407e-4841-9f95-67ad9b1d6c39" />

  - Viewer: hanya bisa view
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140401" src="https://github.com/user-attachments/assets/3d57a593-b676-41da-9ce3-99d907f41be4" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140302" src="https://github.com/user-attachments/assets/772b5620-6b96-4b10-85f5-dbc625050d01" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140314" src="https://github.com/user-attachments/assets/3a2ae003-39b1-48bd-a447-097a8fd1ba39" />
    <img width="1920" height="1080" alt="Screenshot 2025-11-15 140337" src="https://github.com/user-attachments/assets/d62ef5b0-2702-4797-b795-6d732e8f2a2e" />

### 3. Tambah Widget Dashboard
- Buat widget untuk menampilkan:
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 143553" src="https://github.com/user-attachments/assets/d1eeac6b-89c4-4113-b16c-53c46c8702d7" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 143602" src="https://github.com/user-attachments/assets/9a6a69e3-76a8-458b-9186-010499287bf3" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 143609" src="https://github.com/user-attachments/assets/482c07c7-453a-4b7c-81bd-76eaa302de4e" />

  - Total books
    <img width="1920" height="1080" alt="Screenshot 2025-11-16 143711" src="https://github.com/user-attachments/assets/0912d544-1f05-4f85-b0d7-67fbdd7d662a" />

  - Total authors
    <img width="1920" height="1080" alt="Screenshot 2025-11-16 143711" src="https://github.com/user-attachments/assets/d72e15d5-09e6-4992-baf7-0e9976299cef" />

  - Books available vs borrowed (chart/stats)
    <img width="1920" height="1080" alt="Screenshot 2025-11-16 143711" src="https://github.com/user-attachments/assets/3574d00c-8364-4415-b378-85bed754c7b4" />


### 4. Tampilan Halaman hasil pencarian
- Buat model Category
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 144310" src="https://github.com/user-attachments/assets/82f8b381-0b14-48ab-bb9a-4b616a190402" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 161329" src="https://github.com/user-attachments/assets/083aefa6-0a46-46c8-90ef-58f3ed87e28b" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 161425" src="https://github.com/user-attachments/assets/55c53207-7ca4-4bc6-8edc-6edd214feef8" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 161446" src="https://github.com/user-attachments/assets/88e81e89-e1d9-48ef-aefb-99334b4ee852" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 161437" src="https://github.com/user-attachments/assets/f2e12ee4-969f-42a1-8ff9-f4de64b18c17" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 161304" src="https://github.com/user-attachments/assets/aced33bb-7f0a-43eb-b51c-48b12e0d59af" />

- Relasi many-to-many dengan Book
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170007" src="https://github.com/user-attachments/assets/f3526674-7301-4b59-933a-9f3f2a0147b2" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170036" src="https://github.com/user-attachments/assets/044ef65f-02d9-4db4-8d9a-1072b51863bf" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170052" src="https://github.com/user-attachments/assets/13eb4a94-3baf-4029-bc68-ad4af16eefea" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170107" src="https://github.com/user-attachments/assets/e2503f7d-d4ea-4c6d-8947-2aa7b1f47e18" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170114" src="https://github.com/user-attachments/assets/ba0fded7-f789-4347-baf5-629bafa3957c" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170149" src="https://github.com/user-attachments/assets/11c991ae-0ef6-4cf0-9366-98c37e713b86" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170204" src="https://github.com/user-attachments/assets/f51a8b52-3197-4159-94c9-32cc3b2a23e3" />

- Tambah di form book (multiple select)
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170355" src="https://github.com/user-attachments/assets/03b4a144-8aeb-4a8a-98df-9bee67eac463" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170411" src="https://github.com/user-attachments/assets/bafe0f0b-b5f2-4513-9fa5-2cb65d16083b" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170441" src="https://github.com/user-attachments/assets/b7828b93-f101-419d-957b-eaa485f9fd5c" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170512" src="https://github.com/user-attachments/assets/880007da-79ab-42fd-bd60-73f863dc609a" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170546" src="https://github.com/user-attachments/assets/9ef50165-2bb3-4beb-8394-a5c2babecb5f" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170557" src="https://github.com/user-attachments/assets/41018c93-991c-4712-a2a3-2337b908a37f" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170608" src="https://github.com/user-attachments/assets/ecac3f45-5c59-4b69-8978-a5570645f35d" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 170627" src="https://github.com/user-attachments/assets/b6605d41-7dc0-4894-aa2c-aebe03f8d21c" />
  <img width="1920" height="1080" alt="Screenshot 2025-11-16 171108" src="https://github.com/user-attachments/assets/b40a02f0-32ee-4750-bff8-39c410615e47" />

