-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 08:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manacul`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `res_id` int(11) DEFAULT NULL,
  `nama_menu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `res_id`, `nama_menu`) VALUES
(53, 6, 'Klappertaart,Mie ikan Cakalang,Rahang Tuna Bakar'),
(54, 4, 'Rahang Tuna,Klappertaart,Tinutuan'),
(55, 8, 'Rahang Tuna Bakar,Klappertaart'),
(56, 10, 'Rahang Tuna Bakar,Tinutuan'),
(57, 10, 'Rahang Tuna Bakar,Tinutuan'),
(58, 10, 'Rahang Tuna Bakar,Tinutuan'),
(59, 10, 'Rahang Tuna Bakar,Tinutuan'),
(60, 10, 'Rahang Tuna Bakar,Tinutuan');

-- --------------------------------------------------------

--
-- Table structure for table `menuavail`
--

CREATE TABLE `menuavail` (
  `menuAvail_id` int(20) NOT NULL,
  `menuAvail_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menuavail`
--

INSERT INTO `menuavail` (`menuAvail_id`, `menuAvail_name`) VALUES
(1, 'Tinutuan'),
(2, 'Rahang Tuna'),
(5, 'Rahang Tuna Bakar'),
(6, 'Kepala Babi Goreng Madu'),
(7, 'Mie ikan Cakalang'),
(8, 'Klappertaart');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `res_id` int(20) NOT NULL,
  `res_name` varchar(40) NOT NULL,
  `notelp` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `site_address` varchar(255) NOT NULL,
  `res_logo` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`res_id`, `res_name`, `notelp`, `address`, `site_address`, `res_logo`, `user_id`) VALUES
(4, 'Restoran Mahal', 854343344, 'Jalan Pratama No. 5', 'https://goo.gl/maps/fvMBgvkszZJc4sXg6', '../img/reslogo/warkoppan-logo.png', 12),
(5, 'Mie Ikan Cakalang Manado', 2147483647, 'Manado', 'https://maps.app.goo.gl/XaoYSPP8aEVBqWkNA', '../img/reslogo/iya.png', 20),
(6, 'dsa', 321312, 'Manado', 'das', '../img/reslogo/logo RH.png', 21),
(7, 'adsadas', 312, 'Manadoaaaa', 'https://goo.gl/maps/fvMBgvkszZJc4sXg6sasa', '../img/reslogo/logo RH.png', 22),
(8, 'dasdas', 423, 'dsadsa', 'https://goo.gl/maps/fvMBgvkszZJc4sXg6dasdas', '../img/reslogo/logo rg.png', 24),
(9, 'Restoran Murahsadas', 2147483647, 'Manadosaaassasa', 'adsadssaassad', '../img/reslogo/logo RH.png', 23),
(10, 'Manado', 31312, '3123', 'adsadssaassadda', '../img/reslogo/logo RH.png', 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `roles`) VALUES
(1, 'Roy', 'roy@roy', '123', 'admin'),
(12, 'Roy The Savior Of Light', 'pus@sy.com', '$2y$10$/KD0J1Vzch8bi10h4aCBTuZq1mbekrcYs3sM0B/qO.EQuoN8UE/Ma', 'user'),
(14, 'preysilia geibe tatipang', 'prey@si.com', '$2y$10$ndFuGxdyVAtxIqGmGdvCg.ayQTOXONwNTOs1ZjSF64sre9ouyFiLy', 'user'),
(20, 'Aldi Taher Asli', 'aldi@ta.com', '$2y$10$wYU.6MHkJNV8EsPR4Se.A.02NCHZTpldKtiBRi/EDyEtYx5bpSAcW', 'user'),
(21, 'pikar', 'pi@kar.com', '$2y$10$8FPR3UY8wI8fl8lPslSBIuu239Clve/N90cOmsjFTWPv3x7nJdkGC', 'user'),
(22, 'aa', 'a@dsa.com', '$2y$10$80HlaSLFvXz7ZfOEdu/9NerXnQl2XPWujuO3qxQ0KurVzgZ0OJxLC', 'user'),
(23, 'kosong', 'kos@ong.com', '$2y$10$Hgv4InOwVGreOj5/egePp.4BN9zbB6FXUPdxuN.XC.IFzla22Idqe', 'user'),
(24, 'cicak', 'ci@cak.com', '$2y$10$qfweo4Z3R1lkQ8VBd/TdcOwcwzUR3PhdVR4e8SSkVczZDFIXFqCme', 'user'),
(185, 'Rois The Admin', 'roy@admin.com', '$2y$10$/KD0J1Vzch8bi10h4aCBTuZq1mbekrcYs3sM0B/qO.EQuoN8UE/Ma', 'admin'),
(187, 'Coldest Admin On The Earth', 'admin@manacul.com', '$2y$10$/KD0J1Vzch8bi10h4aCBTuZq1mbekrcYs3sM0B/qO.EQuoN8UE/Ma', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_ibfk_1` (`res_id`);

--
-- Indexes for table `menuavail`
--
ALTER TABLE `menuavail`
  ADD PRIMARY KEY (`menuAvail_id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `menuavail`
--
ALTER TABLE `menuavail`
  MODIFY `menuAvail_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `res_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`res_id`) REFERENCES `restoran` (`res_id`);

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
