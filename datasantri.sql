-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 08:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasantri`
--

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `nama` char(25) DEFAULT NULL,
  `alamat` varchar(1000) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `kesan` varchar(1000) DEFAULT NULL,
  `pesan` varchar(1000) DEFAULT NULL,
  `gambar` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nama`, `alamat`, `fb`, `email`, `nohp`, `jurusan`, `kesan`, `pesan`, `gambar`) VALUES
(1, 'nama kalian', 'alamat kalian', 'fb kalian', 'email kalian', '0812000', 'jurusan kalian', 'kesan kalian seelama diyti', 'pesan kalian ', '5c90a069badcc.jpg'),
(3, 'faraq', 'egrgrgr', 'fb', 'ggrgrg', '2344', 'komputer', 'fgsdfgsd', 'sdfgsdgf', '5c91c4460eaa1.png'),
(4, 'jjjj', 'nnnnn', 'fb', 'nnnnn', 'nnn', 'komputer', 'jjjj', 'jjjj', '5c9272ae0eb00.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
