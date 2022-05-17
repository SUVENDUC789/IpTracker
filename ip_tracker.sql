-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 07:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `onlyvisit`
--

CREATE TABLE `onlyvisit` (
  `sl` int(11) NOT NULL,
  `comp` text NOT NULL,
  `ip` text NOT NULL,
  `date_and_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlyvisit`
--

INSERT INTO `onlyvisit` (`sl`, `comp`, `ip`, `date_and_time`) VALUES
(1, 'comp', 'ip', '2022-05-04 22:44:34'),
(2, 'Rahul', '::1', '2022-05-04 22:50:15'),
(3, 'Rahul', '::1', '2022-05-04 22:51:56'),
(4, 'Rahul', '::1', '2022-05-04 22:52:26'),
(5, 'Rahul', '::1', '2022-05-04 22:52:28'),
(6, 'Rahul', '::1', '2022-05-04 22:52:29'),
(7, 'Rahul', '::1', '2022-05-04 22:53:56'),
(8, 'Rahul', '::1', '2022-05-04 22:53:59'),
(9, 'Rahul', '::1', '2022-05-04 22:54:01'),
(10, 'Rahul', '::1', '2022-05-04 22:54:08'),
(11, 'Rahul', '::1', '2022-05-04 22:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `visiter`
--

CREATE TABLE `visiter` (
  `sl` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `txt_visiter` text NOT NULL,
  `compName` text NOT NULL,
  `ip` text NOT NULL,
  `date_time_visiter` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visiter`
--

INSERT INTO `visiter` (`sl`, `name`, `email`, `phone`, `txt_visiter`, `compName`, `ip`, `date_time_visiter`) VALUES
(1, 'name', 'email', 'phone', 'selfTxt', 'compname', 'ip', '2022-05-04 20:43:02'),
(2, 'suvendu', 'suvenduc696@gmail.com', '9674289220', 'hello bro', 'Rahul', '::1', '2022-05-04 21:48:32'),
(3, 'supratim', 'abc@gmail.com', '9674289220', 'hello bro', 'Rahul', '::1', '2022-05-04 22:03:58'),
(4, 'hello', 'hello@gmail.com', '8981702265', 'say hello', 'Rahul', '::1', '2022-05-04 22:37:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `onlyvisit`
--
ALTER TABLE `onlyvisit`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `visiter`
--
ALTER TABLE `visiter`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `onlyvisit`
--
ALTER TABLE `onlyvisit`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `visiter`
--
ALTER TABLE `visiter`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
