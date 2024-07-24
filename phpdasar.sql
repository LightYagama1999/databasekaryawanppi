-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2024 pada 08.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nik` char(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `departement` varchar(200) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `tanggallahir` date DEFAULT NULL,
  `usia` char(9) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `gender` char(9) NOT NULL,
  `handphone` varchar(250) NOT NULL,
  `golongan` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `agama` char(9) NOT NULL,
  `pendidikan` varchar(250) NOT NULL,
  `penerimaan` varchar(250) NOT NULL,
  `asal` varchar(250) NOT NULL,
  `ibu` varchar(250) NOT NULL,
  `suamiistri` varchar(250) NOT NULL,
  `anak1` varchar(250) NOT NULL,
  `anak2` varchar(250) NOT NULL,
  `anak3` varchar(250) NOT NULL,
  `anak4` varchar(250) NOT NULL,
  `anak5` varchar(250) NOT NULL,
  `ktp` varchar(250) NOT NULL,
  `bpjskesehatan` varchar(250) NOT NULL,
  `bpjsketenagakerjaan` varchar(250) NOT NULL,
  `npwp` varchar(250) NOT NULL,
  `norekening` varchar(250) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nik`, `nama`, `jabatan`, `departement`, `tempat`, `tanggallahir`, `usia`, `alamat`, `gender`, `handphone`, `golongan`, `status`, `agama`, `pendidikan`, `penerimaan`, `asal`, `ibu`, `suamiistri`, `anak1`, `anak2`, `anak3`, `anak4`, `anak5`, `ktp`, `bpjskesehatan`, `bpjsketenagakerjaan`, `npwp`, `norekening`, `gambar`) VALUES
(1, '309912347', 'Oli', 'pradanirokuzen@gmail.com', 'teknik informatika', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a0822adbc0.jpg'),
(2, '309912347', 'Yoyon Suprihaji Dokter', 'it@pt-ppi.com', 'teknik kesehatan', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '668ddb941c776.png'),
(3, '30991234', 'Lucky', 'it@eramart.co.id', 'Olahraga', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a084b0816d.jpg'),
(4, '309912347', 'Lucky Ananda Pradani', 'kamsianajung@gmail.com', 'Kecantikan', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a08ccb4ba7.jpg'),
(5, '309912347', 'Adit', '085753371549', 'teknik mesin', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a08da5e2f0.jpg'),
(6, '309912347', 'panjul', 'it@pt-ppi.com', 'teknik mbe', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a08bd466e1.jpg'),
(7, '309912347', 'belajar', 'belajar@gmail.com', 'teknik informatika', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a0902567fa.jpg'),
(8, '309912347', 'selet', 'hitam@gmail.com', 'pdf', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a09218caa3.jpg'),
(9, '309912347', 'tebar', 'tebarpesona@gmail.com', 'hmm', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a09669aea0.jpeg'),
(10, '309912345', 'mangsa', 'buaya@gmail.com', 'teknik komunikasi', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '667a098628b63.jpg'),
(11, '309912344', 'jelanta', 'pelerkambing.com', 'teknik komputer', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '668cfa07a23e9.png'),
(12, '647103031', 'Lucky Ananda Pradani', 'IT', 'WME', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '668dd86b427fb.jpeg'),
(21, '647103031', 'Lucky Ananda Pradani', 'IT', 'WME', 'Berau', '2024-07-11', '24', 'SAMARINDA', 'laki-laki', '082195642845', 'O-', 'menikah', 'Islam', 'DII Teknik Informatika', 'Site Muara Kembang', 'samarinda', 'nurhasanah', 'Kamsiana', 'Lucy', 'Pradani', 'Messi', 'Mbappe', 'Gibran', '647213123124124123', '12312312321', '123123123123', '123123123123', '129031892734896712', '668f31b20ca8a.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'lucky', '$2y$10$c76.rYYnwDQG9ADcAHmCeeJ4YEwHHEycze/Ww6i5iSA6ClitiGvOG'),
(2, 'admin', '$2y$10$rQ.b9HEPkHgFHZkz6t28I.duYemFf1AHO7y3Nw8ROsgArPtRNMsV6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
