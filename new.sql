-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 11:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `jass`
--

CREATE TABLE `jass` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jass`
--

INSERT INTO `jass` (`id`, `name`, `class`, `roll`, `address`, `email`) VALUES
(1, 'jass', '', '', '', ''),
(2, 'yeas', '122', '211', 'india', 'yesh@gmail.com'),
(3, 'gfhfg', 'hfhfg', 'hfgh', 'fghfg', 'hfg'),
(4, 'gfhfg', 'hfhfg', 'hfgh', 'fghfg', 'hfg'),
(5, 'tytr', 'rtyrty', 'ytry', 'rty', 'rtyrt'),
(6, '6 hh', 'rtyrty', 'ytry', '', 'rtyrt'),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, 'jasspreet', '12', '21    ', 'delhi', 'ijaspreetsiingh@gmail.com  '),
(11, 'jaspreet', '1211', '21  11', 'india', 'ijaspreetsiingh@gmail.com '),
(12, 'mohit', '12', '34', 'delhi', 'mohit@gmail.com'),
(13, '', '', '', '', ''),
(14, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jass`
--
ALTER TABLE `jass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jass`
--
ALTER TABLE `jass`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
