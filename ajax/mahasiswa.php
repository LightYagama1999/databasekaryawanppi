<?php
require '../functions.php';
$keyword = $_GET['keyword'];

$query = "SELECT * FROM mahasiswa
        WHERE
        nama LIKE '%$keyword%' OR
        nik LIKE '%$keyword%' OR
        jabatan LIKE '%$keyword%' OR
        departement LIKE '%$keyword%'
        ";

$mahasiswa = query($query);
?>

<table border="1" cellpadding="10" cellspacing="0">
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
        <td><a href="preview.php?id=<?= $row["id"]; ?>">preview</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>