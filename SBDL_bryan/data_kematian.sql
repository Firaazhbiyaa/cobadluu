-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2022 pada 05.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbdl_bryan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `bulan` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_kematian`
--

INSERT INTO `data_kematian` (`id`, `tahun`, `provinsi`, `bulan`, `jenis_kelamin`, `jumlah`) VALUES
(2, '2015', 'PROVINSI DKI JAKARTA', '01', 'Laki laki', '2342'),
(3, '2015', 'PROVINSI DKI JAKARTA', '02', 'Laki laki', '2355'),
(4, '2015', 'PROVINSI DKI JAKARTA', '03', 'Laki laki', '2447'),
(5, '2015', 'PROVINSI DKI JAKARTA', '04', 'Laki laki', '2253'),
(6, '2015', 'PROVINSI DKI JAKARTA', '05', 'Laki laki', '2448'),
(7, '2015', 'PROVINSI DKI JAKARTA', '06', 'Laki laki', '2235'),
(8, '2015', 'PROVINSI DKI JAKARTA', '07', 'Laki laki', '2328'),
(9, '2015', 'PROVINSI DKI JAKARTA', '08', 'Laki laki', '2244'),
(10, '2015', 'PROVINSI DKI JAKARTA', '09', 'Laki laki', '2334'),
(11, '2015', 'PROVINSI DKI JAKARTA', '10', 'Laki laki', '2565'),
(12, '2015', 'PROVINSI DKI JAKARTA', '11', 'Laki laki', '2417'),
(13, '2015', 'PROVINSI DKI JAKARTA', '12', 'Laki laki', '1867'),
(14, '2015', 'PROVINSI DKI JAKARTA', '01', 'Perempuan', '1833'),
(15, '2015', 'PROVINSI DKI JAKARTA', '02', 'Perempuan', '1827'),
(16, '2015', 'PROVINSI DKI JAKARTA', '03', 'Perempuan', '1940'),
(17, '2015', 'PROVINSI DKI JAKARTA', '04', 'Perempuan', '1767'),
(18, '2015', 'PROVINSI DKI JAKARTA', '05', 'Perempuan', '1890'),
(19, '2015', 'PROVINSI DKI JAKARTA', '06', 'Perempuan', '1802'),
(20, '2015', 'PROVINSI DKI JAKARTA', '07', 'Perempuan', '1812'),
(21, '2015', 'PROVINSI DKI JAKARTA', '08', 'Perempuan', '1754'),
(22, '2015', 'PROVINSI DKI JAKARTA', '09', 'Perempuan', '1771'),
(23, '2015', 'PROVINSI DKI JAKARTA', '10', 'Perempuan', '2029'),
(24, '2015', 'PROVINSI DKI JAKARTA', '11', 'Perempuan', '1956'),
(25, '2015', 'PROVINSI DKI JAKARTA', '12', 'Perempuan', '1494');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
