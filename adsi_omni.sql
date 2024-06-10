-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 12:31 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `ecommerce`
--

CREATE TABLE `ecommerce` (
  `id_ecommerce` int(3) NOT NULL,
  `nama_ecommerce` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ecommerce`
--

INSERT INTO `ecommerce` (`id_ecommerce`, `nama_ecommerce`) VALUES
(1, 'Tokopedia'),
(2, 'Shopee');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penjualan`
--

CREATE TABLE `laporan_penjualan` (
  `id_laporan` int(5) NOT NULL,
  `nama_laporan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(5) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `total_harga` int(10) NOT NULL,
  `status_pesanan` varchar(20) NOT NULL,
  `id_ecommerce` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `tgl_pesanan`, `total_harga`, `status_pesanan`, `id_ecommerce`) VALUES
(1, '2024-04-08', 72000, 'selesai', 2),
(2, '2024-04-11', 89000, 'selesai', 2),
(3, '2024-04-11', 105000, 'selesai', 1),
(4, '2024-04-18', 89000, 'selesai', 1),
(5, '2024-04-18', 100000, 'selesai', 1),
(6, '2024-04-23', 172000, 'selesai', 2),
(7, '2024-05-05', 178000, 'selesai', 1),
(8, '2024-05-17', 178000, 'selesai', 1),
(9, '2024-05-17', 161000, 'selesai', 2),
(10, '2024-05-20', 118000, 'selesai', 2),
(11, '2024-05-23', 89000, 'selesai', 2),
(12, '2024-05-23', 89000, 'selesai', 2),
(13, '2024-05-26', 105000, 'selesai', 1),
(14, '2024-05-26', 100000, 'selesai', 1),
(15, '2024-06-02', 178000, 'selesai', 2),
(16, '2024-06-02', 156000, 'selesai', 2),
(17, '2024-06-03', 89000, 'selesai', 2),
(18, '2024-06-03', 100000, 'selesai', 2),
(19, '2024-06-04', 118000, 'selesai', 2),
(20, '2024-06-04', 72000, 'selesai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` int(10) NOT NULL,
  `stok_produk` int(5) NOT NULL,
  `status_produk` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `status_produk`) VALUES
(1, 'Plain Basic Shirt', 72000, 30, 1),
(2, 'Daily T-Shirt', 105000, 25, 1),
(3, 'Cargo Pants', 118000, 25, 1),
(4, 'Straight Cut Jeans', 156000, 30, 1),
(5, 'Smile Print Basic Shirt', 89000, 30, 1),
(6, 'Alphabet Print Basic Shirt', 89000, 30, 1),
(7, 'Oversized 7Day Shirt', 100000, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(8) NOT NULL,
  `nama_seller` varchar(30) NOT NULL,
  `no_telp_seller` varchar(20) NOT NULL,
  `alamat_seller` varchar(50) NOT NULL,
  `email_seller` varchar(30) NOT NULL,
  `username_seller` varchar(30) NOT NULL,
  `password_seller` varchar(15) NOT NULL,
  `status_subs` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `nama_seller`, `no_telp_seller`, `alamat_seller`, `email_seller`, `username_seller`, `password_seller`, `status_subs`) VALUES
(1, '7Day Outfit', '089672259991', 'Jl. Citraland Raya VII No. 7', 'sevendayoutfit@gmail.com', '7dayoutfit', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id_subs` int(5) NOT NULL,
  `tipe_subs` int(1) NOT NULL,
  `harga_subs` int(7) NOT NULL,
  `status_subs` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD PRIMARY KEY (`id_ecommerce`);

--
-- Indexes for table `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_id_ecommerce` (`id_ecommerce`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id_subs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ecommerce`
--
ALTER TABLE `ecommerce`
  MODIFY `id_ecommerce` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id_subs` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `fk_id_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_id_ecommerce` FOREIGN KEY (`id_ecommerce`) REFERENCES `ecommerce` (`id_ecommerce`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
