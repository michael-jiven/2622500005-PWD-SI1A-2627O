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
        <title>Profil MJ</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="profile">
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
            </div>
        

            <div class="bungkus">
                <img src="img/foto-profil.jpeg" alt="Michael Jiven Singh" class="foto-profil">
            
                <div class="info-profil">
                    <p>Nama : <?php echo $nama?></p>
                    <p>NIM : 2622500005</p>
                    <p>Program Studi : Sistem Informasi</p>
                    <p>Kelompok Kelas : SI1A</p>
                    <p>Semester : 1</p>
                    <p>Tempat/Tanggal Lahir : Pangkalpinang, 28 Maret 2008</p>
                    <p>Alamat : Jl. Garuda, dekat Pasar Mambo, Kec. Rangkui</p>
                </div>
        </div>
        </div>
        
        <footer>
            <p>&copy;<?php echo $nim . "_" . $nama . "_" . $kelompok_kelas . "_UTS" . " " . $matkul;?></p>
        </footer>
    </body>
</html>