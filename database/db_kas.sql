-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 05:22 PM
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
-- Database: `db_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `email`, `foto`, `level`) VALUES
(1, 'admin', 'admin123', 'joko ardiyanto', 'c20010007@uby.ac.id', 'profil.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_note` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_note`, `tanggal`, `keterangan`, `pemasukan`, `jenis`, `pengeluaran`) VALUES
(1, '2022-01-10', 'kas masuk', 30000, 'pemasukan', 0),
(2, '2022-01-30', 'beli rafia', 0, 'pengeluaran', 35000),
(3, '2022-02-02', 'kas masuk', 20000, 'pemasukan', 0),
(4, '2022-03-10', 'kas masuk', 50000, 'pemasukan', 0),
(5, '2022-03-12', 'konsumsi acara bersih pagi', 0, 'pengeluaran', 60000),
(6, '2022-02-28', 'kas masuk', 30000, 'pemasukan', 0),
(7, '2022-03-25', 'kas masuk', 120000, 'pemasukan', 0),
(9, '2022-02-25', 'bbbeli spanduk', 0, 'pengeluaran', 45000),
(10, '2022-03-16', 'foto copy', 0, 'pengeluaran', 4000),
(12, '2022-04-18', 'membeli buku ', 0, 'pengeluaran', 32000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_note`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
