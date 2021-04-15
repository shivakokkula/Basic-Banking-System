-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 06:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `balance`) VALUES
('akshitha kokkula', 'akshitha@email.com', 12000),
('raju pandey', 'raju@email.com', 28000),
('ram', 'ram@email.com', 30000),
('rama', 'rama@email.com', 10000),
('ramesh kokkula', 'ramesh@email.com', 60000),
('ramu', 'ramu@email.com', 20000),
('ramya', 'ramya@email.com', 20000),
('rohan', 'rohan@email.com', 100000),
('rohit kokkula', 'rohit@email.com', 40000),
('shiva kokkula', 'shiva@email.com', 19000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `transferred amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `transferred amount`) VALUES
('shiva kokkula', 'rohit kokkula', 1000),
('shiva kokkula', 'rohit kokkula', 1000),
('rohit kokkula', 'shiva kokkula', 1000),
('akshitha kokkula', 'rohit kokkula', 1000),
('rohit kokkula', 'shiva kokkula', 5000),
('shiva kokkula', 'akshitha kokkula', 1000),
('akshitha kokkula', 'raju pandey', 1000),
('akshitha kokkula', 'raju pandey', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('akshitha kokkula', 'ram', 1000),
('raju pandey', 'akshitha kokkula', 1000),
('raju pandey', 'akshitha kokkula', 1000),
('raju pandey', 'akshitha kokkula', 1000),
('akshitha kokkula', 'akshitha kokkula', 1000),
('raju pandey', 'akshitha kokkula', 1000),
('raju pandey', 'akshitha kokkula', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
