-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 04:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum_jatim`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(20) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Seni'),
(2, 'Prasejarah'),
(3, 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_koleksi`
--

CREATE TABLE `tb_koleksi` (
  `id_benda` int(7) NOT NULL,
  `id_museum` int(7) NOT NULL,
  `museum` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_kategori` int(7) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_koleksi`
--

INSERT INTO `tb_koleksi` (`id_benda`, `id_museum`, `museum`, `nama`, `id_kategori`, `kategori`, `deskripsi`, `tanggal_masuk`) VALUES
(1, 1, 'Museum Brawijaya', 'Foto – foto panglima Kodam', 3, 'Sejarah', 'Foto – foto panglima Kodam di Jawa Timur sejak 1945 hingga saat ini.', '2018-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kota`
--

INSERT INTO `tb_kota` (`id_kota`, `kode`, `kota`) VALUES
(1, '35.26', 'Bangkalan'),
(2, '35.10', 'Banyuwangi'),
(3, '35.22', 'Bojonegoro'),
(4, '35.11', 'Bondowoso'),
(5, '35.25', 'Gresik'),
(6, '35.09', 'Jember'),
(7, '35.17', 'Jombang'),
(8, '35.24', 'Lamongan'),
(9, '35.08', 'Lumajang'),
(10, '35.20', 'Magetan'),
(11, '35.79', 'Batu'),
(12, '35.72', 'Blitar'),
(13, '35.71', 'Kediri'),
(14, '35.77', 'Madiun'),
(15, '35.73', 'Malang'),
(16, '35.76', 'Mojokerto'),
(17, '35.75', 'Pasuruan'),
(18, '35.74', 'Probolinggo'),
(19, '35.78', 'Surabaya'),
(20, '35.18', 'Nganjuk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_museum`
--

CREATE TABLE `tb_museum` (
  `id_museum` int(7) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_museum`
--

INSERT INTO `tb_museum` (`id_museum`, `nama`, `id_kota`, `kota`, `alamat`, `telepon`) VALUES
(1, 'Museum Brawijaya', 0, 'Malang', 'Jl. Ijen No.25 A, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115', '(0341) 562394'),
(2, 'Museum Anjuk Ladang', 0, 'Nganjuk', 'Jalan Gatot Subroto Ringin Anom, Ringin Anom, Kauman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur 64411', ' (0358) 32179');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pameran`
--

CREATE TABLE `tb_pameran` (
  `id_pameran` int(7) NOT NULL,
  `nama_pameran` varchar(255) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_pameran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pameran`
--

INSERT INTO `tb_pameran` (`id_pameran`, `nama_pameran`, `id_kota`, `kota`, `alamat`, `tanggal_pameran`) VALUES
(1, 'Pameran Virtual Museum Brawijaya', 15, 'Malang', 'di gedung Widyaloka Universitas Brawijaya', '2019-11-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_koleksi`
--
ALTER TABLE `tb_koleksi`
  ADD PRIMARY KEY (`id_benda`);

--
-- Indexes for table `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tb_museum`
--
ALTER TABLE `tb_museum`
  ADD PRIMARY KEY (`id_museum`);

--
-- Indexes for table `tb_pameran`
--
ALTER TABLE `tb_pameran`
  ADD PRIMARY KEY (`id_pameran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_koleksi`
--
ALTER TABLE `tb_koleksi`
  MODIFY `id_benda` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_museum`
--
ALTER TABLE `tb_museum`
  MODIFY `id_museum` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pameran`
--
ALTER TABLE `tb_pameran`
  MODIFY `id_pameran` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
