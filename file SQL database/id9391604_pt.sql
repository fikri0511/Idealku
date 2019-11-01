-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2019 at 03:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9391604_pt`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `berat` int(11) NOT NULL,
  `aktifitas` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`berat`, `aktifitas`, `tinggi`, `username`, `id_laporan`) VALUES
(90, 4, 175, 'fikri', 53),
(75, 1, 175, 'fikri', 56),
(82, 3, 183, 'titanhz', 58),
(89, 3, 183, 'titanhz', 59),
(93, 3, 183, 'titanhz', 60),
(81, 3, 183, 'titanhz', 61),
(79, 3, 183, 'titanhz', 62),
(75, 3, 183, 'titanhz', 63),
(73, 3, 183, 'titanhz', 64),
(72, 3, 183, 'titanhz', 65),
(70, 3, 183, 'titanhz', 66),
(69, 3, 183, 'titanhz', 67),
(65, 3, 183, 'titanhz', 68),
(45, 3, 183, 'titanhz', 69),
(85, 2, 183, 'fikri', 71),
(85, 4, 168, 'bambang', 72),
(85, 4, 168, 'bambang', 73),
(60, 2, 175, 'fikri', 74);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `umur` int(11) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `id_profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`umur`, `no_hp`, `jenis_kelamin`, `foto`, `username`, `id_profil`) VALUES
(18, '082279876465', 1, '1541343975591.jpeg', 'fikri', 6),
(18, '082279876465', 1, '1541343975591.jpeg', 'fikri', 7),
(18, '111', 1, '5c13aae41321aaadc681035b5129ae56_t.jpg', 'kaka', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `email`, `nama`, `status`) VALUES
(16, 'fikri', '$2y$10$pcqGFbOO5cAcoTwt0foXs.HZFzHJlCjT0MC3AmeKObEVgCDHzLPG.', 'fikrisaja05@gmail.com', 'Muhammad Fikri Fadilah', 1),
(17, 'nabil', '$2y$10$Mu3O03RM5.mLXGqbHHT9DODJUVM3dIWOq1FdgEiXvcJL/lBkvMXJi', 'fikri@gmail.com', 'nabil', 1),
(18, 'kaka', '$2y$10$g9nYQAwpFvi2Iz2So1BrxujKF/2YH0EAlnL7eOHd7hA8KdmSDLb5q', 'kaka@gmail.com', 'kaka', 1),
(19, 'titanhz', '$2y$10$NYyMzbb2UMEIWB4/25iYA.hmQnF38h.djec3xJGmuBx07QoYH9Nqy', 'titanhafizhs@gmail.com', 'titan', 1),
(20, 'bambang', '$2y$10$2V.w65ZMzHQ2S1KeslCZO.i4epAeM2l3GHZhrUll98kZeh1akKqUu', 'riskatrik6@gmail.com', 'bambang', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `fk_user` (`username`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `fk_username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
