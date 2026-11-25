-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2026 at 02:37 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd_2622500005`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_2622500005`
--

CREATE TABLE `tbl_kontak_2622500005` (
  `nama` varchar(50) NOT NULL COMMENT 'Menyimpan nama lengkap, maksimal 50  karakter.',
  `email` varchar(255) NOT NULL COMMENT 'Menyimpan alamat email.',
  `semester` tinyint NOT NULL COMMENT 'Menyimpan nomor semester.',
  `tanggal` date NOT NULL COMMENT 'Menyimpan tanggal kunjungan.',
  `jenis_pesan` varchar(20) NOT NULL COMMENT 'Menyimpan jenis pesan, seperti pertanyaan atau saran',
  `minat` varchar(50) NOT NULL COMMENT 'Menyimpan satu atau beberapa pilihan minat sebagai teks.',
  `prodi` varchar(3) NOT NULL COMMENT 'Menyimpan kode program studi yaitu SI, TI, BD dan PTI',
  `pesan` varchar(300) NOT NULL COMMENT 'Menyimpan isi pesan, maksimal 300 karakter',
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kontak_2622500005`
--

INSERT INTO `tbl_kontak_2622500005` (`nama`, `email`, `semester`, `tanggal`, `jenis_pesan`, `minat`, `prodi`, `pesan`, `id`) VALUES
('michael', 'michael@gmail.com', 1, '2026-11-26', 'saran', 'HTML', 'SI', 'basis data hebat, basis data kuat', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kontak_2622500005`
--
ALTER TABLE `tbl_kontak_2622500005`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kontak_2622500005`
--
ALTER TABLE `tbl_kontak_2622500005`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
