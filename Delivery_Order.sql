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
-- Table structure for table `Delivery_Order`
--

CREATE TABLE `Delivery_Order` (
  `Username` char(20) NOT NULL,
  `Item id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Delivery_Order`
--

INSERT INTO `Delivery_Order` (`Username`, `Item id`) VALUES
('gola234', 9),
('john234', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Delivery_Order`
--
ALTER TABLE `Delivery_Order`
  ADD KEY `Item id` (`Item id`),
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Delivery_Order`
--
ALTER TABLE `Delivery_Order`
  ADD CONSTRAINT `Delivery_Order_ibfk_1` FOREIGN KEY (`Item id`) REFERENCES `Auction Items` (`Item id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Delivery_Order_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `Registered Users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
