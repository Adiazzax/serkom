-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 05.52
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
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_peserta`
--

CREATE TABLE `tabel_peserta` (
  `id_peserta` int(255) NOT NULL,
  `kd_skema` varchar(255) NOT NULL,
  `nm_peserta` varchar(255) NOT NULL,
  `jekel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `nik` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_peserta`
--

INSERT INTO `tabel_peserta` (`id_peserta`, `kd_skema`, `nm_peserta`, `jekel`, `alamat`, `no_hp`, `nik`) VALUES
(1, 'SKM-001', 'Romeo', 'Laki-Laki', 'Banjarsari', '0854564564565', ''),
(2, 'SKM-002', 'Lucian', 'Laki-Laki', 'Banjaranyar', '085456789090', ''),
(3, 'SKM-003', 'Boruto', 'Laki-Laki', 'Mangunjaya', '085746567890', ''),
(4, 'SKM-004', 'Hinata', 'Perempuan', 'Konoha', '085555556787', ''),
(5, 'SKM-002', 'Ichigo', 'Laki-Laki', 'Majenang', '085321456789', ''),
(6, 'SKM-003', 'Juki', 'Laki-Laki', 'Ambon', '085678678678', ''),
(7, 'SKM-004', 'Beni', 'Laki-Laki', 'Banjarsari', '0851545467865', '3207394792739474');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_skema`
--

CREATE TABLE `tabel_skema` (
  `id_skema` int(255) NOT NULL,
  `kd_skema` varchar(255) NOT NULL,
  `nm_skema` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `jml_unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_skema`
--

INSERT INTO `tabel_skema` (`id_skema`, `kd_skema`, `nm_skema`, `jenis`, `jml_unit`) VALUES
(1, 'SKM-001', 'Junior Web Programmer', 'KKNI', '6'),
(2, 'SKM-002', 'Digital Marketing', 'Klaster', '10'),
(3, 'SKM-003', 'Desainer Multimedia Muda', 'KKNI', '10'),
(4, 'SKM-004', 'Network Administrator Muda', 'KKNi', '5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_peserta`
--
ALTER TABLE `tabel_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `tabel_skema`
--
ALTER TABLE `tabel_skema`
  ADD PRIMARY KEY (`id_skema`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_peserta`
--
ALTER TABLE `tabel_peserta`
  MODIFY `id_peserta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_skema`
--
ALTER TABLE `tabel_skema`
  MODIFY `id_skema` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
