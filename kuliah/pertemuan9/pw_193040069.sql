-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 02:09 PM
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
-- Database: `pw_193040069`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Agam Febriansyah', '193040069', '193040069@mail.unpas.ac.id', 'Teknik Informatika', 'agam.jpg'),
(2, 'Hannan Fahrul', '193040073', '193040073@mail.unpas.ac.id', 'Teknik Informatika', 'hanan.jpg'),
(3, 'Tresna Eka', '193040071', '193040071@mail.unpas.ac.id', 'Teknik Pangan', 'eka.jpg'),
(4, 'Aldi Ageng ', '193040054', '193040054@mail.unpas.ac.id', 'Teknik Industri', 'aldi.jpg'),
(5, 'Aji Nuansa Sengarie', '193040046', '193040046@mail.unpas.ac.id', 'Teknik Mesin', 'aji.jpg'),
(6, 'Dian Nuryana', '193040045', '193040045@mail.unpas.ac.id', 'Teknik Industri', 'dian.jpg'),
(7, 'Suhendani', '193040042', '193040042@mail.unpas.ac.id', 'Teknik Mesin', 'suhendani.jpg'),
(8, 'Herlan Nurahman', '193040043', '193040692@mail.unpas.ac.id', 'Teknik Informatika', 'herlan.jpg'),
(9, 'Rifki Gema', '193040062', '193040062@mail.unpas.ac.id', 'Teknik Pangan', 'rifki.jpg'),
(10, 'Bayu Cucan', '193040058', '193040058@mail.unpas.ac.id', 'Teknik Lingkungan', 'bayu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
