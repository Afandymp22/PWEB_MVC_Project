-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 04:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_donasi`
--

CREATE TABLE `daftar_donasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `donasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_donasi`
--

INSERT INTO `daftar_donasi` (`id`, `nama`, `email`, `bank`, `donasi`) VALUES
(1, 'Anonim', 'anonim@email.com', 'Bank BRI', 100000),
(3, 'Anonim 2', 'anonim2@email.com', 'Bank BRI', 150000),
(4, 'Dayat', 'dayat2063@gmail.com', 'Bank BRI', 100000),
(5, 'Afandy Maulana Pangestu', 'afandymp07@gmail.com', 'Bank Jatim', 300000),
(6, 'Yoga', 'yusakha@gmail.com', 'Bank BRI', 150000),
(7, 'Dayat', 'dayat2063@gmail.com', 'Bank Mandiri', 50000),
(8, 'Yoga', 'yusakha@gmail.com', 'Bank BCA', 25000),
(9, 'Afandy Maulana Pangestu', 'afandymp07@gmail.com', 'Bank BNI', 20000),
(10, 'Yoga', 'yusakha@gmail.com', 'Bank BRI', 30000),
(11, 'John', 'john@gmail.com', 'Bank Jatim', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `pesan_user`
--

CREATE TABLE `pesan_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `pesan` varchar(535) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan_user`
--

INSERT INTO `pesan_user` (`id`, `fname`, `lname`, `email`, `tentang`, `pesan`) VALUES
(1, 'Dayat', 'Achmad', 'dayat2063@gmail.com', 'Donasi', 'tesssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
(2, 'Yoga', 'Firdaus', 'yushakha@gmail.com', 'API', 'Tambahin API dong gan. :3'),
(3, 'John', 'Sihombing', 'john@gmail.com', 'Tampilan', 'Sudah bagus, teruskan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_donasi`
--
ALTER TABLE `daftar_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_user`
--
ALTER TABLE `pesan_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_donasi`
--
ALTER TABLE `daftar_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesan_user`
--
ALTER TABLE `pesan_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
