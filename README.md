# Website Sekolah MTS Alhidayah — Regal + CRUD + DataTables

Project Laravel 12 untuk website sekolah MTS Alhidayah Bojongnangka. Sudah disertai source CSS/JS Regal, CSS sekolah, logo, contoh foto, database migration, seeder, landing page, login, dashboard, CRUD dan DataTables Bootstrap 5.

## Fitur
- Landing page publik
- Login admin / logout
- Dashboard Regal dengan warna hijau-kuning sesuai logo sekolah
- CRUD Profil Sekolah (logo + foto)
- CRUD Guru (foto)
- CRUD Siswa (foto)
- CRUD Berita (foto)
- CRUD Ekstrakurikuler (foto)
- CRUD Galeri (foto)
- DataTables pada tabel admin
- Data contoh agar halaman langsung berisi saat selesai seeding

## Cara menjalankan
1. Pastikan PHP 8.2+, Composer, MySQL dan XAMPP/Laragon tersedia.
2. Buat database MySQL bernama `db_profil_sekolah`.
3. File `.env` di paket ini sudah disiapkan untuk `127.0.0.1:3306`, database `db_profil_sekolah`, username `root`, password kosong. Jika MySQL kamu memakai password, ubah `DB_PASSWORD`.
4. Jika vendor terhapus, jalankan `composer install`. Pada paket ini folder `vendor` sudah disertakan.
5. Jalankan: `php artisan migrate --seed` (JANGAN gunakan migrate:fresh pada database yang berisi data penting).
6. Jalankan: `php artisan serve`.
7. Buka `http://127.0.0.1:8000/`.
8. Login admin: `admin@alhidayah.sch.id` / `password`.

## Catatan CSS/JS
- `public/css/style.css` adalah stylesheet Regal.
- `public/css/school.css` adalah desain hijau-kuning dan komponen sekolah.
- JS Regal berada di `public/js/`.
- DataTables diaktifkan oleh `public/js/school.js` dan memakai adapter Bootstrap 5 dari CDN.
- MDI icon dan Bootstrap untuk landing page menggunakan CDN; koneksi internet diperlukan untuk komponen CDN tersebut.
