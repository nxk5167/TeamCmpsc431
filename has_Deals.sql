-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2018 at 05:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dCoders`
--

-- --------------------------------------------------------

--
-- Table structure for table `has_Deals`
--

CREATE TABLE `has_Deals` (
  `item id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has_Deals`
--

INSERT INTO `has_Deals` (`item id`) VALUES
(9),
(10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `has_Deals`
--
ALTER TABLE `has_Deals`
  ADD PRIMARY KEY (`item id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `has_Deals`
--
ALTER TABLE `has_Deals`
  ADD CONSTRAINT `has_Deals_ibfk_1` FOREIGN KEY (`item id`) REFERENCES `Auction Items` (`Item id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
