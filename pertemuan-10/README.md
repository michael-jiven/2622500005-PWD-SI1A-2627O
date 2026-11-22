# pertemuan-10
Analisis Kebutuhan Data dan Dasar MySQL Satu Tabel

=== Fitur dan Pengembangan ===
[pertemuan-10] : menyalin aartefak pertemuan-09 ke pertemuan-10 sebagai baseline 

[phpMyAdmin] : mengelola basis data MySQL melalui antarmuka berbasis web.

[Data_Atribut_Jenis] : pada bagian formulir Kontak, cek setiap elemen input.

[name="minat"] : menangani filed minat yang memiliki beberapa pilihan 

[Nama_Database_Tabel] : menentukan nama basis data dan nama tabel sesuai pola P10 dengan NIM 2622500005

[db_pwd_2622500005] : nama basis data untuk menyimpan data aplikasi

[tbl_kontak_2622500005] : nama tabel untuk menyimpan data fomrulir.

[Atribut_Tipe_Data] : merancang atribut dan tipe data tabel kontak

[VARCHAR(n)] : menyimpan data teks dengan panjang maksimal sesuai nilai n. Dipakai pada nama, email, jenis_pesan, minat, prodi dan pesan. 

[TINYIT] : menyimpan bilangan bulat berukuran kecil. Dipakai pada semester.

[DATE] : menyimpan nilai tanggal. Dipakai pada tanggal.

=== LANGKAH PENGUJIAN DAN HASIL AKTUAL ===
[phpMyAdmin]
[LANGKAH PENGUJIAN : membuka Laragon - Klik Nav Database - myPhpAdmin]
[HASIL AKTUAL : Berhasil]

[Data_Atribut_Jenis] 
[LANGKAH PENGUJIAN : mengecek setiap elemen input. ~Data~ = nama, email, semester, tanggal kunjungan, jenis pesan, topik yang diminati, program studi. ~Atribut~ = nama, email, semester, tanggal, jenis_pesan, minat[], prodi, pesan. ~Jenis~ = Text, Email., Number, Date, Radio, Checkbox, Select, Textarea]
[HASIL AKTUAL : Semua data tersedia]

[name="minat"]
[LANGKAH PENGUJIAN : name="minat"[] ]
[HASIL AKTUAL : name="minat"[] ada di bagian PHP]

[Nama_Database_Tabel] 
[LANGKAH PENGUJIAN : penulisan nama basis data dan tabel]
[HASIL AKTUAL : nama basis data = db_pwd_2622500005 dan nama tabel = tbl_kontak_2622500005]

[Atribut_Tipe_Data] 
[LANGKAH PENGUJIAN : menambahkan depalan data fomurlir dengan pencocokan nama atribut dan tipe data dengan batasan input. nama = VARCHAR(50), email = VARCHAR(250), semester = TINYIT, tanggal = DATE, jenis_pesan = VARCHAR(20), minat = VARCHAR(50), prodi = VARCHAR(3), pesan = VARCHAR(300)]
[HASIL AKTUAL : Sesuai. Delapan atribut dan tipe datanya sesuai dengan formulir P7]

=== Riwayat Pengembangan (COMMIT) ===
[pertemuan-10] : menyalin artefak pertemuan-09 ke pertemuan-10 sebagai baseline 
[phpMyAdmin] : mengelola basis data MySQL melalui antarmuka berbasis web.
[Data_Atribut_Jenis] : Mengidentifikasi kebutuhan data formulir kontak P10
[Data_Atribut_Jenis] : Menentukan data formulir yang akan disimpan ke basis data
[Nama_Database_Tabel] : Menentukan nama basis data dan tabel P10
[Artibut_Tipe_Data] : Merancang atribut dan tipe data tabel kontak.