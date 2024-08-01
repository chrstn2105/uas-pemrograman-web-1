-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 03:38 PM
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
-- Database: `ardo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_baru`
--

CREATE TABLE `mahasiswa_baru` (
  `nisn` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa_baru`
--

INSERT INTO `mahasiswa_baru` (`nisn`, `nama`, `asal_sekolah`, `alamat`, `no_hp`) VALUES
(1, '12213', 'christin', 'smkn 2 kupang' 'Liliba', '085333256271'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa_baru`
--
ALTER TABLE `mahasiswa_baru`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa_baru`
--
ALTER TABLE `mahasiswa_baru`
  MODIFY `nisn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=743647488;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
