-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2020 pada 16.07
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi_decition45`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `idriwayat` int(11) NOT NULL,
  `age` varchar(3) DEFAULT NULL,
  `blood_pressure` varchar(3) DEFAULT NULL,
  `specific_gravity` varchar(4) DEFAULT NULL,
  `albumin` varchar(1) DEFAULT NULL,
  `sugar` varchar(1) DEFAULT NULL,
  `red_blood_cells` varchar(8) DEFAULT NULL,
  `pus_cell` varchar(8) DEFAULT NULL,
  `pus_cell_clumps` varchar(10) DEFAULT NULL,
  `bacteria` varchar(10) DEFAULT NULL,
  `blood_glucose_random` varchar(3) DEFAULT NULL,
  `blood_urea` varchar(3) DEFAULT NULL,
  `serum_creatinine` varchar(4) DEFAULT NULL,
  `sodium` varchar(3) DEFAULT NULL,
  `potassium` varchar(4) DEFAULT NULL,
  `hemoglobin` varchar(4) DEFAULT NULL,
  `packed_cell_volume` varchar(3) DEFAULT NULL,
  `white_blood_cell_count` varchar(5) DEFAULT NULL,
  `red_blood_cell_count` varchar(5) DEFAULT NULL,
  `hypertension` varchar(3) DEFAULT NULL,
  `diabetes_mellitus` varchar(3) DEFAULT NULL,
  `coronary_artery_disease` varchar(3) DEFAULT NULL,
  `appetite` varchar(4) DEFAULT NULL,
  `pedal_edema` varchar(3) DEFAULT NULL,
  `anemia` varchar(3) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`idriwayat`, `age`, `blood_pressure`, `specific_gravity`, `albumin`, `sugar`, `red_blood_cells`, `pus_cell`, `pus_cell_clumps`, `bacteria`, `blood_glucose_random`, `blood_urea`, `serum_creatinine`, `sodium`, `potassium`, `hemoglobin`, `packed_cell_volume`, `white_blood_cell_count`, `red_blood_cell_count`, `hypertension`, `diabetes_mellitus`, `coronary_artery_disease`, `appetite`, `pedal_edema`, `anemia`, `class`) VALUES
(1, '48', '80', '1020', '1', '0', 'normal', 'normal', 'notpresent', 'notpresent', '121', '36', '1.2', '138', '5', '13', '44', '7800', '5.2', 'yes', 'yes', 'no', 'good', 'no', 'no', 'achronic kidney disease');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`idriwayat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `idriwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
