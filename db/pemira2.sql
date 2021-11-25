-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2021 pada 08.55
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemira2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `kode_akses` varchar(6) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `kode_akses`, `password`, `role`) VALUES
(1, '123456', '$2y$10$OGiyOUPoojTQ.UTtZPW7juwECmXYSCIORjHcGXgkWrdehQvDkYv5W', 1),
(2, '234567', '$2y$10$Rd3HpuqrbqKG3TbTc9VCQOZ/xjnVEHoG.oKBBgzngabFAFcHIVVq.\r\n', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `summer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coba`
--

INSERT INTO `coba` (`id`, `gambar`, `summer`) VALUES
(1, 'story bg.jpg', '<p>Visi</p><ol><li>misi</li><li>visi</li></ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat_bem`
--

CREATE TABLE `kandidat_bem` (
  `id` int(11) NOT NULL,
  `nim_ketua` int(11) NOT NULL,
  `nama_ketua` varchar(255) NOT NULL,
  `prodi_ketua` varchar(100) NOT NULL,
  `fakultas_ketua` varchar(100) NOT NULL,
  `foto_ketua` varchar(255) NOT NULL,
  `nim_wakil` int(11) NOT NULL,
  `nama_wakil` varchar(255) NOT NULL,
  `prodi_wakil` varchar(100) NOT NULL,
  `fakultas_wakil` varchar(100) NOT NULL,
  `foto_wakil` varchar(255) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `nourut` int(11) NOT NULL,
  `ormawa` varchar(100) NOT NULL,
  `foto_paslon` varchar(255) NOT NULL,
  `total_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kandidat_bem`
--

INSERT INTO `kandidat_bem` (`id`, `nim_ketua`, `nama_ketua`, `prodi_ketua`, `fakultas_ketua`, `foto_ketua`, `nim_wakil`, `nama_wakil`, `prodi_wakil`, `fakultas_wakil`, `foto_wakil`, `visi`, `misi`, `nourut`, `ormawa`, `foto_paslon`, `total_suara`) VALUES
(20, 201812345, 'Nopal', 'TI', 'Teknik', '1.jpg', 201954321, 'Yupsbee', 'TE', 'Teknik', '1.jpg', 'apik', 'kudune jos', 1, 'BEMFT', 'Pasangan-1.jfif', 0),
(34, 12312214, 'Zorana', 'SI', 'Teknik', '12312214-zzzzzzz.jpg', 2147483647, 'Yorana', 'TM', 'Teknik', '2147483647-yyyyyyy.jpg', '<h3>Visi</h3><p>Menjadi lebih baik</p>', '<h3>Misi</h3><ul><li>Selalu bergerak</li><li>Selalu melangkah</li><li>Selalu berpikir</li></ul>', 3, 'BEMFT', 'Pasangan-3.jpg', 0),
(35, 984712998, 'Arnold', 'Akuntansi', 'Ekonomi dan Bisnis', '984712998-Arnold.jpg', 71926398, 'Juna', 'Manajemen', 'Ekonomi dan Bisnis', '71926398-Juna.jpg', '<p>Visi :</p><p>Terus Maju Bersama</p>', '<p>Misi :</p><ol><li>Maju</li><li>Bersama</li></ol>', 1, 'BEMFEB', 'Pasangan-1.jfif', 0),
(37, 823749, 'Aldira', 'BK', 'Keguruan dan Ilmu Pendidikan', '823749-Aldira.jpg', 214345436, 'Liamtono', 'PBSI', 'Keguruan dan Ilmu Pendidikan', '214345436-Liamtono.jpg', '', '', 1, 'BEMFKIP', 'Pasangan-1.jfif', 0),
(39, 82738873, 'Ferianto', 'Psikologi', 'Psikologi', '82738873-Ferianto.jpeg', 362938, 'Mikel', 'Psikologi', 'Psikologi', '362938-Mikel.jpeg', '', '', 1, 'BEMFPSI', 'Pasangan-1.jfif', 0),
(41, 83294823, 'Jarome', 'Agroteknologi', 'Pertanian', '83294823-Jarome.jpeg', 63498098, 'Polin', 'Agroteknologi', 'Pertanian', '63498098-Polin.jpg', '', '', 1, 'BEMFPT', 'Pasangan-1.jfif', 0),
(43, 984739, 'Simanjuntak', 'IH', 'Hukum', '984739-Simanjuntak.jpg', 354365, 'Haeloni', 'IH', 'Hukum', '354365-Haeloni.jpg', '', '', 2, 'BEMFH', 'Pasangan-2.jfif', 0),
(44, 1232123, 'Charlie', 'Manajemen', 'Ekonomi dan Bisnis', '1232123-Charlie.jpg', 342355352, 'Houtsen', 'Akuntansi', 'Ekonomi dan Bisnis', '342355352-Houtsen.jpg', '<p>Visi :</p><p>Menjadi Baik</p>', '<p>Misi :</p><ol><li>Ayo</li><li>Baik</li></ol>', 2, 'BEMFEB', 'Pasangan-2.jfif', 0),
(45, 12098755, 'Fernando', 'PEMAT', 'Keguruan dan Ilmu Pendidikan', '12098755-Fernando.jpg', 12435464, 'Torres', 'PBI', 'Keguruan dan Ilmu Pendidikan', '12435464-Torres.jpg', '<p>Visi :&nbsp;</p><p>Baik itu Baik</p>', '<div>Misi :</div><ol><li>Baik</li><li>Baik</li><li>Baik</li></ol>', 2, 'BEMFKIP', 'Pasangan-2.jfif', 0),
(46, 298028391, 'James', 'Manajemen', 'Ekonomi dan Bisnis', '298028391-James.jpg', 2147483647, 'Irving', 'PGSD', 'Keguruan dan Ilmu Pendidikan', '5464375735-Irving.jpg', '<p>Visi :</p><p>Kita Bisa Menghadi Tantangan</p>', '<p>Misi :</p><ol><li>Bersatu</li><li>Bertanggungjawa</li><li>Terus Maju</li></ol>', 1, 'BEMU', 'Pasangan-1.jfif', 0),
(47, 2109432, 'Kevin', 'Psikologi', 'Psikologi', '2109432-Kevin.jpg', 41313513, 'Marcus', 'Agroteknologi', 'Pertanian', '41313513-Marcus.jpeg', '', '', 2, 'BEMU', 'Pasangan-2.jfif', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat_dpm`
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
  `misi` longtext NOT NULL,
  `foto_dpm` varchar(255) NOT NULL,
  `total_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kandidat_dpm`
--

INSERT INTO `kandidat_dpm` (`id`, `nim`, `nama`, `prodi`, `fakultas`, `nourut`, `ormawa`, `visi`, `misi`, `foto_dpm`, `total_suara`) VALUES
(37, 201898765, 'Lewandowski', 'TM', 'Teknik', 1, 'DPMFT', 'mantapbos', 'ngwerine', '201898765-Lewandowski.jpg', 0),
(38, 201898766, 'Lionel', 'SI', 'Teknik', 2, 'DPMFT', 'mantapbos', 'ngwerine', '201898766-Lionel.jpg', 0),
(39, 201898767, 'Dybala', 'Akuntansi', 'Ekonomi dan Bisnis', 1, 'DPMFEB', 'mantapbos', 'ngwerine', '201898767-Dybala.jpg', 0),
(40, 201898768, 'Haverts', 'Manajemen', 'Ekonomi dan Bisnis', 2, 'DPMFEB', 'mantapbos', 'ngwerine', '201898768-Haverts.jpeg', 0),
(41, 201898769, 'Gareth', 'BK', 'Keguruan dan Ilmu Pendidikan', 1, 'DPMFKIP', 'mantapbos', 'ngwerine', '201898769-Gareth.jpg', 0),
(42, 201898770, 'Fabiano', 'PEMAT', 'Keguruan dan Ilmu Pendidikan', 2, 'DPMFKIP', 'mantapbos', 'ngwerine', '201898770-Fabiano.jpg', 0),
(43, 201898771, 'Aguero', 'IH', 'Hukum', 1, 'DPMFH', 'mantapbos', 'ngwerine', '201898771-Aguero.jpeg', 0),
(44, 201898772, 'Juan', 'IH', 'Hukum', 2, 'DPMFH', 'mantapbos', 'ngwerine', '201898772-Juan.jpg', 0),
(45, 201898773, 'Klyian', 'Psikologi', 'Psikologi', 1, 'DPMFPSI', 'mantapbos', 'ngwerine', '201898773-Klyian.jfif', 0),
(46, 201898774, 'Amster', 'Psikologi', 'Psikologi', 2, 'DPMFPSI', 'mantapbos', 'ngwerine', '201898774-Amster.jpeg', 0),
(47, 201898775, 'Fernandes', 'Agroteknologi', 'Pertanian', 1, 'DPMFPT', 'mantapbos', 'ngwerine', '201898775-Fernandes.jpg', 0),
(48, 201898776, 'Mo Salah', 'Agroteknologi', 'Pertanian', 2, 'DPMFPT', 'mantapbos', 'ngwerine', '201898776-erwgrhyju.jpg', 0),
(49, 201898777, 'Da Silva', 'Manajemen', 'Ekonomi dan Bisnis', 1, 'DPMU', 'mantapbos', 'ngwerine', '201898777-mghn.jpg', 0),
(50, 201898778, 'Cristiano', 'SI', 'Teknik', 2, 'DPMU', 'mantapbos', 'ngwerine', '201898778-gfbrr.jpg', 0),
(51, 2019707891, 'Karnoto', 'Psikologi', 'Psikologi', 3, 'DPMFPSI', '<p>mantap</p>', '<p>jiwa</p>', '2019707891-Karnoto.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bemu` int(11) NOT NULL,
  `bemf` int(11) NOT NULL,
  `dpmu` int(11) NOT NULL,
  `dpmf` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id`, `nim`, `nama`, `fakultas`, `prodi`, `password`, `bemu`, `bemf`, `dpmu`, `dpmf`, `status`) VALUES
(2, 201851262, 'Naufal Rizqi Arrafi', 'FT', '', '$2a$12$UM8yV/CsmynJZhpHzijO9.OKMCe3sTWqItI5Xyqwtxpd9wwbrvoAa', 1, 1, 1, 1, 1),
(5, 201928121, 'a', 'a', '', '$2y$10$0cNo.lbBuKQYE9BmoGST7eE21ht72vZtVjoNY.b/r9GZ1/p8GL7DK', 0, 0, 0, 0, 0),
(6, 2019512001, 'nopal', 'FT', '', '$2y$10$wMG2J3oFJVQH9aGs8mMoMe5owxVz.gYq2jzyVcxOJk6iU4r8Haz6W', 1, 1, 1, 1, 1),
(22, 2019512275, 'Nopal', 'FT', 'TI', '$2y$10$nao87rhG0QMJHXMa3xlp6uoW5X8Kw4zrM2wNfAlaAsLm2hQJ965N.', 1, 1, 1, 1, 1),
(24, 2019512277, 'Miceng', 'FKIP', 'PBI', '$2y$10$LCIF7vx5E4iCdfr0oUIRweDhZe1jhMKT9OqsMdiEEgma9T6SdHz9y', 1, 1, 1, 1, 1),
(25, 2019512278, 'Dontek', 'FPSI', 'Psi', '$2y$10$p2LIrZkwCRJCrVRn6Q7bnerb6XyaxusKxpoK1z0rpRLx7rSjqYK/2', 1, 1, 1, 1, 1),
(26, 2019512279, 'Aliyas', 'FPT', 'Psi', '$2y$10$eccJuDc/ZJsw5eytIsI6tOCB.nmV.9qsd7CI1nZtuQBNaKsqalPyq', 1, 1, 1, 1, 1),
(27, 2019512280, 'Pipit', 'FT', 'IH', '$2y$10$51A98C1TJR6fjdO7VE1XL.uEB.OJDYvtsVfZBzpRqh3msotKvnat2', 1, 1, 1, 1, 1),
(28, 2019000001, 'Ronaldo', 'FT', 'TI', '$2y$10$d7SyBIDVYqaR5XJWmppZ2OqP7oWYE6Wk61z85IUqyZJ9eFujWovYa', 1, 1, 1, 1, 1),
(29, 2019000002, 'Messi', 'FEB', 'Akt', '$2y$10$QJGNwaoSuAsaRDLBRKs4Bu0UMaIY9ppY4mAVRnFJCyDflk2j46k2O', 1, 1, 1, 1, 1),
(30, 2019000003, 'Neymar', 'FKIP', 'PBI', '$2y$10$o/f/pKOr/w8/JUefMEfdeudTWS5Hr2f0DxheOU/cJs0Gkn/rTbfJW', 1, 1, 1, 1, 1),
(31, 2019000004, 'Mbappe', 'FPSI', 'Psi', '$2y$10$RdoME7NeLlMM70ArsM9gs.wDs7lKwnOO61rmtLAFm3DOVAK7xywC.', 1, 1, 1, 1, 1),
(32, 2019000005, 'Arnold', 'FPT', 'Agro', '$2y$10$hujFQ/wkamuTH0y1Jh6hQuhL8RU2Zg892QL5I4HBteFhiUMYnofEy', 1, 1, 1, 1, 1),
(33, 2019000006, 'Alex', 'FH', 'IH', '$2y$10$3Q7Z6UtOVhEzGQt8OTd1AOtcP8mcFbU.UHHCn6e7djsnx4hH0Pjc6', 1, 1, 1, 1, 1),
(34, 2019000007, 'Lona', 'FT', 'TE', '$2y$10$8b81AvU7DrN0ovXgrlQhWuyPjzp0jmAmCWs98EP2wTsyf9Z23TCYe', 1, 1, 1, 1, 1),
(35, 2019000008, 'Kirans', 'FEB', 'Mnj', '$2y$10$t1h6vOz4B/A459b11WWRiuN5rY.K68vxIJvUcI4qOPeEwUDjdTBPW', 1, 1, 1, 1, 1),
(36, 2019000009, 'Andre', 'FKIP', 'PGSD', '$2y$10$4Zo8IVlYp2d4ENLqEPiyluJAWe4MJGeGSVz0K9sJjxNqRLbin0dB.', 1, 1, 1, 1, 1),
(37, 2019000010, 'Antonio', 'FPSI', 'Psi', '$2y$10$tAIyWyTI5J3F6E9m1GZnXeJ/Ef8AxO2cLBjTnff0Y4V1it3.99r26', 1, 1, 1, 1, 1),
(38, 2019000011, 'Jackma', 'FPT', 'Agro', '$2y$10$YmYTOfoqjUqf0bai906g/ON79A.ieHYIAApwuLOTsKswgMqbfZqqm', 1, 1, 1, 1, 1),
(39, 2019000012, 'Steven', 'FH', 'IH', '$2y$10$ZRsgX8xNCsw7INdhTFShDOMBqQWDzQ6xsgIG72T8Qcv5RgGNt.R0m', 1, 1, 1, 1, 1),
(40, 2019000013, 'Bale', 'FT', 'TM', '$2y$10$AE5oSUYxFH8WUJohEuv5Xu4JiZ1JVn2GEwUcOCiEiEfuaRr.RiHQC', 1, 1, 1, 1, 1),
(41, 2019000014, 'James', 'FEB', 'Akkt', '$2y$10$w/SgefUn6cUFb7Nnr07Lo.CcWcj3Y.ELR9t36dl3udsaQMLNEg3Um', 1, 1, 1, 1, 1),
(42, 2019000015, 'Leborn', 'FKIP', 'PBSI', '$2y$10$nzanTl3bhdAMrU2wd1p6CuCe7EpQ89zze0LmvVEM.CzEn912DZK7q', 1, 1, 1, 1, 1),
(43, 2019000016, 'Curry', 'FPSI', 'Psi', '$2y$10$a65.RiGXpSWmIR6BhnWsTOLbDWJQSuAifxIYxDLIduatJMNHGwz7a', 1, 1, 1, 1, 1),
(44, 2019000017, 'Irving', 'FPT', 'Agro', '$2y$10$1Nj.4HMQKT6csHysA34REekZK3xyJjKyQDxYw1AeAylchX2I8PStm', 0, 0, 0, 0, 0),
(45, 2019000018, 'Davis', 'FH', 'IH', '$2y$10$y8SrhHIEshHUcmIygwimau6OXPJeRb0wO5/pCAig69/uEKBKlbGNO', 0, 0, 0, 0, 0),
(46, 2019000019, 'Durant', 'FT', 'SI', '$2y$10$rAhDXuBk9ZZg5niIJpuwse2qgqLhocK4LlflGI7Ui1wgThZr/Spnq', 0, 0, 0, 0, 0),
(47, 2019000020, 'Green', 'FEB', 'Mnj', '$2y$10$pbGWOfSttyInHbQtoUFvf.k/.LmWga3r2.Dx.BUSpHgEyqIkJYmDS', 0, 0, 0, 0, 0),
(48, 2019000021, 'Daymon', 'FKIP', 'Pemat', '$2y$10$otcTNp0ubYhmJA88EKXLiusrkVMicmhcqZULUzkbMQhXDHWW7cviO', 0, 0, 0, 0, 0),
(49, 2019000022, 'Abdul', 'FPSI', 'Psi', '$2y$10$qMf07LvaRLxpScEtl5KxIeqg275SKM/0N/Joga.xFg.c7cAxzyVlO', 0, 0, 0, 0, 0),
(50, 2019000023, 'Jhonson', 'FPT', 'Agro', '$2y$10$JbMqcF6SypW1UqVPK0f7J.B60s2oBpqfOeOfhJC2WXBFjon4y8a5G', 0, 0, 0, 0, 0),
(51, 2019000024, 'George', 'FH', 'IH', '$2y$10$GFAxJdXRTLLZPcYRUotbXe67nu0k6b40bzvrYqWTAbzyrvNF925Mm', 0, 0, 0, 0, 0),
(52, 2019000025, 'Rossi', 'FT', 'Tind', '$2y$10$naftj/D1JM5yP1iNP.ENsOZwTCBZBnInN28b/rCiiPhXSdGdRvyni', 0, 0, 0, 0, 0),
(53, 2019000026, 'Fabio', 'FEB', 'Akt', '$2y$10$RkMv3BwAh0EsbwTXttlD2umbEy1KxclBw6/6VKXnBWbhw55VfTKie', 0, 0, 0, 0, 0),
(54, 2019000027, 'Marq', 'FKIP', 'PBK', '$2y$10$9VGxrhvMiujXzhDfmE0tiOzfJlXCkKQpkD5tOY7tBYiAVrKJnvBYS', 0, 0, 0, 0, 0),
(55, 2019000028, 'Botas', 'FPSI', 'Psi', '$2y$10$sTV60FjtmIEdoRaNP0DjAOE49Wzpf2QyRzi2SjLAZ8.UKKywkQFVW', 0, 0, 0, 0, 0),
(56, 2019000029, 'Lewis', 'FPT', 'Agro', '$2y$10$NjbMh8GiRTBqRGwH9w4.2O9vlBgKXe2bsY9FUaOJW9PiO5zANbSMq', 0, 0, 0, 0, 0),
(57, 2019000030, 'Leonard', 'FH', 'IH', '$2y$10$sTv8q.FYNDTNzeYjtnSts.pf8lIefL2zh1bEKqM2VgBqzzpEWyrHS', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `id_pemilih` int(11) NOT NULL,
  `id_paslon` int(11) NOT NULL,
  `ormawa` varchar(10) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jam_pilih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vote`
--

INSERT INTO `vote` (`id`, `id_pemilih`, `id_paslon`, `ormawa`, `fakultas`, `jam_pilih`) VALUES
(114, 35, 50, 'DPMU', 'FEB', '2021-11-22 16:04:48'),
(115, 35, 40, 'DPMFEB', 'FEB', '2021-11-22 16:04:51'),
(116, 35, 47, 'BEMU', 'FEB', '2021-11-22 16:04:54'),
(117, 35, 44, 'BEMFEB', 'FEB', '2021-11-22 16:04:59'),
(118, 36, 50, 'DPMU', 'FKIP', '2021-11-23 12:16:44'),
(119, 36, 41, 'DPMFKIP', 'FKIP', '2021-11-23 12:16:52'),
(120, 36, 47, 'BEMU', 'FKIP', '2021-11-23 12:17:00'),
(121, 36, 45, 'BEMFKIP', 'FKIP', '2021-11-23 12:17:08'),
(122, 37, 50, 'DPMU', 'FPSI', '2021-11-25 11:20:43'),
(123, 37, 46, 'DPMFPSI', 'FPSI', '2021-11-25 11:33:20'),
(124, 37, 47, 'BEMU', 'FPSI', '2021-11-25 11:33:24'),
(125, 37, 39, 'BEMFPSI', 'FPSI', '2021-11-25 11:33:27'),
(126, 39, 50, 'DPMU', 'FH', '2021-11-25 12:07:31'),
(127, 39, 44, 'DPMFH', 'FH', '2021-11-25 12:07:35'),
(128, 39, 47, 'BEMU', 'FH', '2021-11-25 12:07:39'),
(129, 39, 43, 'BEMFH', 'FH', '2021-11-25 12:07:43'),
(130, 38, 49, 'DPMU', 'FPT', '2021-11-25 12:12:23'),
(131, 38, 48, 'DPMFPT', 'FPT', '2021-11-25 12:12:30'),
(132, 38, 47, 'BEMU', 'FPT', '2021-11-25 12:12:38'),
(133, 38, 41, 'BEMFPT', 'FPT', '2021-11-25 12:12:43'),
(134, 40, 50, 'DPMU', 'FT', '2021-11-25 13:54:47'),
(135, 40, 38, 'DPMFT', 'FT', '2021-11-25 13:54:56'),
(136, 40, 47, 'BEMU', 'FT', '2021-11-25 13:54:59'),
(137, 40, 34, 'BEMFT', 'FT', '2021-11-25 13:55:02'),
(138, 41, 50, 'DPMU', 'FEB', '2021-11-25 13:59:15'),
(139, 41, 40, 'DPMFEB', 'FEB', '2021-11-25 14:02:12'),
(140, 41, 47, 'BEMU', 'FEB', '2021-11-25 14:04:05'),
(141, 41, 35, 'BEMFEB', 'FEB', '2021-11-25 14:10:57'),
(142, 42, 50, 'DPMU', 'FKIP', '2021-11-25 14:12:17'),
(143, 42, 41, 'DPMFKIP', 'FKIP', '2021-11-25 14:12:31'),
(144, 42, 46, 'BEMU', 'FKIP', '2021-11-25 14:12:54'),
(145, 42, 37, 'BEMFKIP', 'FKIP', '2021-11-25 14:13:03'),
(146, 43, 49, 'DPMU', 'FPSI', '2021-11-25 14:51:51'),
(147, 43, 51, 'DPMFPSI', 'FPSI', '2021-11-25 14:51:56'),
(148, 43, 46, 'BEMU', 'FPSI', '2021-11-25 14:51:59'),
(149, 43, 39, 'BEMFPSI', 'FPSI', '2021-11-25 14:52:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kandidat_bem`
--
ALTER TABLE `kandidat_bem`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kandidat_dpm`
--
ALTER TABLE `kandidat_dpm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD UNIQUE KEY `nim_2` (`nim`);

--
-- Indeks untuk tabel `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kandidat_bem`
--
ALTER TABLE `kandidat_bem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `kandidat_dpm`
--
ALTER TABLE `kandidat_dpm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
