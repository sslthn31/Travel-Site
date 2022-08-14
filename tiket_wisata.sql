-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 08:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ragunan`
--

CREATE TABLE `tb_ragunan` (
  `nama_lengkap` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ragunan`
--

INSERT INTO `tb_ragunan` (`nama_lengkap`, `no_identitas`, `no_hp`, `tgl_kunjungan`, `total`) VALUES
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3'),
('se', '2313', '31231', '2000-12-23', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
