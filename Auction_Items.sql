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
-- Table structure for table `Auction Items`
--

CREATE TABLE `Auction Items` (
  `Buy it now` float NOT NULL,
  `Item id` int(20) NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `Reserved Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Auction Items`
--

INSERT INTO `Auction Items` (`Buy it now`, `Item id`, `Name`, `Location`, `Reserved Price`) VALUES
(350, 1, 'Xbox', 'Nittany Apartments', 200),
(350, 2, 'PS4', 'Pollock Commons', 250),
(75, 3, 'Lamp', 'Best Buy', 30),
(500, 4, 'TV', 'Walmart', 350),
(100, 5, 'Table', '1, pollock rd', 50),
(50, 6, 'Chair', 'Westgate bldg', 20),
(1500, 7, 'Laptop', 'India', 1000),
(300, 8, 'Fridge', 'Copper Beech', 200),
(1100, 9, 'iPhone X', 'Apple store', 900),
(900, 10, 'Samsung Galaxy S9', 'Samsung Store', 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Auction Items`
--
ALTER TABLE `Auction Items`
  ADD PRIMARY KEY (`Item id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
