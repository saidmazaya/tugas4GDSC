-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 01:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_mahasiswa`
--

CREATE TABLE `list_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nim` varchar(140) NOT NULL,
  `prodi` varchar(200) NOT NULL,
  `angkatan` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_mahasiswa`
--

INSERT INTO `list_mahasiswa` (`id`, `nama`, `nim`, `prodi`, `angkatan`, `email`, `alamat`) VALUES
(1, 'Said Muhammad Mazaya', '221402129', 'Teknologi Informasi', 2022, 'saidmuhammad572@gmail.com', 'Jl. Karya Wisata'),
(2, 'John Doe', '23AGID671H8', 'Teknik Nuklir', 2321, 'johndoe@gmail.com', 'Jl. Bumi No 1'),
(3, 'Michael Bruce', '21938H123JKL', 'Astronomi', 2100, 'michael2100@gmail.com', 'Jl. Ohio No 3, Bumi'),
(9, 'Caesar Vance', '20613821KL', 'Teknik Elektro', 193, 'caesar50@gmail.com', 'Rotterdam, Netherlands'),
(10, 'Fulbert Ramesha Sevyn', '4910386733', 'Teknik Informatika', 8720, 'fulrase@gmail.com', 'Port Talbot, United Kingdom'),
(11, 'Haimarīks Peregrinus Eldad', '8424147956', 'Astronomi', 2000, 'ha78@gmail.com', 'Olympus Mons, Mars'),
(12, 'Stefan Muireadhach Afolabi', '6024831564', 'Statistika', 3001, 'stfra@gmail.com', 'Iani Chaos, Mars');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_mahasiswa`
--
ALTER TABLE `list_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_mahasiswa`
--
ALTER TABLE `list_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
