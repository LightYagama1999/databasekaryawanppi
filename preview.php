<?php
// Koneksi ke database
require 'functions.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Query untuk mengambil data berdasarkan ID
$query = "SELECT * FROM mahasiswa WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Preview Data Karyawan</title>
    <link rel="stylesheet" href="stylepreview.css">
</head>
<body>
    <h1>Preview Data Karyawan</h1>
    <table>
        <tr>
            <td colspan="2" class="img-container">
                <img src="img/<?php echo $row['gambar']; ?>" alt="Gambar Karyawan">
            </td>
        </tr>
        <tr>
            <th>NIK</th>
            <td><?php echo $row["nik"]; ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?php echo $row["nama"]; ?></td>
        </tr>
        <tr>
            <th>Jabatan</th>
            <td><?php echo $row["jabatan"]; ?></td>
        </tr>
        <tr>
            <th>Departement</th>
            <td><?php echo $row["departement"]; ?></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><?php echo $row["tempat"]; ?></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><?php echo $row["tanggallahir"]; ?></td>
        </tr>
        <tr>
            <th>Usia</th>
            <td><?php echo $row["usia"]; ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo $row["alamat"]; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $row["gender"]; ?></td>
        </tr>
        <tr>
            <th>No. Handphone</th>
            <td><?php echo $row["handphone"]; ?></td>
        </tr>
        <tr>
            <th>Golongan</th>
            <td><?php echo $row["golongan"]; ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?php echo $row["status"]; ?></td>
        </tr>
        <tr>
            <th>Agama</th>
            <td><?php echo $row["agama"]; ?></td>
        </tr>
        <tr>
            <th>Pendidikan</th>
            <td><?php echo $row["pendidikan"]; ?></td>
        </tr>
        <tr>
            <th>Penerimaan Karyawan</th>
            <td><?php echo $row["penerimaan"]; ?></td>
        </tr>
        <tr>
            <th>Asal Tenaga Kerja</th>
            <td><?php echo $row["asal"]; ?></td>
        </tr>
        <tr>
            <th>Ibu Kandung</th>
            <td><?php echo $row["ibu"]; ?></td>
        </tr>
        <tr>
            <th>Suami/Istri</th>
            <td><?php echo $row["suamiistri"]; ?></td>
        </tr>
        <tr>
            <th>Anak 1</th>
            <td><?php echo $row["anak1"]; ?></td>
        </tr>
        <tr>
            <th>Anak 2</th>
            <td><?php echo $row["anak2"]; ?></td>
        </tr>
        <tr>
            <th>Anak 3</th>
            <td><?php echo $row["anak3"]; ?></td>
        </tr>
        <tr>
            <th>Anak 4</th>
            <td><?php echo $row["anak4"]; ?></td>
        </tr>
        <tr>
            <th>Anak 5</th>
            <td><?php echo $row["anak5"]; ?></td>
        </tr>
        <tr>
            <th>No. KTP</th>
            <td><?php echo $row["ktp"]; ?></td>
        </tr>
        <tr>
            <th>BPJS KESEHATAN</th>
            <td><?php echo $row["bpjskesehatan"]; ?></td>
        </tr>
        <tr>
            <th>BPJS KETENAGAKERJAAN</th>
            <td><?php echo $row["bpjsketenagakerjaan"]; ?></td>
        </tr>
        <tr>
            <th>NPWP</th>
            <td><?php echo $row["npwp"]; ?></td>
        </tr>
        <tr>
            <th>No. REKENING</th>
            <td><?php echo $row["norekening"]; ?></td>
        </tr>
    </table>
</body>
</html>
