# pertemuan-08
UTS - Membuat Wbsite dengan topik Bisnis/Usaha

# tugas-uts
Website MJ Samsung Handphone dengan HTML, CSS, PHP, dan JavaScript

=== Fitur dan Pengembangan ===
[halaman php] = seluruh halaman (index, profile, produk, registrasi) memakai ekstensi php agar variabel PHP dapat dipakai pada footer. Tautan menu pada keempat halaman diarahkan ke file php

[variabel PHP] = $nama, $nim, $matkul, dan $kelompok_kelas dideklarasikan di bagian PHP paling atas setiap halaman, sebelum doctype

[echo dengan penyambungan] = menampilkan nilai variabel PHP pada footer dengan echo. Teks ditulis dalam tanda kutip dan disambung dengan operator titik, serta titik koma hanya di akhir perintah

[halaman produk] = tujuh kartu produk Galaxy A06 sampai A57 berisi gambar, RAM, memori, dan harga

[formulir registrasi] = formulir pemesanan dengan lima kolom: nama lengkap (text), nomor WhatsApp (tel), jenis HP (select), jumlah unit (number), dan alamat (textarea), serta tombol Kirim dan Batal

[type="tel"] = tipe input untuk nomor telepon/WhatsApp

[label for dan id] = atribut for pada label sama dengan id pada input agar label terhubung ke input yang dimaksud

[novalidate] = mematikan validasi bawaan peramban sehingga validasi dikerjakan sepenuhnya oleh JavaScript

[formFeedback] = area pesan umpan balik formulir. Kelas form-feedback-error dipakai untuk pesan kesalahan dan form-feedback-success untuk pesan berhasil

[event.preventDefault()] = menahan pengiriman formulir otomatis agar JavaScript dapat memeriksa isian lebih dulu

[trim()] = menghapus spasi di awal dan akhir teks sebelum diperiksa

[Number()] = mengubah isi kolom jumlah unit menjadi angka agar dapat dibandingkan dengan batas 1 sampai 10

[return] = menghentikan pemeriksaan pada aturan yang gagal sehingga hanya satu pesan kesalahan yang tampil

[event reset] = menghapus pesan umpan balik ketika tombol Batal ditekan

[flexbox] = tata letak memakai display flex pada #bungkus, #tengah, .daftar-kartu, .kartu, dan #contactForm; menu navigasi berada di sisi kiri dan konten di sisi kanan

[backdrop-filter] = efek blur pada latar menu, kartu, formulir, dan footer sehingga tampilan seperti kaca

=== LANGKAH PENGUJIAN DAN HASIL AKTUAL ===
[halaman php]
[LANGKAH PENGUJIAN :
1. Menyalin folder tugas-uts ke C:\laragon\www, lalu menjalankan Start All pada Laragon
2. Membuka alamat berikut di peramban:

```
http://localhost/tugas-uts/index.php
```

3. Mengklik menu Home, Profile, Registrasi, dan Produk dari setiap halaman, lalu memeriksa alamat di address bar]
[HASIL AKTUAL : (Berhasil)]

[variabel PHP, echo dengan penyambungan]
[LANGKAH PENGUJIAN :
1. Mendeklarasikan variabel di bagian PHP paling atas setiap halaman:

```php
<?php
$nama = "Michael Jiven Singh";
$nim = "2622500005";
$matkul = "Pemrograman Web Dasar";
$kelompok_kelas = "SI1A";
?>
```

2. Menampilkan variabel pada footer:

```php
<footer>
    <p>&copy;<?php echo $nim . "_" . $nama . "_" . $kelompok_kelas . "_UTS" . " " . $matkul; ?></p>
</footer>
```

3. Membuka setiap halaman lewat localhost, lalu memeriksa footer]
[HASIL AKTUAL : (Berhasil)]

[validasi JavaScript]
[LANGKAH PENGUJIAN :
1. Memasang script pada registrasi.php sebelum penutup body:

```html
<script src="script.js"></script>
```

2. Menulis validasi pada script.js:

```javascript
contactForm.addEventListener("submit", (event)=> {
    event.preventDefault();

    formFeedback.className = "form-feedback-error";

    const nama = namaInput.value.trim();
    if (nama.length < 3 || nama.length > 50) {
        formFeedback.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter";
        return;
    }

    const noWa = noWaInput.value.trim();
    if (noWa.length < 12 || noWa.length > 15) {
        formFeedback.textContent = "Nomor WhatsApp wajib diisi";
        return;
    }

    const jenisHp = jenisHpInput.value;
    if (jenisHp === "") {
        formFeedback.textContent = "Pilih jenis HP yang ingin dibeli";
        return;
    }

    const jumlahUnit = Number (jumlahUnitInput.value);
    if (jumlahUnitInput.value === "" || jumlahUnit < 1 || jumlahUnit > 10) {
        formFeedback.textContent = "Jumlah unit minimal 1 maksimal 10";
        return;
    }

    const alamat = alamatInput.value.trim();
    if (alamat.length === 0 ) {
        formFeedback.textContent = "Alamat harus diisi";
        return;
    }

    if (alamat.length > 200) {
        formFeedback.textContent = "Alamat maksimal 200 karakter";
        return;
    }

    formFeedback.textContent = "Form berhasil dikirim";
    formFeedback.className = "form-feedback-success";
});
```

3. Membuka registrasi.php, mengosongkan Nama Lengkap, lalu klik Kirim
4. Mengisi nama dengan benar dan Nomor WhatsApp dengan 0812, lalu klik Kirim
5. Membiarkan Jenis HP pada pilihan awal, lalu klik Kirim
6. Mengisi Jumlah Unit dengan 11, lalu klik Kirim
7. Mengosongkan Alamat, lalu klik Kirim
8. Mengisi seluruh kolom dengan data yang sesuai, lalu klik Kirim
9. Klik Batal, lalu memeriksa pesan umpan balik]
[HASIL AKTUAL : (Berhasil)]

=== Riwayat Pengembangan (COMMIT) ===