# ZENKU
Zenku adalah website sosial media pembelajaran yang dibuat untuk mempermudah siswa dalam mengulas materi yang telah diajarkan oleh guru sebelumnya. Aplikasi ini memiliki fitur seperti sosial media pada umumnya : like dan comment. Selain itu penulis memberikan fitur tambahan seperti forum diskusi antar guru dengan siswa. Dibuat Menggunakan Bootstrap, Laravel dan MySQL.

## Stack
<div align="left">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" height="40" alt="Bootstrap" />
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" height="40" alt="Laravel" />
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" height="40" alt="MySQL" />
</div>

## ERD
<img src="document/ERD ZENKU.jpg" width="540">

## Flowchart
<img src="document/Flowchart Zenku.jpg" width="540">
<ul>
    <li>Guru upload video di youtube atau webstreaming lainnya.</li>
    <li>Guru buat materi dan menunggu materi nya harus di approval oleh penguji dulu.</li>
    <li>Penguji berhak melakukan reject apabila materi tidak sesuai dengan pedoman.</li>
    <li>Penguji melakukan approve materi.</li>
    <li>User dapat melihat materi yang telah di upload oleh guru.</li>
    <li>User dapat memberikan komentar.</li>
    <li>User dapat memberikan like.</li>
    <li>User dapat secara pribadi melakukan chat dengan guru.</li>
    <li>Admin memiliki full access seperti manage kategori, materi, likes, role access, komentar, aktifitas, menu, feedback dan akun.</li>
</ul>

## Role 
<ol>
    <li>Guru</li>
    <li>Penguji</li>
    <li>User</li>
    <li>Admin</li>
</ol>

## Account
### Admin
- Email: admin@zenku.com
- Password: zenku123

### Guru
- Email: guru@zenku.com
- Password: zenku123

### Penguji
- Email: penguji@zenku.com
- Password: zenku123

### User
- Email: andarutr@zenku.com
- Password: zenku123

## Config
Catatan sebelum menggunakan Zenku buat database dengan nama **zenku** dan ketik perintah berikut pada terminal kamu :
 - `composer install`
 - `cp .env.example .env`
 - `php artisan key:generate`
 - `php artisan migrate`
 - `php artisan db:seed`

 ## Plugin / Libraries
- Axios
- Sweetalert2
- Toastr.js
- Fontawesome

 ## Feature
- Create Materi Pelajaran
- Approval Materi Pelajaran
- Management Likes
- Management Comment
- Forum
- Personal Chat
- Management Feedback
- Pantau Activity
- Management Menu
- Management Role Access

 ## Screenshot
<img src="document/screenshot/zenku_1.png" width="540">
<img src="document/screenshot/zenku_2.png" width="540">
<img src="document/screenshot/zenku_3.png" width="540">
<img src="document/screenshot/zenku_4.png" width="540">
<img src="document/screenshot/zenku_5.png" width="540">
<img src="document/screenshot/zenku_6.png" width="540">
<img src="document/screenshot/zenku_7.png" width="540">
<img src="document/screenshot/zenku_8.png" width="540">
<img src="document/screenshot/zenku_9.png" width="540">