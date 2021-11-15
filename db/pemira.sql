-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 02:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemira`
--

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `summer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id`, `gambar`, `summer`) VALUES
(1, 'story bg.jpg', '<p>Visi</p><ol><li>misi</li><li>visi</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat_bem`
--

CREATE TABLE `kandidat_bem` (
  `id` int(11) NOT NULL,
  `nim_ketua` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `prodi_ketua` varchar(100) NOT NULL,
  `fakultas_ketua` varchar(100) NOT NULL,
  `nim_wakil` int(11) NOT NULL,
  `nama_wakil` varchar(255) NOT NULL,
  `prodi_wakil` varchar(100) NOT NULL,
  `fakultas_wakil` varchar(100) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `nourut` int(11) NOT NULL,
  `ormawa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat_bem`
--

INSERT INTO `kandidat_bem` (`id`, `nim_ketua`, `nama_ketua`, `prodi_ketua`, `fakultas_ketua`, `nim_wakil`, `nama_wakil`, `prodi_wakil`, `fakultas_wakil`, `visi`, `misi`, `nourut`, `ormawa`) VALUES
(1, 201851111, 'Nopal', 'Sastra Komputer', 'Teknik', 201856767, 'Bayu PS', 'Teknik Informatika', 'Teknik', 'ini adalah visi', 'ini adalah misi', 1, 'BEMU'),
(2, 201851262, 'Jono', 'EKonomi', 'fakultas', 21, 'Joni', 'as', 'asa', 'sa', 'sa', 1, 'BEMFT'),
(3, 201851262, 'kandidat BEMF', 'FKIP', 'fakultas', 21, 'Joni', 'as', 'asa', 'sa', 'sa', 1, 'BEMFT'),
(4, 201851262, 'kandidat DPMF', 'FH', 'fakultas', 21, 'Joni', 'as', 'asa', 'sa', 'sa', 1, 'BEMU'),
(5, 201851111, 'Nopal', 'Sastra Komputer', 'Teknik', 201856767, 'Bayu PS', 'Teknik Informatika', 'Teknik', 'ini adalah visi', 'ini adalah misi', 2, 'BEMU');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat_dpm`
--

CREATE TABLE `kandidat_dpm` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `nourut` int(11) NOT NULL,
  `ormawa` varchar(10) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandidat_dpm`
--

INSERT INTO `kandidat_dpm` (`id`, `nim`, `nama`, `prodi`, `fakultas`, `nourut`, `ormawa`, `visi`, `misi`) VALUES
(1, 2019111, 'Bayu Putra Siregar', 'Ternak Lele', 'Peternakan', 1, 'DPMU', 'ini adalah Visi', 'ini adalah misi'),
(2, 201921111, 'Nopal ', 'Akuntansi ', 'Ekonomi dan Bisnis', 2, 'DPMU', 'ini adalah visi calon 2', 'ini adalah misi calon 2'),
(3, 201921111, 'Calon 1', 'Akuntansi ', 'Ekonomi dan Bisnis', 1, 'DPMFT', 'ini adalah visi calon 1', 'ini adalah misi calon 1'),
(4, 201921111, 'Calon 2', 'Akuntansi ', 'Ekonomi dan Bisnis', 2, 'DPMFT', 'ini adalah visi calon 1', 'ini adalah misi calon 1'),
(5, 201921111, 'Calon 1', 'Akuntansi ', 'Ekonomi dan Bisnis', 1, 'DPMFEB', 'ini adalah visi calon 1', 'ini adalah misi calon 1'),
(6, 201921111, 'Calon 2', 'Akuntansi ', 'Ekonomi dan Bisnis', 2, 'DPMFEB', 'ini adalah visi calon 2', 'ini adalah misi calon 2'),
(7, 201921111, 'Calon 1', 'Akuntansi ', 'Ekonomi dan Bisnis', 1, 'DPMFKIP', 'ini adalah visi calon 1', 'ini adalah misi calon 1'),
(8, 201921111, 'Calon 2', 'Akuntansi ', 'Ekonomi dan Bisnis', 2, 'DPMFKIP', 'ini adalah visi calon 2', 'ini adalah misi calon 2');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bemu` int(11) NOT NULL,
  `bemf` int(11) NOT NULL,
  `dpmu` int(11) NOT NULL,
  `dpmf` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id`, `nim`, `nama`, `fakultas`, `password`, `bemu`, `bemf`, `dpmu`, `dpmf`, `status`) VALUES
(1, 201851263, 'Naufal Rizqi Arrafi', 'Teknik', 'abc', 0, 0, 1, 0, 0),
(2, 201851262, 'Naufal Rizqi Arrafi', 'Teknik', '$2a$12$UM8yV/CsmynJZhpHzijO9.OKMCe3sTWqItI5Xyqwtxpd9wwbrvoAa', 1, 1, 1, 1, 1),
(4, 2019172, 'a', 'a', '$2y$10$uYpgG/s8t8zxsuGBrddfauy5D5YgZGPL829onrlnaJVvKZsgDBDJu', 0, 0, 0, 0, 0),
(5, 201928121, 'a', 'a', '$2y$10$0cNo.lbBuKQYE9BmoGST7eE21ht72vZtVjoNY.b/r9GZ1/p8GL7DK', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `id_paslon` int(11) NOT NULL,
  `ormawa` varchar(10) NOT NULL,
  `jam_pilih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id`, `id_pemilih`, `id_paslon`, `ormawa`, `jam_pilih`) VALUES
(1, 1, 1, 'DPMU', '2021-11-13 14:39:51'),
(3, 1, 2, '', '2021-11-15 09:49:23'),
(4, 1, 1, '', '2021-11-15 09:50:03'),
(5, 1, 2, '', '2021-11-15 09:50:36'),
(6, 1, 1, '', '2021-11-15 10:01:31'),
(7, 1, 1, '', '2021-11-15 10:01:49'),
(8, 1, 1, 'DPMU', '2021-11-15 10:02:28'),
(9, 1, 1, 'DPMU', '2021-11-15 10:03:17'),
(10, 1, 1, 'DPMU', '2021-11-15 10:03:34'),
(11, 2, 1, 'DPMU', '2021-11-15 10:09:57'),
(12, 2, 3, 'DPMF', '2021-11-15 10:10:34'),
(13, 2, 3, 'DPMF', '2021-11-15 10:10:47'),
(14, 2, 3, 'DPMF', '2021-11-15 10:11:03'),
(15, 2, 4, 'DPMF', '2021-11-15 10:15:54'),
(16, 2, 4, 'BEMU', '2021-11-15 10:15:57'),
(17, 2, 3, 'BEMF', '2021-11-15 10:16:00'),
(18, 2, 4, 'DPMF', '2021-11-15 10:18:49'),
(19, 2, 1, 'DPMU', '2021-11-15 10:19:31'),
(20, 2, 2, 'BEMF', '2021-11-15 10:19:35'),
(21, 2, 1, 'DPMU', '2021-11-15 10:21:01'),
(22, 2, 3, 'BEMF', '2021-11-15 10:21:09'),
(23, 2, 2, 'BEMF', '2021-11-15 10:24:12'),
(24, 2, 2, 'BEMF', '2021-11-15 10:24:53'),
(25, 2, 2, 'BEMF', '2021-11-15 10:26:06'),
(26, 2, 1, 'DPMU', '2021-11-15 10:36:29'),
(27, 2, 3, 'BEMF', '2021-11-15 10:36:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidat_bem`
--
ALTER TABLE `kandidat_bem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kandidat_dpm`
--
ALTER TABLE `kandidat_dpm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD UNIQUE KEY `nim_2` (`nim`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kandidat_bem`
--
ALTER TABLE `kandidat_bem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kandidat_dpm`
--
ALTER TABLE `kandidat_dpm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
