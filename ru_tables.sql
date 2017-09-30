-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 09:58 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goservy`
--

-- --------------------------------------------------------

--
-- Table structure for table `ru_tables`
--

CREATE TABLE `ru_tables` (
  `id` int(11) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `table_assign_status` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ru_tables`
--

INSERT INTO `ru_tables` (`id`, `table_name`, `table_assign_status`, `status`, `created`) VALUES
(1, 'G1', 1, 1, '2017-05-23 00:00:00'),
(2, 'G2', 1, 1, '2017-05-23 00:00:00'),
(3, 'G3', 0, 1, '2017-05-23 00:00:00'),
(4, 'G4', 0, 1, '2017-05-23 00:00:00'),
(5, 'G5', 0, 1, '2017-05-23 00:00:00'),
(6, 'G6', 0, 1, '2017-05-23 00:00:00'),
(7, 'G7', 0, 1, '2017-05-23 00:00:00'),
(8, 'G8', 0, 1, '2017-05-23 00:00:00'),
(9, 'G9', 0, 1, '2017-05-23 00:00:00'),
(10, 'G10', 0, 1, '2017-05-23 00:00:00'),
(11, 'G11', 0, 1, '2017-05-23 00:00:00'),
(12, 'G12', 0, 1, '2017-07-26 09:26:29'),
(13, 'G13', 0, 1, '2017-09-29 00:00:00'),
(14, 'G14', 0, 1, '2017-09-29 00:00:00'),
(15, 'G15', 0, 1, '2017-09-29 00:00:00'),
(16, 'G16', 0, 1, '2017-09-29 00:00:00'),
(17, 'C1', 0, 1, '2017-09-29 00:00:00'),
(18, 'C2', 0, 1, '2017-09-29 00:00:00'),
(19, 'C3', 0, 1, '2017-09-29 00:00:00'),
(20, 'C4', 0, 1, '2017-09-29 00:00:00'),
(21, 'C5', 0, 1, '2017-09-29 00:00:00'),
(22, 'C6', 0, 1, '2017-09-29 00:00:00'),
(23, 'C7', 0, 1, '2017-09-29 00:00:00'),
(24, 'C8', 0, 1, '2017-09-29 00:00:00'),
(25, 'B1', 0, 1, '2017-09-30 00:00:00'),
(26, 'B2', 0, 1, '0000-00-00 00:00:00'),
(27, 'B3', 0, 1, '2017-09-30 00:00:00'),
(28, 'B4', 0, 1, '0000-00-00 00:00:00'),
(29, 'B5', 0, 1, '0000-00-00 00:00:00'),
(30, 'B6', 0, 1, '0000-00-00 00:00:00'),
(31, 'B7', 0, 1, '0000-00-00 00:00:00'),
(32, 'B8', 0, 1, '0000-00-00 00:00:00'),
(33, 'B9', 0, 1, '0000-00-00 00:00:00'),
(34, 'B10', 0, 1, '0000-00-00 00:00:00'),
(35, 'F1', 0, 1, '2017-09-30 00:00:00'),
(36, 'F2', 0, 1, '0000-00-00 00:00:00'),
(37, 'F3', 0, 1, '0000-00-00 00:00:00'),
(38, 'F4', 0, 1, '0000-00-00 00:00:00'),
(39, 'F5', 0, 1, '0000-00-00 00:00:00'),
(40, 'F6', 0, 1, '0000-00-00 00:00:00'),
(41, 'F7', 0, 1, '0000-00-00 00:00:00'),
(42, 'F8', 0, 1, '0000-00-00 00:00:00'),
(43, 'F9', 0, 1, '0000-00-00 00:00:00'),
(44, 'F10', 0, 1, '0000-00-00 00:00:00'),
(45, 'F11', 0, 1, '0000-00-00 00:00:00'),
(46, 'F12', 0, 1, '0000-00-00 00:00:00'),
(47, 'F14', 0, 1, '0000-00-00 00:00:00'),
(48, 'C21', 0, 1, '0000-00-00 00:00:00'),
(49, 'C22', 0, 1, '0000-00-00 00:00:00'),
(50, 'C23', 0, 1, '0000-00-00 00:00:00'),
(51, 'C24', 0, 1, '0000-00-00 00:00:00'),
(52, 'C25', 0, 1, '0000-00-00 00:00:00'),
(53, 'C26', 0, 1, '0000-00-00 00:00:00'),
(54, 'C27', 0, 1, '0000-00-00 00:00:00'),
(55, 'C28', 0, 1, '0000-00-00 00:00:00'),
(56, 'C29', 0, 1, '0000-00-00 00:00:00'),
(57, 'C30', 0, 1, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ru_tables`
--
ALTER TABLE `ru_tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ru_tables`
--
ALTER TABLE `ru_tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;