-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:56 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertdata`
--

CREATE TABLE `insertdata` (
  `id` int(11) NOT NULL,
  `code_unique` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `id_pic` varchar(100) NOT NULL,
  `nama_pic` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertdata`
--

INSERT INTO `insertdata` (`id`, `code_unique`, `nama_barang`, `location`, `date`, `id_pic`, `nama_pic`, `status`) VALUES
(1, 'MNT01', 'Monitor', 'Pabrik 1', '2020-12-31', 'ABC', '123', 'Ready Stock'),
(2, 'MSE01', 'Mouse', 'Aaaa', '2018-11-30', '123', 'wfg', 'Dipinjam'),
(3, 'MNT02', 'Monitor', 'Gedung Graha', '2019-10-29', '123', 'ABC', 'Ready Stock'),
(4, 'KBR01', 'Keyboard', 'ABC', '2019-10-30', '123', 'ASD', 'Ready Stock'),
(5, 'SCN01', 'Scanner', 'QWE', '2019-11-30', '123', 'ABC', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', '2020-02-17 14:39:01'),
(2, 'dzakiyah', 'dzakiyah@dzak', '75da24d5570e6a068905701ddba19496', '2020-03-02 10:59:45'),
(3, 'pq', 'popopop@popo.com', '382da15dfcfa571b3973cb5ae2223f76', '2020-03-06 16:26:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdata`
--
ALTER TABLE `insertdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdata`
--
ALTER TABLE `insertdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
