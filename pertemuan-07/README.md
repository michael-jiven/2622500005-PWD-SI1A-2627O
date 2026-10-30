# pertemuan-07
Pemrosesan Formulir dengna PHP, Validasi Sisi Peladen, dan PRG

=== Fitur dan Pengembangan ===
[$_GET] = data berpasangan anam dan nilai yang ditempelkan di URL (setelah ?) untuk dikirim ke server. Parameter ditentukan oleh atribut name pada input dan PHP membacanya lewat $_GET

[contactForm.submit] = meneruskan pengiriman data yang diinput pada formulir setelah seluruh pemeriksaan validasi berhasil.

[indexGet.php] = peralihan GET dari index.php ke indexGet.php / index.php digunakan untuk POST

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
formFeedback.textcontent = "Form berhasil divalidasi.";
formFeedback.className = "form-feedback-succes";
contactForm.submit();]
[HASIL AKTUAL : Berhasil. Ketika input seluruh form di section Kontak lalu mengirimkan data tersebut, Output = "Nama yang diterima: Michael Jiven Singh]

[indexGet.php]
[LANGKAH PENGUJIAN :
index.php (copy) - index.php (rename) - indexGet.php

http://localhost/2622500005-PWD-SI1A-2627O/pertemuan-07/indexGet.php?nama=Michael+Jiven+Singh&email=budi%40gmail.com&semester=1&tanggal=2026-10-30&jenis_pesan=pertanyaan&minat=HTML&prodi=SI&pesan=testing]
[HASIL AKTUAL : Berhasil. Data yang telah diinput pada index.php masih terkait pada indexGet.php]













=== Riwayat Pengembangan (COMMIT) ===
[Menyalin artefak pertemuan-06 ke pertemuan-07 untuk digunakan sebagai baseline] : Menyalin artefak (index.php, script.js, style.css, img) ke pertemuan 07
[Menguji http://localhost/pwd/0344300002 - PWD- TI1A - 2627O/pertemuan - 07/ dengan hasil
sama dengan http://localhost/pwd/0344300002 - PWD- TI1A - 2627O/pertemuan - 06/ " ] : Testing localhost pada pertemuan 07 
[Mempelajari penggunaan parameter GET] : data berpasangan anam dan nilai yang ditempelkan di URL (setelah ?) untuk dikirim ke server. Parameter ditentukan oleh atribut name pada input dan PHP membacanya lewat $_GET
[Mempraktikkan pengiriman formulir GET] : meneruskan pengiriman data yang diinput pada formulir setelah seluruh pemeriksaan validasi berhasil.
[Menyimpan demonstrasi formulir GET] : peralihan GET dari index.php ke indexGet.php / index.php digunakan untuk POST