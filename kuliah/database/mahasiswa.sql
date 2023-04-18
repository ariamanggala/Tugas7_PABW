-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 02:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas7_pabw`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` int(5) NOT NULL,
  `foto_mhs` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mhs`, `jurusan`, `semester`, `foto_mhs`, `email`) VALUES
(1, 'A22100001', 'Agus', 'Teknik Informatika', 4, 'foto (1).jpg', 'agus@gmail.com'),
(2, 'A22100001', 'Eneng', 'Teknik Informatika', 4, 'foto (2).jpg', 'eneng@gmail.com'),
(3, 'A22100004', 'budi', 'Teknik Informatika', 4, 'foto (5).jpg', 'budi@gmail.com'),
(4, 'A22100022', 'Aria', 'Teknik Informatika', 4, 'foto (4).jpg', 'manggalaaria2505@gmail.com'),
(5, 'a2.2100022', 'Aria', 'Teknik Informatika', 4, 'foto (4).jpg', 'manggalaaria2505@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
