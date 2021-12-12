-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 11:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffe`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `idc` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`idc`, `fullname`, `email`, `pass`, `phone`) VALUES
(4, 'hicham', 'hicham@gmail.com', '12345', 6666666),
(5, '3bass', '3bass@gmail.com', '3bas', 86878787),
(20, 'fat7', 'fath@gmail.com', 'fat7', 641089735),
(25, 'imane', 'imane.500@hotmail.fr', 'imane', 989898),
(34, 'nokoch', 'nakoch@gmail.com', 'nakoch', 454545),
(35, 'jamal', 'jamal@gmail.com', 'jamal', 6666666);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `places_number` int(11) NOT NULL,
  `drinks` varchar(20) NOT NULL,
  `date` datetime(5) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `fullname`, `places_number`, `drinks`, `date`, `id_client`) VALUES
(1, 'dani dani', 3, 'juice', '2021-12-26 00:00:00.00000', 3),
(2, 'marc', 5, 'expresso', '2022-01-08 00:00:00.00000', 4),
(3, 'hicham', 5, 'beer', '2021-12-20 00:00:00.00000', 4),
(4, 'hicham', 5, 'beer', '2021-12-20 00:00:00.00000', 4),
(5, 'rimi', 4, 'cafe creme', '2021-12-07 00:00:00.00000', 4),
(6, 'jamal', 5, 'tea', '2021-12-11 00:00:00.00000', 35),
(7, 'jamal', 33, 'tea', '2021-11-30 00:00:00.00000', 4),
(8, '3bas', -3, 'cafe creme', '2021-12-10 00:00:00.00000', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
