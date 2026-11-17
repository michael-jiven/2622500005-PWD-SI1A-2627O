<?php
session_start();

$nama = "";
$pesanKesalahan = '';
if (isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $wa = $_POST['wa'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (trim($nama ?? '') === ''){
            $pesanKesalahan .= 'Nama lengkap wajib diisi' ;
        }

        if (trim($wa) === '') {
            $pesanKesalahan .= 'Nomor Wa lengkap wajib diisi';
        }

        if(!in_array($jenis, ['samsung-01', 'samsung-02', 'samsung-03', 'samsung-04', 'samsung-05', 'samsung-06', 'samsung-07'], true)) {
            $pesanKesalahan .= 'Jenis HP tidak valid';
        }

        if (
            $jumlah === false ||
            $jumlah < 1 ||
            $jumlah > 10 
        ) {
            $pesanKesalahan .= 'Jumlah unit minimal 1 & maksimal 10';
        }
        
    }
}
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
        <title>Registrasi Pemesanan</title>
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


            <form id="contactForm" action="registrasi.php" method="get" novalidate>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label><br />

                    <input 
                        class="input-form"
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan Nama Lengkap"
                        minlength="3"
                        maxlength="50"
                        required
                    />
                </div>

                <div class="form-group">
                    <label for="wa">Nomor WhatsApp</label><br />

                    <input 
                        class="input-form"
                        type="tel"
                        id="no-wa"
                        name="no-wa"
                        placeholder="+629#######"
                        required
                    />
                </div>

                <div class="form-group">
                    <label for="jenis">Jenis HP</label><br />

                    <select class="input-form" id="jenis-hp" name="jenis-hp" required>
                        <option value="">-- Pilih Jenis HP yang Ingin Dibeli --</option>
                        <option value="samsung-01">Samsung Galaxy A06</option>
                        <option value="samsung-02">Samsung Galaxy A07</option>
                        <option value="samsung-03">Samsung Galaxy A17</option>
                        <option value="samsung-04">Samsung Galaxy A26</option>
                        <option value="samsung-05">Samsung Galaxy A37</option>
                        <option value="samsung-06">Samsung Galaxy A56</option>
                        <option value="samsung-07">Samsung Galaxy A57</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Unit</label><br />
                        <input
                            class="input-form"
                            type="number"
                            id="jumlah-unit"
                            name="jumlah-unit"
                            min="1"
                            max="10"
                            placeholder="Masukkan Jumlah Unit yang Dibeli"
                            required
                        />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Anda</label><br />

                    <textarea
                        class="input-form"
                        id="alamat"
                        name="alamat"
                        maxlength="200"
                        placeholder="Berikan Alamat Anda"
                        required
                    ></textarea>
                </div>

                <div class="tombol-form">
                    <button type="submit">Kirim</button>
                    <button type="reset">Batal</button>
                </div>
                <div id="formFeedback"></div>
            </form>
        </div>
    </div>
        
    <footer>
        <p>&copy;<?php echo $nim . "_" . $nama . "_" . $kelompok_kelas . "_UTS" . " " . $matkul;?></p>
    </footer>
    <script src="script.js"></script>
    </body>
</html>