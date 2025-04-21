# WebGIS Fasilitas Kesehatan Banyumas

Sistem Informasi Geografis berbasis web untuk menampilkan data fasilitas layanan kesehatan (puskesmas) di Kabupaten Banyumas menggunakan Leaflet.js, PHP, PostgreSQL/PostGIS.

## Fitur
- Menampilkan peta interaktif kecamatan Banyumas
- Marker lokasi puskesmas lengkap dengan popup nama
- CRUD data layanan kesehatan (nama, alamat, koordinat)
- Dukungan basis data PostgreSQL

## Teknologi
- Leaflet.js
- PHP (pg_query)
- PostgreSQL + PostGIS
- HTML/CSS/JavaScript

## Cara Menjalankan
1. Import database dari `health_services.sql` (buat kalau belum ada)
2. Jalankan server lokal (`xampp`/`laragon`)
3. Akses di browser: `http://localhost/project-sig/index.php`
