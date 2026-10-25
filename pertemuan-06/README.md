P6 - PHP Dasar dan Pemrograman Sisi Peladen
Deksripsi : 
Dokumentasi pengembangan halaman web pada P6, meliputi PHP Dasar dan Sisi Peladen 

=== Fitur dan Pengembangan ===
[<?php]: Menulis dan Testing Komentar, Echo, Tag Dasar PHP pada HTML index.php 
[echo&print]: Menulis dan Testing komentar dengan Tag Echo & Print pada HTML index.php
[<p>&echo<p>] : Menulis, Testing, Membandingkan keluaran tag HTML dan tag HTML di dalam tag PHP 
[<?php$variabel] : Menulis dan Menambahkan deklarasi variabel PHP
[const] : Menulis dan Menambahkan deklarasi konstanta PHP
[echo_const&variabel] : Menampilkan data dengan variabel dan konstanta PHP
[arimatika_variabel] : Menulis, Menambahkan deklarasi variabel Lalu Menerapkan Aritmetika pada variabel PHP di HTML
[if_elseif_else] : Menulis dan Penerapan Konsep if, elseif, else pada variabel PHP di HTML



=== LANGKAH PENGUJIAN DAN HASIL AKTUAL ===
[LaragonStartAll] : 
[LANGKAH PENGUJIAN : 1. Mengubah index.html menjadi index.php ; 2. Membuka Laragon, Klik Apache httpd-2-4.54-win64-VS16, Klik Start All]
[HASIL AKTUAL : Laragon berhasil terhubung dengan index.php]

[localhost] : 
[LANGKAH PENGUJIAN : Melakukan testing domain localhost setelah Laragon StartAll]
[HASIL AKTUAL : http://localhost/2622500005-PWD-SI1A-2627O/pertemuan-06/index.php BERHASIL]

[<?php] : 
[LANGKAH PENGUJIAN : <?php echo "PHP berhasil dijalankan.";?>]
[HASIL AKTUAL : Berhasil. "PHP berhasil dijalankan ]

[echo&print]:
[LANGKAH PENGUJIAN (echo) : <?php echo "Keluaran menggunakan echo";?>]
[HASIL AKTUAL : Berhasil. "Keluaran menggunakan echo"]
[LANGKAH PENGUJIAN (print) : <?php print "Keluaran menggunakan echo";?>]
[HASIL AKTUAL : Berhasil. "Keluaran menggunakan echo"]

[<p>&echo<p>] : 
[LANGKAH PENGUJIAN <p> : <p>Konten HTML Statis</p>]
[HASIL AKTUAL : Berhasil. "Konten HTML Statis"]
[LANGKAH PENGUJIAN echo<p> : <?php echo "<p>Konten yang dihasilkan oleh PHP</p>>]
[HASIL AKTUAL : Berhasil. "Konten yang dihasilkan oleh PHP"]

[<?php$variabel] :
[LANGKAH PENGUJIAN :  <?php $nim = "2622500005";
    $namaMahasiswa = "Michael Jiven Singh";
    $programStudi = "SI";
    $tahunAkademik = "2026/2027";
    $semester = "1";
    $ipk = "3.00";
    $statusAktif = true;
    $catatanTambahan = null;
    ?> ] 
[HASIL AKTUAL : Berhasil. Variabel tidak muncul pada kode View Page Source menandakan bukan string atau tag lain]

[const] : 
[LANGKAH PENGUJIAN :     
const NAMA_MATA_KULIAH = "Pemrograman Web Dasar";
const PROFIL_GITHUB = "michael-jiven";]
[HASIL AKTUAL : Berhasil. Variabel Const tidak muncul pada kode View Page Source menandakan bukan string atau tag lain]

[echoconst&variabel]
[LANGKAH PENGUJIAN : <p>Halo, saya <strong><?php echo $namaMahasiswa; ?></strong>. Saya sedang mempelajari <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik; ?>.</p> 
<a target="_blank" href="https://github.com/<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.]
[HASIL AKTUAL : Berhasil. Pada index.php berhasil memunculkan data/nilai dari variabel namaMahasiswa & tahunAkademik, dari konstanta NAMA_MATA_KULIAH]

[arimetika_variabel]
[LANGKAH PENGUJIAN :     
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
<p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p>]
[HASIL AKTUAL : Berhasil. "Sisa semester hingga batas : 7"]

[pemeriksaan_rentang_semester]
[LANGKAH PENGUJIAN :
$semesterValid = $semester >= 1 && $semester <= $batasSemester;
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";
<p>Pemeriksaan rentang semester: <?php echo $statusSemester?>]
[HASIL AKTUAL : Berhasil . "Pemeriksaan rentang semester: Sesuai rentang"]

[if_elseif_else] 
[LANGKAH PENGUJIAN : 
    if ($semester < 3) {
      $keteranganSemester = "Semester awal";
    } elseif ($semester <= 6) {
      $keteranganSemester = "Semester menengah";
    } else {
      $keteranganSemester = "Semester Akhir";
    }
<p>Semester : <?php echo $semester . " (" . $keteranganSemester . ")"; ?></p>]
[HASIL AKTUAL : Berhasil. "Semester : 1 (Semester Awal)" ]

=== Riwayat Pengembangan (COMMIT) ===
[Peralihan Ke Laragon PHP]: Menyalin index.html, img, style.css ke Pertemuan 6
[Testing localhost]: Melakukan testing domain localhost setelah Laragon StartAll
[Pengujian Komentar, Echo, Tag Dasar PHP] : Menulis dan Testing Komentar, Echo, Tag Dasar PHP pada HTML index.php 
[Mempelajari komentar dan keluaran dengan echo dan print di PHP] : Menulis dan Testing komentar dengan Tag Echo & Print pada HTML index.php
[Membandingkan keluaran tag HTML dan tag HTML di dalam tag PHP] : Menulis, Testing, Membandingkan keluaran tag HTML dan tag HTML di dalam tag PHP
[Menambahkan deklarasi variabel PHP] : Menulis dan Menambahkan deklarasi variabel PHP
[Menambahkan Konstanta PHP] : Menulis dan Menambahkan deklarasi konstanta PHP
[Menampilkan data mahasiswa dengna variabel dan konstanta] : Menampilkan data dengan variabel dan konstanta PHP pada HTML
[Menambahkan operator aritmetika PHP] : Menulis, Menambahkan deklarasi variabel Lalu Menerapkan Aritmetika pada variabel PHP di HTML
[Menerapkan pemeriksaan rentang semester] : menerapkan pemeriksaan rentang semester dengan variabel PHP di HTML
[Menerapkan percabangan if elseif else] : Menulis dan Penerapan Konsep if, elseif, else pada variabel PHP di HTML