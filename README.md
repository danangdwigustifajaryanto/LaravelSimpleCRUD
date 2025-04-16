# 💬 Aplikasi Laravel CRUD - Pesan Sederhana

Ini adalah aplikasi web sederhana berbasis **Laravel** yang memiliki fitur lengkap **CRUD (Create, Read, Update, Delete)** untuk mengelola pesan pendek.
Project ini cocok untuk latihan Laravel, tugas sekolah, kuliah, atau referensi belajar konsep dasar **MVC dan Eloquent ORM**.

![Laravel](https://img.shields.io/badge/Laravel-11.44.2-red?logo=laravel&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-2.8.8-blue?logo=composer&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2.12-777bb3?logo=php&logoColor=white)
![Status](https://img.shields.io/badge/Project-Dalam%20Proses-yellow)
![License](https://img.shields.io/badge/License-MIT-lightgrey)

![image](https://github.com/user-attachments/assets/499305f0-5306-4da7-97b4-9503b71cc6fe)

---

## 🗂️ Isi Repository

Repository ini berisi beberapa versi project Laravel beserta tutorial dan dokumentasi pendukung untuk keperluan pembelajaran.

1. ✅ Project Laravel versi **9**
2. ✅ Project Laravel versi **11**
3. 📘 Tutorial CRUD step by step
4. 🛠️ Tutorial upgrade dari Laravel **9 ke Laravel 11**
5. 🎨 Versi desain menggunakan **Bootstrap**

---

## ✨ Fitur

- ✅ Menambahkan pesan (Create)
- ✅ Menampilkan semua pesan (Read)
- ✅ Mengedit isi pesan (Update)
- ✅ Menghapus pesan (Delete)
- 🧠 Menggunakan Blade Template (Dengan CSS dan JS Sederhana)
- 🔧 Struktur rapi mengikuti pola MVC Laravel
- 🌓 Dark Mode

---

## 🛠 Project Setup (Laravel 11)

Berikut adalah requirement dan tools yang digunakan untuk menjalankan project ini:

- ⚙️ **Laravel Framework**: `11.44.2`
- 🧰 **Composer**: `2.8.8 (2024-08-22)`
- 🐘 **PHP (Apache)**: `8.2.12`
- 📦 **XAMPP**: `Control Panel V3.3.0`

---

## 🚀 Cara Menjalankan Project

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/laravel-crud-pesan.git
   cd microteaching
   ```

2. **Install Composer Dependencies**
   ```bash
   composer install
   ```

3. **Buat Database di MySQL**
   ```sql
   CREATE DATABASE laravel_crud;
   ```

4. **Edit File .env**
   ```env
   DB_DATABASE=laravel_crud
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Refresh Project Config & Cache**
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan route:clear
   php artisan view:clear
   php artisan optimize
   ```

6. **Migrasi Database**
   ```bash
   php artisan migrate
   ```

7. **Jalankan Server Laravel**
   ```bash
   php artisan serve
   ```

---

## 🧠 Cara Kerja Aplikasi

Berikut adalah daftar routing utama yang digunakan pada aplikasi ini:

| **URL**                  | **Method** | **Fungsi**                          |
|--------------------------|------------|--------------------------------------|
| `/messages`              | GET        | Menampilkan semua pesan              |
| `/messages`              | POST       | Menyimpan pesan baru                 |
| `/messages/{id}/edit`    | GET        | Menampilkan form edit pesan          |
| `/messages/{id}`         | PUT        | Menyimpan hasil edit pesan           |
| `/messages/{id}`         | DELETE     | Menghapus pesan dari database        |

---

## 📚 Tujuan Pembelajaran

1. Memahami struktur MVC di Laravel
2. Menggunakan Routing, Controller, dan View
3. Mempraktikkan fitur CRUD secara menyeluruh
4. Validasi input & interaksi dengan database Eloquent ORM

---

## 📄 Lisensi

Project ini open-source dan bebas digunakan untuk pembelajaran.

---

## 🙌 Terima Kasih!

Kalau kamu merasa project ini bermanfaat, silakan di-fork, clone, atau kasih bintang ⭐.
Selamat ngoding! 😄

