<?php
// koneksi ke database
$conn = mysqli_connect("localhost","u461676920_luckypradani", "4T@;SUtUHpTd","u461676920_Karyawan");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
// AMBIL DATA DARI TIAP ELEMEN DALAM FORM
global $conn;
$nik = htmlspecialchars($data["nik"]);
$nama = htmlspecialchars($data["nama"]);
$jabatan = htmlspecialchars($data["jabatan"]);
$departement = htmlspecialchars($data["departement"]);
$tempat = htmlspecialchars($data["tempat"]);
$tanggallahir = htmlspecialchars($data["tanggallahir"]);
$usia = htmlspecialchars($data["usia"]);
$alamat = htmlspecialchars($data["alamat"]);
$gender = htmlspecialchars($data["gender"]);
$handphone = htmlspecialchars($data["handphone"]);
$golongan = htmlspecialchars($data["golongan"]);
$status = htmlspecialchars($data["status"]);
$agama = htmlspecialchars($data["agama"]);
$pendidikan = htmlspecialchars($data["pendidikan"]);
$penerimaan = htmlspecialchars($data["penerimaan"]);
$asal = htmlspecialchars($data["asal"]);
$ibu = htmlspecialchars($data["ibu"]);
$suamiistri = htmlspecialchars($data["suamiistri"]);
$anak1 = htmlspecialchars($data["anak1"]);
$anak2 = htmlspecialchars($data["anak2"]);
$anak3 = htmlspecialchars($data["anak3"]);
$anak4 = htmlspecialchars($data["anak4"]);
$anak5 = htmlspecialchars($data["anak5"]);
$ktp = htmlspecialchars($data["ktp"]);
$bpjskesehatan = htmlspecialchars($data["bpjskesehatan"]);
$bpjsketenagakerjaan = htmlspecialchars($data["bpjsketenagakerjaan"]);
$norekening = htmlspecialchars($data["norekening"]);
$npwp = htmlspecialchars($data["npwp"]);

// upload gambar
$gambar = upload();
if(!$gambar) {
    return false;
}

// query insert data
$query = "INSERT INTO mahasiswa
VALUES
('', '$nik', '$nama', '$jabatan', '$departement','$tempat', '$tanggallahir', '$usia', '$alamat', '$gender', '$handphone',
'$golongan', '$status', '$agama', '$pendidikan', '$penerimaan', '$asal', '$ibu', '$suamiistri', '$anak1', '$anak2',
'$anak3', '$anak4', '$anak5', '$ktp', '$bpjskesehatan', '$bpjsketenagakerjaan', '$norekening', '$npwp', '$gambar')";
mysqli_query($conn, $query) ;
return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
                return false;
    }

    // cek apakah yang di upload adalah gambar
    $ekstensigambarValid = ['jpg','jpeg','png'];
    $ekstensigambar = explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if( !in_array($ekstensigambar, $ekstensigambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
                </script>";
                return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
                </script>"; 
                return false;
    }


    // lolos pengecekan gambar siap di upload
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensigambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
global $conn;
$id = $data["id"];
$nik = htmlspecialchars($data["nik"]);
$nama = htmlspecialchars($data["nama"]);
$jabatan = htmlspecialchars($data["jabatan"]);
$departement = htmlspecialchars($data["departement"]);
$tempat = htmlspecialchars($data["tempat"]);
$tanggallahir = htmlspecialchars($data["tanggallahir"]);
$usia = htmlspecialchars($data["usia"]);
$alamat = htmlspecialchars($data["alamat"]);
$gender = htmlspecialchars($data["gender"]);
$handphone = htmlspecialchars($data["handphone"]);
$golongan = htmlspecialchars($data["golongan"]);
$status = htmlspecialchars($data["status"]);
$agama = htmlspecialchars($data["agama"]);
$pendidikan = htmlspecialchars($data["pendidikan"]);
$penerimaan = htmlspecialchars($data["penerimaan"]);
$asal = htmlspecialchars($data["asal"]);
$ibu = htmlspecialchars($data["ibu"]);
$suamiistri = htmlspecialchars($data["suamiistri"]);
$anak1 = htmlspecialchars($data["anak1"]);
$anak2 = htmlspecialchars($data["anak2"]);
$anak3 = htmlspecialchars($data["anak3"]);
$anak4 = htmlspecialchars($data["anak4"]);
$anak5 = htmlspecialchars($data["anak5"]);
$ktp = htmlspecialchars($data["ktp"]);
$bpjskesehatan = htmlspecialchars($data["bpjskesehatan"]);
$bpjsketenagakerjaan = htmlspecialchars($data["bpjsketenagakerjaan"]);
$norekening = htmlspecialchars($data["norekening"]);
$npwp = htmlspecialchars($data["npwp"]);
$gambarLama = htmlspecialchars($data["gambarLama"]);

// cek apakah user pilih gambar baru atau tidak
if( $_FILES['gambar']['error'] === 4 ) {
    $gambar = $gambarLama;
} else {
    $gambar = upload();
}

// query insert data
$query = "UPDATE mahasiswa SET 
            nik = '$nik',
            nama = '$nama',
            jabatan = '$jabatan',
            departement = '$departement',
            tempat = '$tempat',
            tanggallahir = '$tanggallahir',
            usia = '$usia',
            alamat = '$alamat',
            gender = '$gender',
            handphone = '$handphone' ,
            golongan = '$golongan',
            status = '$status',
            agama = '$agama',
            pendidikan = '$pendidikan',
            penerimaan = '$penerimaan',
            asal = '$asal',
            ibu = '$ibu',
            suamiistri = '$suamiistri',
            anak1 = '$anak1',
            anak2 = '$anak2',
            anak3 = '$anak3',
            anak4 = '$anak4',
            anak5 = '$anak5',
            ktp = '$ktp',
            bpjskesehatan = '$bpjskesehatan',
            bpjsketenagakerjaan = '$bpjsketenagakerjaan',
            norekening = '$norekening',
            npwp = '$npwp',
            gambar = '$gambar'
            WHERE id = $id
            ";

mysqli_query($conn, $query) ;

return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
        WHERE
        nama LIKE '%$keyword%' OR
        nik LIKE '%$keyword%' OR
        jabatan LIKE '%$keyword%' OR
        departement LIKE '%$keyword%'
        ";
        return query($query);
}

// fungsi preview


// registrasi
function registrasi($data) {
    global $conn;
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    if (mysqli_fetch_assoc($result) ) {
        echo "<script>
        alert('username sudah terdaftar!')
        </script>";
        return false;
    }

    // cek konfirmasi password
    if ( $password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sama!');
                </>";
                return false;
    }

    // enkripsi password nya // jika di hapus maka kita sebagai admin bisa mengetahui password nya ataupun hacker
    $password = password_hash($password, PASSWORD_DEFAULT);

    // TAMBAHKAN USER KE DATABASE
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}
?>