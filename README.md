# databasekaryawanppi

Aplikasi CRUD Database Karyawan PPI

1. buat database terlebih dahulu di phpmyadmin gunakan xampp
2. buat database dengan nama phpdasar
3. buat table 2 table ( 1 table untuk mahasiswa/karyawan - 1 table untuk user login )
4. lebih gampang nya impor database saja yang dasar
5. ubah koneksi database di functions.php
   $conn = mysqli_connect("localhost","u461676920_luckypradani", "4T@;SUtUHpTd","u461676920_Karyawan");

   localhost = Nama host atau alamat IP dari server database. Biasanya, "localhost" digunakan untuk server yang berjalan pada mesin yang sama dengan aplikasi Anda.

   u461676920_luckypradani = Nama pengguna untuk koneksi ke database. Ini adalah username database Anda.
   4T@;SUtUHpTd = Kata sandi untuk pengguna tersebut. Pastikan bahwa kata sandi ini benar.

   u461676920_Karyawan = Nama database yang ingin Anda gunakan atau sambungkan.

6. jika menggunakan xampp { $conn = mysqli_connect("localhost","root", "","phpdasar"); }
