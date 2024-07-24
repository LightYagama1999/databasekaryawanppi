<?php
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'functions.php'; 

if ( isset($_POST["submit"]) ) {
    if ( tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil di tambahkan!');
        document.location.href = 'index.php'
        </script>";
    } else {
     echo "
        <script>
        alert('data gagal di tambahkan!');
        document.location.href = 'index.php';
        </script> ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="styletambah.css">
</head>
<body>
    
    <div class="container">
        <div class="title">Tambah Data Karyawan</div>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nik">NIK : </label>
                <input type="text" name="nik" id="nik" required>
            </li>
            <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
            </li>
            <li>
            <label for="jabatan">Jabatan : </label>
            <input type="text" name="jabatan" id="jabatan">
            </li>
            <li>
            <label for="departement">Departement : </label>
            <input type="text" name="departement" id="departement">
            </li>
            <li>
            <label for="tempat">Tempat Lahir : </label>
            <input type="text" name="tempat" id="tempat">
            </li>
            <li>
            <label for="tanggallahir">Tanggal Lahir : </label>
            <input type="date" name="tanggallahir" id="tanggallahir">
            </li>
            <li>
            <label for="usia">Usia : </label>
            <input type="number" name="usia" id="usia">
            </li>
            <li>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
            </li>
            <li>
            <label for="gender">Gender : </label>
            <input type="radio" name="gender" id="gender" value="laki-laki"> Laki-laki
            <input type="radio" name="gender" id="gender" value="perempuan"> Perempuan
            </li>
            <li>
            <label for="handphone">No. Handphone : </label>
            <input type="text" name="handphone" id="handphone">
            </li>
            <li>
            <label for="golongan">Golongan : </label>
            <input type="text" name="golongan" id="golongan">
            </li>
            <li>
            <label for="status">Status : </label>
            <input type="text" name="status" id="status">
            </li>
            <li>
            <label for="agama"> Agama : </label>
            <input type="radio" name="agama" id="agama" value="Islam"> Islam
            <input type="radio" name="agama" id="agama" value="Kristen"> Kristen
            <input type="radio" name="agama" id="agama" value="Katolik"> Katolik
            <input type="radio" name="agama" id="agama" value="Hindu"> Hindu
            <input type="radio" name="agama" id="agama" value="Buddha"> Buddha
            <input type="radio" name="agama" id="agama" value="Khonghucu"> Khonghucu
            </li>
            <li>
            <label for="pendidikan">Pendidikan : </label>
            <input type="text" name="pendidikan" id="pendidikan">
            </li>
            <li>
            <label for="penerimaan">Penerimaan Karyawan : </label>
            <input type="text" name="penerimaan" id="penerimaan">
            </li>
            <li>
            <label for="asal">Asal Tenaga Kerja : </label>
            <input type="text" name="asal" id="asal">
            </li>
            <li>
            <label for="ibu">Ibu Kandung : </label>
            <input type="text" name="ibu" id="ibu">
            </li>
            <li>
            <label for="suamiistri">Suami/Istri : </label>
            <input type="text" name="suamiistri" id="suamiistri">
            </li>
            <li>
            <label for="anak1">Anak: </label>
            <input type="text" name="anak1" id="anak1">
            </li>
            <li>
            <label for="anak2">Anak: </label>
            <input type="text" name="anak2" id="anak2">
            </li>
            <li>
            <label for="anak3">Anak: </label>
            <input type="text" name="anak3" id="anak3">
            </li>
            <li>
            <label for="anak4">Anak: </label>
            <input type="text" name="anak4" id="anak4">
            </li>
            <li>
            <label for="anak5">Anak: </label>
            <input type="text" name="anak5" id="anak5">
            </li>
            <li>
            <label for="ktp">No KTP : </label>
            <input type="text" name="ktp" id="ktp">
            </li>
            <li>
            <label for="bpjskesehatan">BPJS KESEHATAN : </label>
            <input type="text" name="bpjskesehatan" id="bpjskesehatan">
            </li>
            <li>
            <label for="bpjsketenagakerjaan">BPJS KETENAGAKERJAAN : </label>
            <input type="text" name="bpjsketenagakerjaan" id="bpjsketenagakerjaan">
            </li>
            <li>
            <label for="norekening">NO REKENING : </label>
            <input type="text" name="norekening" id="norekening">
            </li>
            <li>
            <label for="npwp">NPWP : </label>
            <input type="text" name="npwp" id="npwp">
            </li>
            <li>
            <label for="gambar">Gambar : </label>
            <input type="file" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>
    </form>
    
    </div>
</body>
</html>