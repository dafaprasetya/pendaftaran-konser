-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 04:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nomor_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cat` enum('platinum','silver','bronze') DEFAULT NULL,
  `konserid` int(11) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `status` enum('paid','unpaid') DEFAULT 'unpaid',
  `tiketid` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `nomor_telp`, `email`, `cat`, `konserid`, `harga`, `status`, `tiketid`) VALUES
(1, 'dafa prasetya', '081574999858', 'dafaprstya150@gmail.com', 'platinum', 1, '1.000.000', 'unpaid', 'DA151921PLA'),
(2, 'dafa prasetya', '081574999858', 'dafaprstya150@gmail.com', 'platinum', 2, '1.000.000', 'unpaid', 'DA51875PLA'),
(3, 'Ujang', '019272291028', 'ujangsaahudin@gmail.com', 'silver', 2, '500.000', 'unpaid', 'UJJ21549SIL'),
(4, 'Ujang', '019272291028', 'ujangsaahudin@gmail.com', 'silver', 2, '500.000', 'unpaid', 'UJA91007SIL');

-- --------------------------------------------------------

--
-- Table structure for table `konser`
--

CREATE TABLE `konser` (
  `id` int(11) NOT NULL,
  `nama_konser` varchar(255) DEFAULT NULL,
  `tanggal_konser` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `platinum` varchar(255) DEFAULT NULL,
  `silver` varchar(255) DEFAULT NULL,
  `bronze` varchar(255) DEFAULT NULL,
  `qt_bronze` varchar(255) DEFAULT NULL,
  `qt_silver` varchar(255) DEFAULT NULL,
  `qt_platinum` varchar(255) DEFAULT NULL,
  `benner` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT 'Jakarta, indonesia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konser`
--

INSERT INTO `konser` (`id`, `nama_konser`, `tanggal_konser`, `keterangan`, `platinum`, `silver`, `bronze`, `qt_bronze`, `qt_silver`, `qt_platinum`, `benner`, `lokasi`) VALUES
(1, 'Konser koldpley', '2024-01-05', 'lukat de skay', '1.000.000', '500.000', '300.000', '100', '60', '30', 'assets/gambarkonser/Konser_koldpley11106.jpg', 'Jakarta, indonesia'),
(2, 'Konser koldpley11', '2023-12-27', 'dafa', '1.000.000', '500.000', '300.000', '21', '21', '12', 'assets/gambarkonser/Konser_koldpley11106.jpg', 'Jakarta, indonesia'),
(3, 'Konser koldpley11', '2023-12-29', 'dafa', '1.000.000', '500.000', '300.000', '21', '21', '12', 'assets/gambarkonser/Konser_koldpley11106.jpg', 'Jakarta, indonesia'),
(4, 'Konser bentrok', '2023-12-29', 'Gatau ngetes doang', '10.000', '5000', '3000', '1', '1', '2', 'assets/gambarkonser/Konser_bentrok461.png', 'Wakanda, andromeda');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `role`, `password`) VALUES
(1, 'dafaprstya150@gmail.com', 'dafaprstya150@gmail.com', 'admin', '$2y$10$obrAiJLzTzXu6baZctxPN.EsQftoTbdI9Qwvn2/mGBFgg17IsZfI.'),
(2, 'dafaprstya250@gmail.com', 'dafaprstya250@gmail.com', 'user', '$2y$10$XHqpnjpGkunLVuKVEJtfF.74tSWiG06T/XRVba0ocvWXj4bx05dfm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konserid` (`konserid`);

--
-- Indexes for table `konser`
--
ALTER TABLE `konser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konser`
--
ALTER TABLE `konser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`konserid`) REFERENCES `konser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
