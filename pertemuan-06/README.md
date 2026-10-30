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
[operator_ternary] : Menulis dan Penerapan Operasi Ternary pada variabel PHP di HTML
[switch] : Menulis dan Penerapan Switch Case pada variable PHP di HTML
[<?=...?>] : Menulis sintaks singkat PHP untuk menampilkan nilai suatu ekspresi dengan variabel PHP di HTML

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

[operator_ternary]
[LANGKAH PENGUJIAN :
$namaProdi = ($programStudi == "SI") ? "Sistem Informasi" : (($programStudi == "TI") ? "Teknik Informaatika" : (($programStudi == "BD") ? "Bisnis Digital" : (($programStudi == "PTI") ? "Pendidikan Teknologi Informatika" : "Lainnya")));  
<p>Program Studi : <?php echo $namaProdi . " (" . $programStudi .")"; ?>
<p>Status Mahasiswa : <?php echo $statusAktif ? "Aktif" : "Tidak Aktif"; ?></p>]
[HASIL AKTUAL : Berhasil. "Program Studi : Sistem Informasi (SI) ; Status Mahsiswa : Aktif]

[switch] 
[LANGKAH PENGUJIAN :     
switch ($programStudi) {
    case "SI" : 
        $fokusProgramStudi = "Sistem Informasi dan proses bisnis";
        break;
    case "TI" : 
        $fokusProgramStudi = "Komputasi dan pengembangan perangkat lunak";
        break;
        default;
        $fokusProgramStudi = "Belum ditentukan";
    }
<p>Fokus Program Studi : <?php echo $fokusProgramStudi ?></p>]
[HASIL AKTUAL : Berhasil. "Fokus Program Studi : Sistem Informasi dan proses bisnis"]

[loop]
[LANGKAH PENGUJIAN : 
    <ol>
        <?php 
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>Target Belajar Ke-" . $i . ": " ;
            switch ($i) {
            case 1:
                echo "Memahami sintaks dasar PHP.";
                break;
            case 2:
                echo "Menggunakan variabel dan konstanta.";
                break;
            case 3:
                echo "Menerapkan operator dan percabangan.";
                break;
            case 4:
                echo "Menggunakan perulangan for dan while.";
                break;
            default:
                echo "Belum dipetakan.";
                break;
              }
            echo "<?li>";
            }
            ?>
    </ol>]
[HASIL AKTUAL : Berhasil. 
"
1. Target Belajar Ke-1: Memahami sintaks dasar PHP.
2. Target Belajar Ke-2: Menggunakan variabel dan konstanta.
3. Target Belajar Ke-3: Menerapkan operator dan percabangan
4. Target Belajar Ke-4: Menggunakan perulangan for dan white"
5. Target Belajar Ke-5: Belum Dipetakan.
"]

[number_format] 
[LANGKAH PENGUJIAN : 
<p>IPK : <?php echo number_format($ipk, 2, ',', '.'); ?></p>]
[HASIL AKTUAL : Berhasil. "IPK : 3,00" (Jika "IPK : 3", salah)]

[nilai_null] 
[LANGKAH PENGUJIAN : 
<p>Catatan Tambahan : <?php echo $catatanTambahan === null ? "Belum Ada" : $catatanTambahan;?></p>]
[HASIL AKTUAL : Berhasil. "Catatan Tambahan : Belum Ada" (Jika Catatan Tambahan : null / kosong / dsb, salah)]

[date]
[LANGKAH PENGUJIAN : 
<p>&copy; <?= date("Y") ?> <?php echo $namaMahasiswa; ?> [<?= echo $nim?>]</p>]
[HASIL AKTUAL : Berhasil. "©2026 Michael Jiven Singh [2622500005] 
NOTE : 
Kode	Arti	Contoh
Y	tahun 4 digit	2026
y	tahun 2 digit	26
m	bulan angka, dengan nol di depan	01 sampai 12
n	bulan angka, tanpa nol	1 sampai 12
M	bulan singkat (bahasa Inggris)	Oct
F	bulan lengkap (bahasa Inggris)	October
d	tanggal, dengan nol di depan	01 sampai 31
j	tanggal, tanpa nol	1 sampai 31
D	hari singkat (bahasa Inggris)	Sun
l	hari lengkap (bahasa Inggris)	Sunday
H / i / s	jam / menit / detik	14 / 05 / 09]

[<?=...?>] 
[LANGKAH PENGUJIAN : 
<a target="_blank" href="https://github.com/<?= PROFIL_GITHUB ?>">Profil GitHub saya</a>.]
[HASIL AKTUAL : Berhasil. Link "Profil Github Saya" menuju https://github.com/michael-jiven]

[action]
[LANGKAH PENGUJIAN : 
<form id="contactForm" action="index.html" method="get" novalidate> menjadi <form id="contactForm" action="index.php" method="get" novalidate>]
[HASIL AKTUAL : setiap data form yang diinput user bisa dikelola oleh PHP]

[while] 
[LANGKAH PENGUJIAN :             
<?php 
    $nomorSemester = 1;
    while ($nomorSemester <= 3) {
    echo "<li>Semester " . $nomorSemester . "</li>";
    $nomorSemester++;
}
?>]
[HASIL AKTUAL : Berhasil. 
Semester (Perulangan While):
1. Semester 1
2. Semester 2
3. Semester 3]


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
[Menerapkan operator ternary pada profil mahasiswa] : Menerapkan operator ternary pada variable PHP di HTML
[Menerapkan percabangan switch case] : Menulis dan Penerapan Switch Case pada variable PHP di HTML
[Menerapkan Perulangan for untuk target belajar] : Menulis kode loop untuk list target belajar
[Memformat tampilan IPK dengan number_format] : Mengprint variabel IPK menggunakan number_format
[Menampilkan catatan tambahan berdasarkan nilai null] : Mencoba menampilkan catatan yang muncul berdasarkan nilai null pada variabel PHP di HTML
[Menampilkan tahun dinamis pada footer] : Menulis date untuk tahun dinamis pada bagian footer
[Menerapkan sintaks keluaran singkat PHP] : Menulis sintaks singkat PHP untuk menampilkan nilai suatu ekspresi dengan variabel PHP di HTML 
[Menyesuaikan action formulir ke index.php] : Mengubah alamt action dari index.html menjadi index.php agar setiap data formulir yang diinput user bisa diproses PHP
[Menerapkan perulangan while untuk nomor semester] : Menerapkan loop while untuk nomor semester