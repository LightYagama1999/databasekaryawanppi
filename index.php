<?php
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location:login.php");
    exit;
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// jika tombol cari di klik
if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="containernavbar">
            <a href="#" class="brand">Database Karyawan</a>
            <div class="navbar-links">
                <a href="tambah.php">Tambah data karyawan</a>
                <a href="logout.php">Log out!</a>
                <!-- Uncomment the next line if you need the "Cetak" link -->
                <!-- <a href="cetak.php" target="_blank">Cetak</a> -->
            </div>
        </div>
    </nav>
<!-- end of navbar -->
 <br>
<!-- pencarian -->
<form action="" method="POST">
    <input type="text" name="keyword" size="40" autofocus placeholder="Silahkan isi Keyword Pencarian..."
    autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    <img src="img/loader.gif" class="loader">
</form>
<!-- end of pencarian -->
<div id="container">
<table border="1" cellpadding="10" cellspacing="5">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Departement</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Usia</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>No. Handphone</th>
        <th>Golongan</th>
        <th>Status</th>
        <th>Agama</th>
        <th>Pendidikan</th>
        <th>Penerimaan Karyawan</th>
        <th>Asal Tenaga Kerja</th>
        <th>Ibu Kandung</th>
        <th>Suami/Istri</th>
        <th>Anak</th>
        <th>Anak</th>
        <th>Anak</th>
        <th>Anak</th>
        <th>Anak</th>
        <th>No. KTP</th>
        <th>BPJS KESEHATAN</th>
        <th>BPJS KETENAGAKERJAAN</th>
        <th>NPWP</th>
        <th>No. REKENING</th>
        <th>Preview</th>
    </tr>
    <?php $i = 1; ?>
    <?php
    foreach ( $mahasiswa as $row ) : 
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin data mau dihapus!');">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
        <td><?php echo $row["nik"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["jabatan"]; ?></td>
        <td><?php echo $row["departement"]; ?></td>
        <td><?php echo $row["tempat"]; ?></td>
        <td><?php echo $row["tanggallahir"]; ?></td>
        <td><?php echo $row["usia"]; ?></td>
        <td><?php echo $row["alamat"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["handphone"]; ?></td>
        <td><?php echo $row["golongan"]; ?></td>
        <td><?php echo $row["status"]; ?></td>
        <td><?php echo $row["agama"]; ?></td>
        <td><?php echo $row["pendidikan"]; ?></td>
        <td><?php echo $row["penerimaan"]; ?></td>
        <td><?php echo $row["asal"]; ?></td>
        <td><?php echo $row["ibu"]; ?></td>
        <td><?php echo $row["suamiistri"]; ?></td>
        <td><?php echo $row["anak1"]; ?></td>
        <td><?php echo $row["anak2"]; ?></td>
        <td><?php echo $row["anak3"]; ?></td>
        <td><?php echo $row["anak4"]; ?></td>
        <td><?php echo $row["anak5"]; ?></td>
        <td><?php echo $row["ktp"]; ?></td>
        <td><?php echo $row["bpjskesehatan"]; ?></td>
        <td><?php echo $row["bpjsketenagakerjaan"]; ?></td>
        <td><?php echo $row["npwp"]; ?></td>
        <td><?php echo $row["norekening"]; ?></td>
        <td><a href="preview.php?id=<?= $row["id"]; ?>">Preview</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>