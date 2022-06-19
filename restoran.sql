-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 03:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500'),
(4, 'admin1', 'admin1@gmail.com', 'c93ccd78b2076528346216b3b2f701e6');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `kode_product` int(11) NOT NULL,
  `tgl_input` date NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `kode_product`, `tgl_input`, `nama_product`, `harga`, `keterangan`, `foto`) VALUES
(2, 1001, '2022-06-16', 'Kebab Turki', 30000, 'mantabbb banget ', '361-g-3.jpg'),
(3, 1003, '2022-06-17', 'Burger', 30000, 'Burger', '718-g-1.jpg'),
(4, 1003, '2022-06-17', 'Sandwich', 30000, 'Sandwich', '295-g-2.jpg'),
(5, 1004, '2022-06-17', 'Choco magma', 30000, 'Choco magma', '598-g-8.jpg'),
(6, 1005, '2022-06-17', 'Chicken Pop', 30000, 'Chicken Pop', '65-g-6.jpg'),
(7, 1006, '2022-06-17', 'Cookies', 30000, 'Cookies', '249-g-4.jpg'),
(8, 1007, '2022-06-17', 'Pie Susu', 30000, 'Pie Susu', '675-p-2.jpg'),
(9, 1008, '2022-06-17', 'Telur Biasa Aja', 30000, 'Telur Biasa Aja', '35-g-7.jpg'),
(10, 1010, '2022-06-17', 'tes', 120000, 'tes', '489-p-5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
