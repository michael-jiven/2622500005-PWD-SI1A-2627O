# pertemuan-07
Pemrosesan Formulir dengan PHP, Validasi Sisi Peladen, dan PRG

=== Fitur dan Pengembangan ===
[$_GET] = data berpasangan nama dan nilai yang ditempelkan di URL (setelah ?) untuk dikirim ke server. Parameter ditentukan oleh atribut name pada input dan PHP membacanya lewat $_GET

[contactForm.submit] = meneruskan pengiriman data yang diinput pada formulir setelah seluruh pemeriksaan validasi berhasil.

[indexGet.php] = peralihan GET dari index.php ke indexGet.php / index.php digunakan untuk POST

[method="post"] = peralihan methode="get" ke method="post" pada index.php

[$_POST] = data berpasangan nama dan nilai yang muncul pada request body dan tidak ditempelkan di URL untuk dikirim ke sever untuk diolah/diubah. Parameter ditentukan oleh atribut name pada input dan PHP membacanya lewat $_POST

[$_POST ?? '' ;] = mengakses data dari berbagai jenis input formulir menggunakan $_POST 

[htmlspecialchars] = mengubah karakter khusus HTML menjadi teks biasa agar aman ditampilkan kembali di halaman (mengamankan keluaran)

[$pesanKesalahan] = variabel penampung pesan kesalahan validasi PHP. Diisi dengan .= setiap ada pemeriksaan yagn gagal, dan tetap kosong jika semua data valid

[filter_var] = memeriksa format data di sisi peladen: FILTER_VALIDATE_INT untuk semester (harus bilangan bulat 1 sampai 14) dan FILTER_VALIDATE_EMAIL untuk email

[in_array] = memastikan nilai pilihan (jenis pesan, program studi, minat) ada di daftar nilai ayng diizinkan

[data-yang-diterima-peladen] = bagian abru di bawah formulir KOntak (setgelah tag penutup form dan sebelum tag penutup section) yang menampilkan kembali data formulir yang diterima peladen melalui POST: nama, email, semester, tanggal kunjungan, jenis pesan, program studi, minat dan pesan

[daftar-minat] = $minat berbentu array, sehingga ditampilkan satu per satu dalam bentuk daftar. Sebelum ditamplikan, dipersika dengan ois_array($minat) dan count($minat) lebih dari 0; setiap elemn diubah menjadi teks dengan (string). Jika kosong, ditampilkan teks "Tidak ada minat yang dipilih."

[nl2br] = mempertahankan pergantian baris pada pesan menjadi tag br agar pesan beberapa baris tampil sesuai asliny; dipakai setelah teks diamankan

[session_start()] = fungsi yang menyiapkan atau melanjutkan sesi pengguna agar data sementara dapat dipakai pada beberapa permintaa. Harus dipanggil di bagian PHP paling atas, sebelum ada keluaran HTML apa pun

[$_SESSION] = tempat menyimpan data sementara di sisi peladen selama sesi pengguna berlangsung. Pada formulir ini dipakai untuk menyimpan pesan kesalahan validasi dan data formulir (nama, email, semester, tanggal, jenis_pesan, prodi, minat, pesan)

[post-redirect-get(PRG)] = pola pemrosesan formulir yang megnarahkan pengguna dari permintaan POST ke permintaan GET setelah data diproses peladen. Alur : POST - validasi - simpan ke SESSION - Redirect - Get menampilkan data dari session. Maka, refrehs halaman tidak mengirim ulang formulir

[hedaer('Location:index.php')] = mengirim respons pengalihan menuju halaman index.php sehingga harus dipanggil sebelum ada keluaran ke peramban

[exit] = menghentikan eksekusi skrip setelah pengalihan dikirimkan

[unset] = unset() menghapus $_SESSION['pesanKesalahan'] setelah pesan tampil sekali sehingga pesan kesalahan bergunsi sebagai pesan sementara

[!empy($nama)] = kondisi pembungkus bagian Data yang Diterima Peladen menggantikan pemeriksaan metode POST, karena setelah pengalihan halaman diminta dengan GET

=== LANGKAH PENGUJIAN DAN HASIL AKTUAL ===
[$_GET]
[LANGKAH PENGUJIAN : <?php
$nama = "";
if (isset($_GET['nama'])){
  $nama = $_GET['nama'];
  print "Nama yang diterima: " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');

http://localhost/2622500005-PWD-SI1A-2627O/pertemuan-07/index.php?nama=Michael Jiven Singh
}
[HASIL AKTUAL : Berhasil. "Nama yang diterima: Michael Jiven Singh]
?>]

[contactForm.submit]
[LANGKAH PENGUJIAN : 
formFeedback.textContent = "Form berhasil divalidasi.";
formFeedback.className = "form-feedback-success";
contactForm.submit();]
[HASIL AKTUAL : Berhasil. Ketika input seluruh form di section Kontak lalu mengirimkan data tersebut, Output = "Nama yang diterima: Michael Jiven Singh]

[indexGet.php]
[LANGKAH PENGUJIAN :
index.php (copy) - index.php (rename) - indexGet.php

http://localhost/2622500005-PWD-SI1A-2627O/pertemuan-07/indexGet.php?nama=Michael+Jiven+Singh&email=budi%40gmail.com&semester=1&tanggal=2026-10-30&jenis_pesan=pertanyaan&minat=HTML&prodi=SI&pesan=testing]
[HASIL AKTUAL : Berhasil. Data yang telah diinput pada index.php masih terkait pada indexGet.php]

[method="post"]
[LANGKAH PENGUJIAN : 
<form id="contactForm" action="index.php" method="get" novalidate> menjadi<form id="contactForm" action="index.php" method="post" novalidate> pada index.php]
[HASIL AKTUAL : Berhasil. Pada view-souce(ctrl+u), <form id="contactForm" action="index.php" method="post" novalidate>]

[$_POST]
[LANGKAH PENGUJIAN : 
<?php
$nama = "";
if (isset($_POST['nama'])){
  $nama = $_POST['nama'];
  print "Nama yang diterima: " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
}
?>

http://localhost/2622500005-PWD-SI1A-2627O/pertemuan-07/index.php]
[HASIL AKTUAL : Berhasil. Setelah meninput nama = "Michael Jiven Singh" pada formulir. Output = "Nama yang diterima: Michael Jiven Singh]

[$_POST ?? '' ;]
[LANGKAH PENGUJIAN :
  $email = $_POST['email'] ?? '';
  $semesterForm = $_POST['semester'] ?? '';
  $tanggal = $_POST ['tanggal'] ?? '';
  $jenisPesan = $_POST['jenis_pesan'] ?? '';
  $prodi = $_POST['prodi'] ?? '';
  $pesan = $_POST['pesan'] ?? '';
  $minat = $_POST['minat'] ?? ''; 
name="minat[]" value="HTML" value="CSS"
const topikDipilih = document.querySelectorAll('input[name="minat"]:checked,input[name="minat[]"]:checked'); ]
[HASIL AKTUAL : Berhasil. localhost sempat menggunakan js versi sebelum langkah pengujian. Solusi : f12 - network - disable chace - f5 - testing html selagi WebDev. Output : "Nama yang diterima: Michael Jiven Singh"]

[$pesanKesalahan] 
[LANGKAH PENGUJIAN : 
Menonaktifkan script.js (    <!--<script src="script.js"></script>-->), mengisi seluruh kolom dengan benar kecuali Email ("bukan-email") 
        <?php if ($pesanKesalahan !== ''): ?>
          <p class="form-feedback-error">
            <?= htmlspecialchars($pesanKesalahan, ENT_QUOTES, 'UTF-8')?>
          </p>
        <?php endif; ?>]
[HASIL AKTUAL : Berhasil. Output ketika salah menginput form email = "Format email tidak valid."]

[filter_var] 
[LANGKAH PENGUJIAN : 
Menonaktifkan script.js (    <!--<script src="script.js"></script>-->), mengisi formulir tanpa memilih minat.]
[HASIL AKTUAL : Berhasil. Output ketika tidak memilih minat = "Minat wajib minimal dipilih satu."]

[data-yang-diterima-peladen] 
[LANGKAH PENGUJIAN : 
Menhubungkan kembali script.js ke HTML, 
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
          <h3> Data yang Diterima Peladen </h3>

          <p>Nama : 
            <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p>Email : 
          <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p>Semester : 
          <?= htmlspecialchars($semesterForm, ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p>Tanggal kunjungan : 
          <?= htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p>Jenis Pesan : 
          <?= htmlspecialchars($jenisPesan, ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p>Program Studi : 
          <?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p>Minat :</p>

        <?php if (is_array($minat) && count($minat) > 0): ?>
          <ul>
            <?php foreach ($minat as $topik): ?>
            <li>
                <?= htmlspecialchars((string) $topik, ENT_QUOTES, 'UTF-8') ?>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php else: ?>
            <p>Tidak ada minat yang dipilih. </p>
          <?php endif; ?>

          <p>Pesan:</p>

            <p><?= nl2br(htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')) ?></p>
        <?php endif; ?>
Mengirim formulir dengna data yang seusai aturan validasi, memeriksa apakah setiap variabel tampil pada bagian Data yang Diterima Peladen, menginput teks <b>Mahasiswa</b> pada bagina formulir Pesan]
[HASIL AKTUAL : Berhasil. Output = 
"Data yang Terima Peladen
Nama : Michael Jiven Singh
Email : budi@gmail.com
Semester : 1 
Tanggal kunjungna : 2026-10-31
Jenis Pesan : pertanyaan 
Program Studi : SI
Minat :
• HTML
Pesan : 
<b>Mahasiswa</b>(benar) bukan Mahasiswa cetak tebal]

[session,PRG]
[LANGKAH PENGUJIAN : 
1. <?php session_start(); 
2. if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['pesanKesalahan'] = $pesanKesalahan;

  $_SESSION['nama'] = $nama;
  $_SESSION['email'] = $email;
  $_SESSION['semester'] = $semester;
  $_SESSION['tanggal'] = $tanggal;
  $_SESSION['jenis_pesan'] = $jenisPesan;
  $_SESSION['prodi'] = $prodi;
  $_SESSION['minat'] = $minat;
  $_SESSION['pesan'] = $pesan;

  header('Location: index.php');
  exit;
}
3. $pesanKesalahan = $_SESSION['pesanKesalahan'] ?? '';

$nama = $_SESSION['nama'] ?? '';
$email = $_SESSION['email'] ?? '';
$semesterForm = $_SESSION['semester'] ?? '';
$tanggal = $_SESSION['tanggal'] ?? '';
$jenisPesan = $_SESSION['jenis_pesan'] ?? '';
$prodi = $_SESSION['prodi'] ?? '';
$minat = $_SESSION['minat'] ?? '';
$pesan = $_SESSION['pesan'] ?? '';

?> 
4. <?php if ($pesanKesalahan !== ''): ?>
          <p class="form-feedback-error">
            <?= htmlspecialchars($pesanKesalahan, ENT_QUOTES, 'UTF-8')?>
          </p>

          <?php 
          unset(
            $_SESSION['pesanKesalahan']
          )
          ?>
        <?php endif; ?> 
5. <?php if ($_SERVER['REQUEST_METHOD'] === 'POST): ?> menjadi <?php if (!empty($nama)): ?>]
[HASIL AKTUAL : Berhasil. Output =
"Data yang Terima Peladen
Nama : Michael Jiven Singh
Email : budi@gmail.com
Semester : 1 
Tanggal kunjungna : 2026-10-31
Jenis Pesan : pertanyaan 
Program Studi : SI
Minat :
• HTML
Pesan : 
mantap
Note : ketika halaman di refresh, data yang diterima peladen masih ada.]

=== Riwayat Pengembangan (COMMIT) ===
[Menyalin artefak pertemuan-06 ke pertemuan-07 untuk digunakan sebagai baseline] : Menyalin artefak (index.php, script.js, style.css, img) ke pertemuan 07
[Menguji http://localhost/pwd/0344300002 - PWD- TI1A - 2627O/pertemuan - 07/ dengan hasil
sama dengan http://localhost/pwd/0344300002 - PWD- TI1A - 2627O/pertemuan - 06/ " ] : Testing localhost pada pertemuan 07 
[Mempelajari penggunaan parameter GET] : data berpasangan nama dan nilai yang ditempelkan di URL (setelah ?) untuk dikirim ke server. Parameter ditentukan oleh atribut name pada input dan PHP membacanya lewat $_GET
[Mempraktikkan pengiriman formulir GET] : meneruskan pengiriman data yang diinput pada formulir setelah seluruh pemeriksaan validasi berhasil.
[Menyimpan demonstrasi formulir GET] : peralihan GET dari index.php ke indexGet.php / index.php digunakan untuk POST
[Mengubah formulir utama menjadi POST] : peralihan methode="get" ke method="post" pada index.php
[Menerima data formulir menggunakan POST] : data berpasangan nama dan nilai yang muncul pada request body dan tiadk ditempellkan di URL untuk dikirim ke server untuk diolah/diubah. Parameter ditentukan oleh atribut name pada input dan PHP membacanya lewat $_POST
[Menyesuaikan pembacaan input dan validasi formulir] : mengakses data dari berbagai jenis input formulir menggunakan $_POST 
[Menampilkan pesan kesalahan validasi PHP] : menampilkan isi $pesanKesalahan di bagian Kontak hanya ketika validasi PHP menghasilkan pesan kesalahan, dengan htmlspecialchars() untuk mengamankan keluaran
[Mengamankan keluaran data formulir] : $minat berbentu array, sehingga ditampilkan satu per satu dalam bentuk daftar. Sebelum ditamplikan, dipersika dengan ois_array($minat) dan count($minat) lebih dari 0; setiap elemn diubah menjadi teks dengan (string). Jika kosong, ditampilkan teks "Tidak ada minat yang dipilih.", mempertahankan pergantian baris pada pesan menjadi tag br agar pesan beberapa baris tampil sesuai asliny; dipakai setelah teks diamankan
[Menerapkan session dan pola PRG] = menyimpan pesan kesalahan dan data formulir ke $_SESSION setelah permintaan POST, mengalihkan pengguna ke index.php dengan header Location lalu exit, mengambil kembali data dari SESSION pada permintaan GET, sertan menghapus pesan kesalahan dengan unset() setelah tampil sekali
