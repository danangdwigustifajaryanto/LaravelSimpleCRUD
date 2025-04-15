# 💬 Aplikasi Laravel CRUD - Pesan Sederhana

Ini adalah aplikasi web sederhana berbasis **Laravel** yang memiliki fitur lengkap **CRUD (Create, Read, Update, Delete)** untuk mengelola pesan pendek.
Project ini cocok untuk latihan Laravel, tugas sekolah, kuliah, atau referensi belajar konsep dasar **MVC dan Eloquent ORM**.

![image](https://github.com/user-attachments/assets/499305f0-5306-4da7-97b4-9503b71cc6fe)

---

## ✨ Fitur

- ✅ Menambahkan pesan (Create)
- ✅ Menampilkan semua pesan (Read)
- ✅ Mengedit isi pesan (Update)
- ✅ Menghapus pesan (Delete)
- 🧠 Menggunakan Blade Template (Dengan CSS dan JS Sederhana)
- 🔧 Struktur rapi mengikuti pola MVC Laravel
- 🌓Dark Mode

---

## 🗂️ Struktur Folder

| **Path / Folder**             | **Deskripsi**                                                 |
|------------------------------|---------------------------------------------------------------|
| `routes/web.php`             | Routing semua fitur (GET, POST, PUT, DELETE)                  |
| `app/Http/Controllers/`      | Menyimpan `MessageController` yang menangani logika CRUD      |
| `app/Models/Message.php`     | Model Eloquent yang mewakili tabel `messages` di database     |
| `resources/views/`           | Menyimpan file Blade: `messages.blade.php`, `edit.blade.php`  |
| `database/migrations/`       | File migration untuk membuat struktur tabel `messages`        |
| `.env`                       | Konfigurasi database (nama DB, user, password, host, dll)     |

---

## 🚀 Cara Menjalankan Project

1. **Clone Repository**
   ```
   git clone https://github.com/username/laravel-crud-pesan.git
   cd microteaching
   ```
2. **Install Composer**
   ```
   composer install
   ```
3. **Duplikat File .env dan Atur Database**
   ```
   cp .env.example .env
   ```
   **Lalu edit file .env**
    ```
   DB_DATABASE=laravel_crud
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. **Generate APP Key**
   ```
   php artisan key:generate
   ```
5. **Migrasi Database**
   ```
   php artisan migrate
   ```
5. **Jalankan Server**
   ```
   php artisan migrate
   ```

## 🧠 Cara Kerja Aplikasi

Berikut adalah daftar routing utama yang digunakan pada aplikasi ini:

| **URL**                  | **Method** | **Fungsi**                          |
|--------------------------|------------|--------------------------------------|
| `/messages`              | GET        | Menampilkan semua pesan              |
| `/messages`              | POST       | Menyimpan pesan baru                 |
| `/messages/{id}/edit`    | GET        | Menampilkan form edit pesan          |
| `/messages/{id}`         | PUT        | Menyimpan hasil edit pesan           |
| `/messages/{id}`         | DELETE     | Menghapus pesan dari database        |

## 📚 Tujuan Pembelajaran
1. Memahami struktur MVC di Laravel
2. Menggunakan Routing, Controller, dan View
3. Mempraktikkan fitur CRUD secara menyeluruh
4. Validasi input & interaksi dengan database Eloquent ORM

![Laravel](https://img.shields.io/badge/Laravel-9.52.20-red?logo=laravel&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-2.8.8-blue?logo=composer&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.0.30-777bb3?logo=php&logoColor=white)
![Status](https://img.shields.io/badge/Project-Selesai-brightgreen)
![License](https://img.shields.io/badge/License-MIT-lightgrey)

## 📄 Lisensi
Project ini open-source dan bebas digunakan untuk pembelajaran.

## 🙌 Terima kasih sudah mampir ke project Laravel CRUD saya!
Kalau kamu merasa project ini bermanfaat, silakan di-fork, clone, atau kasih bintang ⭐.
Selamat ngoding! 😄
