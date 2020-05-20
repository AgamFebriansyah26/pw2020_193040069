-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 12:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040069`
--

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_alat_musik` varchar(25) NOT NULL,
  `asal` varchar(25) NOT NULL,
  `tahun_ditemukan` varchar(4) NOT NULL,
  `cara_dimainkan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id`, `gambar`, `nama_alat_musik`, `asal`, `tahun_ditemukan`, `cara_dimainkan`) VALUES
(1, 'biola.jpg', 'Biola', 'India', '1725', 'Di Gesek'),
(2, 'drum.jpg', 'Drum', 'Peru', '1909', 'Di Pukul'),
(3, 'gitar.jpg', 'Gitar', 'Persia', '1500', 'Di Petik'),
(4, 'harmonika.jpg', 'Harmonika', 'China', '1821', 'Di Tiup'),
(5, 'seruling.jpg', 'Seruling', 'Jawa Barat', '900', 'Di Tiup'),
(6, 'trompet.jpg', 'Trompet', 'Barat Kuno', '900', 'Di Tiup'),
(7, 'piano.jpg', 'Piano', 'Italia', '1720', 'Di Tekan'),
(8, 'angklung.jpg', 'Angklung', 'Jawa Barat', '1200', 'Di Getarka'),
(9, 'saksofon.jpg', 'Saksofon', 'Belgia', '1840', 'Di Tiup'),
(10, 'gamelan.jpg', 'Gamelan', 'Jawa Tengah', '230', 'Di Pukul');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rerere', '$2y$10$Phgz.WVoHt2ZLeM8LOKTR.aDA85pAygbu3oC1LS3aj.beZfV9WJ0.'),
(2, 'rqrqrq', '$2y$10$gPzRelnqWc13tx7rEo4Xm./niWyw.CeBtQz7yHZDSilGz/mnT13jK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
