<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
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

## Isi Repository
Repository ini berisi beberapa versi project Laravel beserta tutorial dan dokumentasi pendukung untuk keperluan pembelajaran.

1. ✅ Project Laravel versi **9**
2. ✅ Project Laravel versi **11**
3. 📘 Tutorial CRUD step by step
4. 🛠️ Tutorial upgrade dari Laravel **9 ke Laravel 11**
5. 🎨 Versi desain menggunakan **Bootstrap**

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
3. **Buat Database di MYSQL/etc.**
   ```
   CREATE DATABASE laravel_crud;
   ```
4. **Buat Database dan edit .env**
    ```
   DB_DATABASE=laravel_crud
   DB_USERNAME=root
   DB_PASSWORD=
   ```
5. **Refresh Project**
   ```
   php artisan config:clear
   php artisan cache:clear
   php artisan route:clear
   php artisan view:clear
   php artisan optimize
   ```
6. **Migrasi Database**
   ```
   php artisan migrate
   ```
7. **Jalankan Server**
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
>>>>>>> daa0d03e74a3806e1ad4ff15e21fa7c7357dbfac
