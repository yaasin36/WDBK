
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

1. **Clone repository**:
   ```bash
   git clone https://github.com/yaasin36/WDBK.git
   cd WDBK
   ```

2. **Install dependensi menggunakan Composer**:
   ```bash
   composer install
   ```

3. **Copy file `.env.example` menjadi `.env`**:
   ```bash
   cp .env.example .env
   ```

4. **Konfigurasikan file `.env`**:
   - Atur database Anda:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nama_database
     DB_USERNAME=username_database
     DB_PASSWORD=password_database
     ```

5. **Generate aplikasi key**:
   ```bash
   php artisan key:generate
   ```

6. **Jalankan migrasi database**:
   ```bash
   php artisan migrate
   ```

7. *(Opsional)* **Install dependensi frontend**:
   ```bash
   npm install && npm run dev
   ```

8. **Jalankan aplikasi Laravel**:
   ```bash
   php artisan serve
   ```

Aplikasi sekarang dapat diakses melalui `http://localhost:8000`.

## Struktur Direktori Penting
- **`app/`**: Folder utama untuk logika aplikasi.
- **`routes/`**: Konfigurasi rute aplikasi.
- **`resources/views/`**: Template tampilan aplikasi.
- **`public/`**: Folder untuk aset publik seperti CSS, JS, dan favicon.

## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini:
1. Fork repository.
2. Buat branch fitur baru:
   ```bash
   git checkout -b fitur-anda
   ```
3. Commit perubahan Anda:
   ```bash
   git commit -m 'Menambahkan fitur ...'
   ```
4. Push ke branch:
   ```bash
   git push origin fitur-anda
   ```
5. Ajukan pull request.

## Lisensi
Proyek ini dilindungi oleh lisensi [MIT](LICENSE).
