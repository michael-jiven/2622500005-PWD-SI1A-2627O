P5 - JavaScript Dasar, DOM, Event, dan Validasi Sisi Klien
Deskripsi
Dokumentasi pengembangan halaman web pada P5, meliputi JavaScript, DOM, event listener, interaksi
navigasi, dan validasi formulir sisi klien.
Fitur dan Pengembangan
[console.log]: Perubahan pada JavaScript Internal yaitu memunculkan string "JavaScript Berhasil Dijalankan." pada WebDev
[<script>]: Menghubungkan JavaScript Ekstenal pada index.html
[addEventListener]: Mendaftarkan event listener pada suatu element HTML.
[EventClick]: Peristiwa yang terjadi ketika pengguna melakukan tindakan klik apda suatu elemen HTML.
[EventSubmit]: Peristiwa yang terjadi ketika pengguna melakukan pengiriman formulir.
[EventInput]: Peristiwa yagn terjaid ketika nilai pada suatu elemen formulir berubah akibat interaksi pengguna.
[EventReset]: Peristiwa yang terjadi ketika pengguna melakukan reset pada formulir.
[EventObject]: Object yang disediakan oleh peramban ketika suatu event terjadi.

LANGKAH PENGUJIAN DAN HASIL AKTUAL 
[console.log]: 
[LANGKAH PENGUJIAN : Memasukkan string "JavaScript berhasil dijalankan."] 
HASIL AKTUAL : JavaScript berhasil dijalankan]

[<script></script>]: 
[LANGKAH PENGUJIAN : Menulis kode tag <script src="script.js"> </script> pada index.html] 
[HASIL AKTUAL : <script scr="script.js"> </script>]

[addEventListener]: 
[LANGKAH PENGUJIAN : navToggle.addEventListener("click", () => {
    console.log("Tombol navigasi diklik.")
});] 
[HASIL AKTUAL : Tombol Navigasi diklik]

[EventClick]: 
[LANGKAH PENGUJIAN : navToggle.addEventListener("click", () => {
    console.log("Tombol navigasi diklik.")
});] 
[HASIL AKTUAL : Tombol Navigasi diklik]

[EventSubmit]: 
[LANGKAH PENGUJIAN : navToggle.addEventListener("click", () => {
    console.log("Form Dikirim);
});] 
[HASIL AKTUAL : Form Dikirim]

[EventInput]: 
[LANGKAH PENGUJIAN : contactForm.addEventListener("input", () => {
    formFeedback.textContent = "";
});]
[HASIL AKTUAL : "Nama lengkap harus diisi 3 sampai 50 karakter"]

[EventReset]: 
[LANGKAH PENGUJIAN : contactForm.addEventListener("reset", () => {
    formFeedback.textContent = "";
});]
[HASIL AKTUAL : data input pada formulir reset ]

[EventObject]: 
[LANGKAH PENGUJIAN : contactForm.addEventListener("submit", (event) => {
    console.log(event);
});]

Riwayat Pengembangan
Catat perkembangan melalui commit Git yang bermakna.
[]: [Ringkasan perubahan dan hasil pengujiannya.]
[Pesan commit]: [Ringkasan perubahan dan hasil pengujiannya.]
