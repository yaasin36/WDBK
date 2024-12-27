# Project Name: **Sistem Temu Janji**

## Deskripsi Proyek
Sistem Temu Janji adalah aplikasi berbasis web yang dibuat menggunakan Laravel. Aplikasi ini dirancang untuk mempermudah pengelolaan temu janji, baik untuk pengguna maupun administrator. Dengan fitur login dokter, pengguna dapat dengan mudah mengakses jadwal, membuat janji temu, dan mengelola informasi lainnya.

## Fitur Utama
- Login dan otentikasi pengguna (dokter).
- Manajemen temu janji (jadwal, data pasien, dll.).
- Dashboard responsif untuk mengelola data.
- Sistem keamanan berbasis Laravel.

## Instalasi
Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

1. Clone repository:
   ```bash
   git clone https://github.com/yaasin36/WDBK.git
   cd WDBK
Install dependensi menggunakan Composer:

bash
Salin kode
composer install
Copy file .env.example menjadi .env:

bash
Salin kode
cp .env.example .env
Konfigurasikan file .env:

Atur database Anda:
plaintext
Salin kode
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username_database
DB_PASSWORD=password_database
Generate aplikasi key:

bash
Salin kode
php artisan key:generate
Jalankan migrasi database:

bash
Salin kode
php artisan migrate
(Opsional) Install dependensi frontend:

bash
Salin kode
npm install && npm run dev
Jalankan aplikasi Laravel:

bash
Salin kode
php artisan serve
