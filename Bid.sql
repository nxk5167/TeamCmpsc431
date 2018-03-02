-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2018 at 04:40 PM
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
-- Table structure for table `Bid`
--

CREATE TABLE `Bid` (
  `Bid_id` int(20) NOT NULL,
  `Price` int(20) NOT NULL,
  `Start_bid` int(20) NOT NULL,
  `End_bid` int(20) NOT NULL,
  `item id` int(20) NOT NULL,
  `Username` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bid`
--
ALTER TABLE `Bid`
  ADD PRIMARY KEY (`Bid_id`),
  ADD KEY `item id` (`item id`),
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bid`
--
ALTER TABLE `Bid`
  ADD CONSTRAINT `Bid_ibfk_1` FOREIGN KEY (`item id`) REFERENCES `Auction Items` (`Item id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Bid_ibfk_2` FOREIGN KEY (`Username`) REFERENCES `Registered Users` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
