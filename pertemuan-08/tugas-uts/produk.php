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
        <title>Produk Handphone Samsung MJ</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="produk">
        <header> 
            <div id="bungkus">
                <h1>Produk Samsung Handphone</h1>
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
                <div class="daftar-kartu">
                    <div class="kartu">
                        <img src="img/samsung-01.jpg" alt="Galaxy A06">
                        <div class="spek">
                            <h3>Galaxy A06</h3>
                            <p>RAM : 4 GB</p>
                            <p>Memori : 128GB</p>
                            <p class="harga">Rp 1.800.000</p>
                        </div>
                    </div>
                    <div class="kartu">
                        <img src="img/samsung-02.jpg" alt="Galaxy A07">
                        <div class="spek">
                            <h3>Galaxy A07</h3>
                            <p>RAM : 4 GB</p>
                            <p>Memori : 128GB</p>
                            <p class="harga">Rp 1.900.000</p>
                        </div>
                    </div>
                    <div class="kartu">
                        <img src="img/samsung-03.jpg" alt="Galaxy A17">
                        <div class="spek">
                            <h3>Galaxy A17</h3>
                            <p>RAM : 8 GB</p>
                            <p>Memori : 128GB</p>
                            <p class="harga">Rp 3.000.000</p>
                        </div>
                    </div>
                    <div class="kartu">
                        <img src="img/samsung-04.jpg" alt="Galaxy A26">
                        <div class="spek">
                            <h3>Galaxy A26</h3>
                            <p>RAM : 8 GB</p>
                            <p>Memori : 128 GB</p>
                            <p class="harga">Rp 4.500.000</p>
                        </div>
                    </div>
                    <div class="kartu">
                        <img src="img/samsung-05.jpg" alt="Galaxy A37">
                        <div class="spek">
                            <h3>Galaxy A37</h3>
                            <p>RAM : 8 GB</p>
                            <p>Memory : 256 GB</p>
                            <p class="harga">Rp 5.500.000</p>
                        </div>
                    </div>
                    <div class="kartu">
                        <img src="img/samsung-06.jpg" alt="Galaxy A56">
                        <div class="spek">
                            <h3>Galaxy A56</h3>
                            <p>RAM : 8 GB</p>
                            <p>Memori : 256 GB</p>
                            <p class="harga">Rp 7.000.000</p>
                        </div>
                    </div>
                    <div class="kartu">
                        <img src="img/samsung-07.jpg" alt="Galaxy A57">
                        <div class="spek">
                            <h3>Galaxy A57</h3>
                            <p>RAM : 8 GB</p>
                            <p>Memori : 256 GB</p>
                            <p class="harga">Rp 7.500.000</p>
                        </div>
                    </div>
                </div>
            </div>
        <footer>
            <p>&copy;<?php echo $nim . "_" . $nama . "_" . $kelompok_kelas . "_UTS" . " " . $matkul;?></p>
        </footer>
    </body>
</html>