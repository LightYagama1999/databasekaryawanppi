<?php
session_start();
if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'functions.php'; //menghubungkan dengan function.php
// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id nya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Koneksi ke DBMS
// $conn = mysqli_connect("localhost","root", "","phpdasar2");

// cek apakah tombol submit sudah di tekan atau belum
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
    
    if ( ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil di ubah!');
        document.location.href = 'index.php'
        </script>";
    } else {
     echo "
        <script>
        alert('data gagal di ubah!');
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
    <title>Ubah data Karyawan</title>
    <link rel="stylesheet" href="styleubah.css">
</head>
<body>
<div class="container">
<div class="title">Ubah Data Karyawan</div>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <!-- gambar lama -->
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"];?>">
        <ul>
            <li>
                <label for="nik">NRP : </label>
                <input type="text" name="nik" id="nik" value="<?= $mhs["nik"];?>" required>
            </li>
            <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?= $mhs["nama"];?>">
            </li>
            <li>
            <label for="jabatan">Email : </label>
            <input type="text" name="jabatan" id="jabatan" value="<?= $mhs["jabatan"];?>">
            </li>
            <li>
            <label for="departement">Jurusan : </label>
            <input type="text" name="departement" id="departement" value="<?= $mhs["departement"];?>">
            </li>
            <li>
            <label for="tempat">Tempat Lahir : </label>
            <input type="text" name="tempat" id="tempat" value="<?= $mhs["tempat"];?>">
            </li>
            <li>
            <label for="tanggallahir">Tanggal Lahir : </label>
            <input type="date" name="tanggallahir" id="tanggallahir" value="<?= $mhs["tanggallahir"];?> ">
            </li>
            <li>
            <label for="usia">Usia : </label>
            <input type="number" name="usia" id="usia" value="<?= $mhs["usia"];?>">
            </li>
            <li>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" value="<?= $mhs["alamat"];?>">
            </li>
            <li>
            <label for="gender">Gender : </label>
            <input type="radio" name="gender" id="gender_laki_laki" value="laki-laki" <?= ($mhs["gender"] == 'laki-laki') ? 'checked' : ''; ?>> Laki-laki
            <input type="radio" name="gender" id="gender_perempuan" value="perempuan" <?= ($mhs["gender"] == 'perempuan') ? 'checked' : ''; ?>> Perempuan
            </li>
            <li>
            <label for="handphone">No. Handphone : </label>
            <input type="text" name="handphone" id="handphone" value="<?= $mhs["handphone"];?> ">
            </li>
            <li>
            <label for="golongan">Golongan : </label>
            <input type="text" name="golongan" id="golongan" value="<?= $mhs["golongan"];?> ">
            </li>
            <li>
            <label for="status">Status : </label>
            <input type="text" name="status" id="status" value="<?= $mhs["status"];?> ">
            </li>
            <li>
            <label for="agama">Agama : </label>
            <input type="radio" name="agama" id="agama_islam" value="Islam" <?= ($mhs["agama"] == 'Islam') ? 'checked' : ''; ?>> Islam
            <input type="radio" name="agama" id="agama_kristen" value="Kristen" <?= ($mhs["agama"] == 'Kristen') ? 'checked' : ''; ?>> Kristen
            <input type="radio" name="agama" id="agama_katolik" value="Katolik" <?= ($mhs["agama"] == 'Katolik') ? 'checked' : ''; ?>> Katolik
            <input type="radio" name="agama" id="agama_hindu" value="Hindu" <?= ($mhs["agama"] == 'Hindu') ? 'checked' : ''; ?>> Hindu
            <input type="radio" name="agama" id="agama_buddha" value="Buddha" <?= ($mhs["agama"] == 'Buddha') ? 'checked' : ''; ?>> Buddha
            <input type="radio" name="agama" id="agama_khonghucu" value="Khonghucu" <?= ($mhs["agama"] == 'Khonghucu') ? 'checked' : ''; ?>> Khonghucu
            </li>
            <li>
            <label for="pendidikan">Pendidikan : </label>
            <input type="text" name="pendidikan" id="pendidikan" value="<?= $mhs["pendidikan"];?> ">
            </li>
            <li>
            <label for="penerimaan">Penerimaan Karyawan : </label>
            <input type="text" name="penerimaan" id="penerimaan" value="<?= $mhs["penerimaan"];?> ">
            </li>
            <li>
            <label for="asal">Asal Tenaga Kerja : </label>
            <input type="text" name="asal" id="asal" value="<?= $mhs["asal"];?> ">
            </li>
            <li>
            <label for="ibu">Ibu Kandung : </label>
            <input type="text" name="ibu" id="ibu" value="<?= $mhs["ibu"];?> ">
            </li>
            <li>
            <label for="suamiistri">Suami/Istri : </label>
            <input type="text" name="suamiistri" id="suamiistri" value="<?= $mhs["suamiistri"];?> ">
            </li>
            <li>
            <label for="anak1">Anak: </label>
            <input type="text" name="anak1" id="anak1" value="<?= $mhs["anak1"];?> ">
            </li>
            <li>
            <label for="anak2">Anak: </label>
            <input type="text" name="anak2" id="anak2" value="<?= $mhs["anak2"];?> ">
            </li>
            <li>
            <label for="anak3">Anak: </label>
            <input type="text" name="anak3" id="anak3" value="<?= $mhs["anak3"];?> ">
            </li>
            <li>
            <label for="anak4">Anak: </label>
            <input type="text" name="anak4" id="anak4" value="<?= $mhs["anak4"];?> ">
            </li>
            <li>
            <label for="anak5">Anak: </label>
            <input type="text" name="anak5" id="anak5" value="<?= $mhs["anak5"];?> ">
            </li>
            <li>
            <label for="ktp">No KTP : </label>
            <input type="text" name="ktp" id="ktp" value="<?= $mhs["ktp"];?> ">
            </li>
            <li>
            <label for="bpjskesehatan">BPJS KES : </label>
            <input type="text" name="bpjskesehatan" id="bpjskesehatan" value="<?= $mhs["bpjskesehatan"];?> ">
            </li>
            <li>
            <label for="bpjsketenagakerjaan">BPJS KTK : </label>
            <input type="text" name="bpjsketenagakerjaan" id="bpjsketenagakerjaan" value="<?= $mhs["bpjsketenagakerjaan"];?> ">
            </li>
            <li>
            <label for="norekening">NO REK : </label>
            <input type="text" name="norekening" id="norekening" value="<?= $mhs["norekening"];?> ">
            </li>
            <li>
            <label for="npwp">NPWP : </label>
            <input type="text" name="npwp" id="npwp" value="<?= $mhs["npwp"];?> ">
            </li>
            <li>
            <label for="gambar">Gambar : </label><br>
            <img src="img/<?= $mhs['gambar']; ?>" width="80"><br>
            <input type="file" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">Ubah Data</button>
        </ul>
    </form>
    </div>
</body>
</html>