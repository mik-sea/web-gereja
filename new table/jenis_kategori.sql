-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 01:01 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kategori`
--

CREATE TABLE `jenis_kategori` (
  `id_jenis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `slug_jenis` text NOT NULL,
  `jenis_kategori` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kategori`
--

INSERT INTO `jenis_kategori` (`id_jenis`, `id_kategori`, `slug_jenis`, `jenis_kategori`, `tanggal`) VALUES
(3, 1, 'iya', 'iya', '2021-10-28 17:59:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kategori`
--
ALTER TABLE `jenis_kategori`
  ADD PRIMARY KEY (`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kategori`
--
ALTER TABLE `jenis_kategori`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
