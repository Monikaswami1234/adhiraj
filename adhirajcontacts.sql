-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 11:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adhirajcontacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `clientname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjectvhicle` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `clientname`, `phone`, `email`, `subjectvhicle`, `massage`) VALUES
(3, 'SHIVAM SHARMA', '9166056550', 'shivamsharma022001@gmail.com', 'ev-motorcycle', 'I WANT A EV MOTOR BIKE'),
(5, 'shivam', '905809809349', 'shivamsharma022001@gmail.com', 'ev-motorcycle', 'safdsfvds'),
(6, 'shivam', '905809809349', 'shivamsharma022001@gmail.com', 'ev-motorcycle', 'safdsfvds'),
(7, 'shivam', '905809809349', 'shivamsharma022001@gmail.com', 'ev-motorcycle', 'safdsfvds'),
(8, 'shivam', '905809809349', 'shivamsharma022001@gmail.com', 'ev-motorcycle', 'safdsfvds'),
(9, 'shivam', '905809809349', 'shivamsharma022001@gmail.com', 'ev-motorcycle', 'safdsfvds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
