-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 04:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rweb20`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `email`, `password`, `nama`) VALUES
(1, 'admin_satu@gmail.com', '123456', 'Admin satu nih'),
(2, 'admin_dua@gmail.com', '123456', 'admin dua nih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `niy` char(50) NOT NULL,
  `keahlian` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama`, `niy`, `keahlian`, `email`) VALUES
(1, 'Adhi Prahara, S.Si., M.Cs.', '060150841', 'Softcomputing and Multimedia', 'adhi.prahara@tif.uad.ac.id'),
(2, 'Supriyanto, S.T., M.T.', '60160952', 'Media Digital dan Game', 'supriyanto@tif.uad.ac.id'),
(3, 'Dinan Yulianto, S.T., M.Eng.', '601609524', 'Multimedia, Interaksi Manusia dan Komputer, dan IT in Education', 'dinan.yulianto@tif.uad.ac.id'),
(4, 'Fiftin Noviyanto, S.T., M. Cs', '198011152005011002', 'Web Programming, Multimedia', 'fiftin.noviyanto@tif.uad.ac.id'),
(5, 'Herman Yuliansyah, S.T., M. Eng', '60110648', 'Basis Data, Pemrograman Web, Jaringan Komputer', 'herman.yuliansyah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nim` char(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `semester`, `email`) VALUES
(1, 'Aslamadin Alvian Haz', '1600018001', 8, 'alvinsukamtis@gmail.com'),
(2, 'Muhammad N.W Lutfiantoro', '1600018002', 8, 'Lutfiantoro@gmail.com'),
(3, 'kholis ', '1600018003', 8, 'kholis @gmail.com'),
(4, 'gema antika hariadi', '1600018004', 8, 'gema@gmail.com'),
(5, 'Brian P.', '1600018005', 8, 'brian@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
