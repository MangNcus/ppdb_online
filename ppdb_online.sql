-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 10:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_almt` int(11) NOT NULL,
  `negara` int(11) NOT NULL,
  `prov` int(11) NOT NULL,
  `kota` int(11) NOT NULL,
  `kec` int(11) NOT NULL,
  `kel` int(11) NOT NULL,
  `kp` int(11) NOT NULL,
  `jln` int(11) NOT NULL,
  `kd_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bio_ayah`
--

CREATE TABLE `bio_ayah` (
  `id_ayah` varchar(10) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tpt_lahir_ayah` varchar(30) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bio_cln_siswa`
--

CREATE TABLE `bio_cln_siswa` (
  `id` varchar(10) NOT NULL,
  `nama_cln_siswa` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tinggi_badan` varchar(4) NOT NULL,
  `berat_badan` varchar(4) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `cita-cita` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bio_cln_siswa`
--

INSERT INTO `bio_cln_siswa` (`id`, `nama_cln_siswa`, `nama_panggilan`, `jenis_kelamin`, `tpt_lahir`, `tgl_lahir`, `nik`, `tinggi_badan`, `berat_badan`, `gol_darah`, `cita-cita`) VALUES
('daftar-001', 'Agus Salim', 'Agus', 'Laki-laki', 'Serang', '2000-08-07', '3604180708000006', '173', '57', 'A', 'Fullstack Developer');

-- --------------------------------------------------------

--
-- Table structure for table `bio_ibu`
--

CREATE TABLE `bio_ibu` (
  `id_ibu` varchar(10) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tpt_lahir_ibu` varchar(30) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bio_wali`
--

CREATE TABLE `bio_wali` (
  `id_wali` int(10) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `tpt_lahir_wali` varchar(30) NOT NULL,
  `tgl_lahir_wali` date NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `pendidikan_wali` varchar(30) NOT NULL,
  `penghasilan_wali` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_almt`);

--
-- Indexes for table `bio_ayah`
--
ALTER TABLE `bio_ayah`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indexes for table `bio_cln_siswa`
--
ALTER TABLE `bio_cln_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `bio_ibu`
--
ALTER TABLE `bio_ibu`
  ADD PRIMARY KEY (`nama_ibu`);

--
-- Indexes for table `bio_wali`
--
ALTER TABLE `bio_wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bio_wali`
--
ALTER TABLE `bio_wali`
  MODIFY `id_wali` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
