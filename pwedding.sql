-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 03:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `budget` varchar(200) NOT NULL,
  `event_date` date NOT NULL,
  `email` varchar(33) DEFAULT NULL,
  `login_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup_table`
--

CREATE TABLE `signup_table` (
  `id` int(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `log_date` datetime NOT NULL,
  `login_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_table`
--

INSERT INTO `signup_table` (`id`, `firstname`, `lastname`, `email`, `password`, `log_date`, `login_status`) VALUES
(1, 'sikiru', 'shtt', 'ade@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-06-10 05:07:07', 1),
(2, 'ade', 'land', 'sde@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-06-10 06:02:51', 0),
(3, 'wale', 'jame', 'wale@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-06-10 06:54:57', 0),
(4, '', '', 'afes@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-06-10 12:39:23', 0),
(5, '', '', 'afres@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-06-10 12:39:42', 1),
(6, '', '', 'aje@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-06-10 12:46:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `gendar` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `phone` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dj` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catering` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hairstyle` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makeup` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_cover` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_price` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `submit_date` datetime NOT NULL,
  `approve` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `fname`, `lname`, `service`, `dj`, `catering`, `hairstyle`, `hall`, `makeup`, `location`, `company`, `area_cover`, `discount`, `phone`, `reg_price`, `act_price`, `status`, `submit_date`, `approve`) VALUES
(1, 'Chika', 'Jude', '', '', '', '', '7500', '', 'Island', '', 'lagos', '', '08083321950', '7500', '7500', 1, '2019-06-10 09:11:36', 0),
(2, 'Maria', 'Jude', '', '', '', '', '', '150000', 'Island', '', 'lagos', '', '08083321950', '7500', '7500', 1, '2019-06-10 09:36:04', 0),
(3, 'Maria', 'Jude', 'makeup', '', '', '', '', '150000', 'Island', '', 'lagos', '', '08083321950', '7500', '7500', 1, '2019-06-10 09:40:21', 0),
(4, 'Maria', 'Jude', 'dj', '50000', '', '', '', '', 'Island', '', 'lagos', '', '08083321950', '7500', '7500', 1, '2019-06-10 09:40:43', 0),
(5, 'Chika', 'Jude', 'makeup', '', '', '', '100000', '', 'Island', '', 'lagos', '', '08083321950', '100000', '100000', 1, '2019-06-10 10:01:32', 0),
(6, 'Chika', 'Jude', 'hairstylist', '', '', '12000', '', '', 'Island', '', 'lagos', '', '08083321950', '100000', '100000', 1, '2019-06-10 10:02:56', 0),
(7, 'Chika', 'Jude', 'catering', '250000', '', '', '', '', 'surulere', '', 'lagos', '', '08083321950', '250000', '250000', 1, '2019-06-10 10:04:29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_table`
--
ALTER TABLE `signup_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup_table`
--
ALTER TABLE `signup_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
