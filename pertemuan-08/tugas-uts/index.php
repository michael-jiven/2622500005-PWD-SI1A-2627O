<?php
$nama = "Michael Jiven Singh";
$nim = "2622500005";
$matkul = "Pemrograman Web Dasar";
$kelompok_kelas= "SI1A";
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MJ Samsung Handphone</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="home">
        <header>
            <div id="bungkus">
                <h1>MJ Samsung Handphone</h1>
                <img src="img/logo-usaha.jpg" class="logo-usaha">
            </div>
        </header>
        <div id="tengah">
            <div id="navigasi">
                <nav>
                    <a href="index.php" class="navigasi">Home</a>
                    <a href="profile.php" class="navigasi">Profile</a>
                    <a href="registrasi.php" class="navigasi">Registrasi</a>
                    <a href="produk.php" class="navigasi">Produk</a>
                </nav>
            </div class="galeri">
            <div class="konten">
                <p class="paragraf-atas">Selamat datang di website resmi Reseller Samsung MJ</p>
                <img src="img/samsung-01.jpg" class="gambar-produk">
                <img src="img/samsung-02.jpg" class="gambar-produk">
                <img src="img/samsung-03.jpg" class="gambar-produk">
                <img src="img/samsung-04.jpg" class="gambar-produk">
                <img src="img/samsung-05.jpg" class="gambar-produk">
                <img src="img/samsung-06.jpg" class="gambar-produk">
                <img src="img/samsung-07.jpg" class="gambar-produk">
                <p class="paragraf-bawah">Samsung adalah produsen handphone asal Korea Selatan yang menawarkan beragam produk smartphone berbasis Android, mulai dari seri Galaxy A untuk kelas menengah, seri Galaxy S untuk kelas flagship dengan kamera dan performa unggulan, hingga seri Galaxy Z yang menghadirkan teknologi layar lipat. Samsung telah menjadi salah satu merek handphone terbesar di dunia berkat inovasi teknologinya yang konsisten dan jangkauan produk yang luas, mulai dari kelas entry-level hingga flagship. Produk Samsung dikenal memiliki layar AMOLED dengan warna tajam dan tingkat kecerahan tinggi, sistem kamera yang mampu menghasilkan foto detail baik di siang maupun malam hari, serta performa yang didukung prosesor Exynos atau Snapdragon. Selain itu, antarmuka One UI yang ramah pengguna dilengkapi dengan beragam fitur tambahan, seperti mode multitasking, keamanan Samsung Knox, dan dukungan pembaruan perangkat lunak dalam jangka panjang. Dengan banyaknya pilihan harga dan spesifikasi, pengguna dapat menyesuaikan produk Samsung dengan kebutuhan, baik untuk belajar, bekerja, bermain game, maupun berkreasi.</p>
            </div>
        </div>
        
        <footer>
            <p>&copy;<?php echo $nim . "_" . $nama . "_" . $kelompok_kelas . "_UTS" . " " . $matkul;?></p>
        </footer>
    </body>
</html>