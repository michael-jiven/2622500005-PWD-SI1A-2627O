# pertemuan-11
Analisis Kebutuhan Data dan Dasar MySQL Satu Tabel

=== Fitur dan Pengembangan ===
[Artefak_P10] : menyiapkan artefak dari pertemuan 10 ke pertemuan 11 sebagai baseline

[Artefak_P11] : menyiapkan direktori dan lingkungan pengembangan pertemuan-11

[Basis_Data_P11] : memeriksa kesiapan basis data dan tabel kontak P11.

[koneksi.php] : membuat berkas konek PHP-MySQL P11

[Parameter_Koneksi] : menentukan infofrmasi yang diperlukan untuk mengakses MySQL

[Pelaporan_Kesalahan_MySQLi] : menyediakan mekanisme pelaoran kesalahan ketika mengalami kegagalan

[mysqli_connect] : membuat koneksi antara PHP dan MySQL berdasarkan parameter yang telah ditentukan

[uji_koneksi.php-berhasil] : menguji keberhasilan koneksi PHP dan MySQL

[uji_koneksi.php-gagal] : menguji kegagalan koneksi PHP dan MySQL

[koneksi.php] : memastikan nama berkas dan penulisan perintah require_once("koneksi.php"); koneksi.php telah tersedia pada direktori yang sama dengan index.php.

[requice_once] : memuat berkas koneksi pada halaman utama aplikasi 

[index.php-koneksi.php] : memastikan index.php memuat koneksi.php

[koneksi.php-db_pwd_2622500005] : menguji integrasi PHP dengan MySQL 

=== LANGKAH PENGUJIAN DAN HASIL AKTUAL ===
[Parameter_Koneksi] 
[LANGKAH PENGUJIAN : 
<?php 

$host = "localhost";
$user = "root";
$password = "";
$database "db_pwd_2622500005"]
[HASIL AKTUAL : -]

[Pelaporan_Kegagalan_MySQLi]
[LANGKAH PENGUJIAN : 
mysqli_report(MYSQLI_REPORT_OFF);]
[HASIL AKTUAL : -]

[mysqli_connect] 
[LANGKAH PENGUJIAN : 
$koneksi = mysqli_connect($host, $user, $password, $database);

if(!$koneksi) {
. die("Koneksi ke basis data gagal.");
}]
[HASIL AKTUAL : -]

[uji_koneksi.php-berhasil]
[LANGKAH PENGUJIAN :
<?php 
require_once("koneksi.php");

echo "Koneksi ke basis data berhasil."; ]
[HASIL AKTUAL : Berhasil. "Koneksi ke basis data berhasil"]

[uji_koneksi.php-gagal]
[LANGKAH PENGUJIAN : 
database = "db_tidak_tersedia";]
[HASIL AKTUAL : Gagal. Warning: mysqli_connect(): (HY000/1049): Unknown database 'db_tidak_tersedia' in C:\laragon\www\2622500005-PWD-SI1A-2627O\pertemuan-11\koneksi.php on line 10
"Koneksi ke basis data gagal."]

[koneksi.php] 
[LANGKAH PENGUJIAN : 
require_once("koneksi.php");]
[HASIL AKTUAL : Ada. require_once("koneksi.php"); telah satu direktori dengan index.php]

[requice_once] 
[LANGKAH PENGUJIAN : 
require_once("fungsi.php");

require_once("koneksi.php");]
[HASIL AKTUAL : Berhasil. 
require_once("fungsi.php");

require_once("koneksi.php"); pada index.php]

[koneksi.php-db_pwd_2622500005]
[LANGKAH PENGUJIAN : 
http://localhost/2622500005-PWD-SI1A-2627O/pertemuan-11]
[HASIL AKTUAL : Berhasil. Halaman index.php bisa dipuka tanpa muncul pesan "Koneksi ke basis data gagal."]

=== Riwayat Pengembangan (COMMIT) ===
[Artefak_P10] : Menyalin artefak pertemuan-10 ke pertemuan-11 sebagai baseline
[Artefak_P11] : Menyiapkan direktori dan lnigkungan pengembangan pertemuan-11
[Basis_Data_P11] : Memeriksa kesiapan basis data dan tabel kontak P11
[koneksi.php] : Membuat berkas koneksi PHP-MySQL P11
[Parameter_Koneksi] : Menentukan parameter koneksi basis data P11
[Pelaporan_Kegagalan_MySQLI] : Mengatur pelaporan kesalahan MySQLi P11
[mysqli_connect] : Mengimplementasikan koneksi PHP-MySQL menggunakan MySQLi
[uji_koneksi.php-berhasil] : Menguji koneksi dari PHP ke MySQL dengan file sementara bernama uji_koneksi.php
[uji_koneksi.php-gagal] : Menguji penanganan kegagaln koneksi PHP_MySQL
[koneksi.php] : Menyiapkan pemuatan berkas koneksi pada P11
[requice_once] : Mengintegrasikan berkas koneksi pada index P11
[index.php-koneksi.php] : Memeriksa alur ketersediaan koneksi pada index P11
[koneksi.php-db_pwd_2622500005] : Menguji integrasi koneksi PHP-MySQL pada index P11