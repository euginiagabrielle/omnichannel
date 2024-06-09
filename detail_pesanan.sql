-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 05:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adsi_omni`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` int(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(8) NOT NULL,
  `id_pesanan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `nama_produk`, `jumlah`, `harga`, `id_pesanan`, `id_produk`) VALUES
(1, 'Plain Basic Shirt', 1, 72000, 1, 1),
(2, 'Smile Print Basic Shirt', 1, 89000, 2, 5),
(3, 'Daily T-Shirt', 1, 105000, 3, 2),
(4, 'Smile Print Basic Shirt', 1, 89000, 4, 5),
(5, 'Oversized 7Day Shirt', 1, 100000, 5, 7),
(6, 'Plain Basic Shirt', 1, 72000, 6, 1),
(7, 'Oversized 7Day Shirt', 1, 100000, 6, 7),
(8, 'Smile Print Basic Shirt', 1, 89000, 7, 5),
(9, 'Alphabet Print Basic Shirt', 1, 89000, 7, 6),
(10, 'Smile Print Basic Shirt', 1, 89000, 8, 5),
(11, 'Alphabet Print Basic Shirt', 1, 89000, 8, 6),
(12, 'Plain Basic Shirt', 1, 72000, 9, 1),
(13, 'Smile Print Basic Shirt', 1, 89000, 9, 5),
(14, 'Cargo Pants', 1, 118000, 10, 3),
(15, 'Alphabet Print Basic Shirt', 1, 89000, 11, 6),
(16, 'Smile Print Basic Shirt', 1, 89000, 12, 5),
(17, 'Daily T-Shirt', 1, 105000, 13, 2),
(18, 'Oversized 7Day Shirt', 1, 100000, 14, 7),
(19, 'Smile Print Basic Shirt', 1, 89000, 15, 5),
(20, 'Alphabet Print Basic Shirt', 1, 89000, 15, 6),
(21, 'Straight Cut Jeans', 1, 156000, 16, 4),
(22, 'Alphabet Print Basic Shirt', 1, 89000, 17, 6),
(23, 'Oversized 7Day Shirt', 1, 100000, 18, 7),
(24, 'Cargo Pants', 1, 118000, 19, 3),
(25, 'Plain Basic Shirt', 1, 72000, 20, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_id_produk` (`id_produk`),
  ADD KEY `fk_id_pesanan` (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `fk_id_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
