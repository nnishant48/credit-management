-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2019 at 04:17 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10038566_mydb`
--
CREATE DATABASE IF NOT EXISTS `id10038566_mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id10038566_mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `from_user` varchar(20) DEFAULT NULL,
  `to_user` varchar(20) DEFAULT NULL,
  `credits_tr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`from_user`, `to_user`, `credits_tr`) VALUES
('Mohit', 'Sukriti', 1),
('Prabhat', 'Ishika', 1),
('Prabhat', 'Mayank', 1),
('Prabhat', 'Sukriti', 1),
('Sukriti', 'Prabhat', 1),
('Mayank', 'Prabhat', 1),
('Prabhat', 'Mayank', 1),
('Prabhat', 'Mayank', 1),
('Mayank', 'Prabhat', 2),
('Sukriti', 'Prabhat', 1),
('Pranav', 'Rajat', 90),
('Nishant', 'Vishal', 1),
('Mohit', 'Rajat', 1),
('Sahil', 'Aman', 1),
('Pranav', 'Nitin', 1),
('Mohit', 'Aman', 1),
('Naman', 'Sahil', 1),
('Nitin', 'Aman', 1),
('Pranav', 'Nitin', 1),
('Nitin', 'Pranav', 1),
('Aman', 'Mohit', 1),
('Nishant', 'Vishal', 56),
('Vishal', 'Nishant', 50),
('Vishal', 'Nitin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `credit` int(11) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `credit`) VALUES
('Nishant', 'nnishant48@gmail.com', 93),
('Vishal', 'vishal23@gmail.com', 106),
('Nitin', 'nitinkumar@gmail.com', 101),
('Mohit', 'mohit11@gmail.com', 99),
('Aman', 'Amankapoor@gmail.com', 102),
('Ankit', 'Ankitverma@gmail.com', 100),
('Naman', 'Naman45@gmail.com', 99),
('Rajat', 'rajat76@gmail.com', 101),
('Pranav', 'pranav98@gmail.com', 99),
('Sahil', 'sahil34@gmail.com', 100);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
