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

=== Riwayat Pengembangan (COMMIT) ===
[Artefak_P10] : Menyalin artefak pertemuan-10 ke pertemuan-11 sebagai baseline
[Artefak_P11] : Menyiapkan direktori dan lnigkungan pengembangan pertemuan-11
[Basis_Data_P11] : Memeriksa kesiapan basis data dan tabel kontak P11
[koneksi.php] : Membuat berkas koneksi PHP-MySQL P11
[Parameter_Koneksi] : Menentukan parameter koneksi basis data P11
[Pelaporan_Kegagalan_MySQLI] : Mengatur pelaporan kesalahan MySQLi P11
[mysqli_connect] : Mengimplementasikan koneksi PHP-MySQL menggunakan MySQLi