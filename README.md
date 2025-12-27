# ZENKU
<p align="center">
<img src="./public/img/zenku.png" width="150" />
</p>

## Deskripsi
Zenku adalah website sosial media pembelajaran yang dibuat untuk mempermudah siswa dalam mengulas materi yang telah diajarkan oleh guru sebelumnya. Aplikasi ini memiliki fitur seperti sosial media pada umumnya : like dan comment. Selain itu penulis memberikan fitur tambahan seperti forum diskusi antar guru dengan siswa.

## Stack
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" height="40" alt="Bootstrap" />
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" height="40" alt="Laravel" />
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" height="40" alt="MySQL" />

## Role 
- Admin [1]
- Guru [2]
- Siswa [3]
- Penguji [4]

## Informasi Akun
1. email: admin@zenku.com | pass: zenku123
2. email: guru@zenku.com | pass: zenku123
3. email: penguji@zenku.com | pass: zenku123
3. email: andarutr@gmail.com | pass: zenku123

## Flow
### Admin
Admin dapat mengakses fitur berikut :
- Dashboard
- Kategori : CRUD pada kategori materi
- Materi : hanya dapat melihat dan menghapus 
- Like : hanya dapat melihat
- Role : CRUD role akses
- Komentar : dapat melihat dan menghapus (bila diperlukan)
- Activity : Melihat aktifitas akun dan clear all data (bila diperlukan)
- Menu Management : CRUD menu yang dapat diakses oleh role
- Feedback : dapat melihat dan menghapus
- Account : CRUD pada tabel user
- Chat : chatting ke semua akun

### Guru
Guru dapat mengakses fitur berikut :
- Dashboard
- Materi : CRUD pada tabel materi
- Like : melihat like berdasarkan materi yang ia buat
- Komentar : melihat komentar berdasarkan materi yang ia buat
- Forum : CRUD pada tabel forum
- Chat : chatting ke semua akun

### Penguji
Penguji dapat mengakses fitur berikut :
- Dashboard
- Materi : melakukan approval pada materi
- Chat : chatting ke semua akun

### Siswa
Siswa dapat mengakses fitur berikut :
- Home
- Materi : melihat semua materi atau materi berdasarkan kategori
- Like : melakukan like dan menghapus like
- Komentar : melakukan komentar dan menghapus komentar
- Feedback : memberikan feedback
- Forum : membuat forum dan membalas thread
- Chat : chatting ke semua akun

## Note
Catatan sebelum menggunakan Zenku buat database dengan nama **zenku** dan ketik perintah berikut pada terminal kamu :
 - `composer install`
 - `cp .env.example .env`
 - `php artisan key:generate`
 - `php artisan migrate`
 - `php artisan db:seed`
