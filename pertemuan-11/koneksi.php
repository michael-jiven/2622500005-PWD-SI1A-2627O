<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "db_tidak_tersedia";

mysqli_report(MYSQLI_REPORT_OFF);

$koneksi = mysqli_connect($host, $user, $password, $database);

if(!$koneksi) {
    die("Koneksi ke basis data gagal.");
}