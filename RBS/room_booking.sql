-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 01:33 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_reg`
--

CREATE TABLE `cust_reg` (
  `cust_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `fname` char(30) NOT NULL,
  `lname` char(30) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `house` char(30) DEFAULT NULL,
  `town` char(30) DEFAULT NULL,
  `place` char(30) DEFAULT NULL,
  `district` char(30) DEFAULT NULL,
  `state` char(30) DEFAULT NULL,
  `pincode` bigint(10) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_reg`
--

INSERT INTO `cust_reg` (`cust_id`, `log_id`, `fname`, `lname`, `mobile`, `house`, `town`, `place`, `district`, `state`, `pincode`, `email`, `password`) VALUES
(1, 45, 'akash', 'ps', 9658745896, NULL, NULL, NULL, NULL, NULL, NULL, 'akashpsuresh747@gmail.com', 'akash'),
(2, 46, 'anandhu', 'subash', 9400878007, NULL, NULL, NULL, NULL, NULL, NULL, 'vishnu@mail.com', '123'),
(3, 47, 'tom', 'hh', 9658745855, NULL, NULL, NULL, NULL, NULL, NULL, 'tom@gmail', 'tom'),
(4, 50, 'tom', 'sdsdd', 9658745896, NULL, NULL, NULL, NULL, NULL, NULL, 'tom@gmail.com', 'tom'),
(5, 52, 'sanjay', 'sanju', 9658745896, NULL, NULL, NULL, NULL, NULL, NULL, 'sanjay@gmail.com', 'sanjay'),
(6, 54, 'akash', 'psuresh', 9658745896, NULL, NULL, NULL, NULL, NULL, NULL, 'akash@gmail.com', '123'),
(7, 57, 'fostin', 'dsdds', 9658745896, NULL, NULL, NULL, NULL, NULL, NULL, 'fostin@gmail.com', 'fostin'),
(8, 58, 'sam', 'babu', 9658745896, NULL, NULL, NULL, NULL, NULL, NULL, 'sam@gmail.com', 'sam'),
(9, 59, 'sdasadasd', 'sadad', 5464, NULL, NULL, NULL, NULL, NULL, NULL, 'vishnu@maii', 'dadad'),
(10, 60, 'aaaaa', 'aaaaaa', 9623568988, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(11, 61, 'qaaaaaaa', 'qqq', 9658745896, NULL, NULL, NULL, NULL, NULL, NULL, 'tom@gmail.cd', ''),
(12, 62, 'ajil', 's', 8943815087, NULL, NULL, NULL, NULL, NULL, NULL, 'ajil@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `usertype` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`, `usertype`, `status`) VALUES
(49, 'admin@gmail.com', 'admin', 2, 0),
(54, 'akash@gmail.com', '123', 0, 0),
(55, 'sanjay@gmail.com', 'sanjay', 1, 0),
(56, 'tom@gmail.com', 'tom', 1, 0),
(57, 'fostin@gmail.com', 'fostin', 0, 0),
(58, 'sam@gmail.com', 'sam', 0, 0),
(59, 'vishnu@maii', 'dadad', 0, 0),
(60, '', '', 0, 0),
(61, 'tom@gmail.cd', '', 0, 0),
(62, 'ajil@gmail.com', '123', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `owner_reg`
--

CREATE TABLE `owner_reg` (
  `deal_id` int(15) NOT NULL,
  `log_id` int(11) NOT NULL,
  `fname` char(30) NOT NULL,
  `lname` char(30) NOT NULL,
  `mobile` bigint(25) NOT NULL,
  `store_name` varchar(50) DEFAULT NULL,
  `town` char(25) DEFAULT NULL,
  `place` char(25) DEFAULT NULL,
  `district` char(25) DEFAULT NULL,
  `state` char(25) DEFAULT NULL,
  `pincode` bigint(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_reg`
--

INSERT INTO `owner_reg` (`deal_id`, `log_id`, `fname`, `lname`, `mobile`, `store_name`, `town`, `place`, `district`, `state`, `pincode`, `email`, `password`) VALUES
(0, 40, 'tom', 'joe', 9587486547, NULL, NULL, NULL, NULL, NULL, NULL, 'tom@gmail.com', 'tom123'),
(0, 41, 'jonny', 'hgf', 9587486547, NULL, NULL, NULL, NULL, NULL, NULL, 'jonny@gmail.com', 'fdff'),
(0, 48, 'akash', 'jgjg', 3463836, NULL, NULL, NULL, NULL, NULL, NULL, 'ak@gmail', 'ak47'),
(0, 51, 'joe', 'jose', 8943815087, NULL, NULL, NULL, NULL, NULL, NULL, 'joe@gmail.com', 'joe'),
(0, 53, 'fostin', 'fosti', 9623568988, NULL, NULL, NULL, NULL, NULL, NULL, 'fostin@gmail.com', 'fostin'),
(0, 55, 'sanjay', 'sanju', 9400878007, NULL, NULL, NULL, NULL, NULL, NULL, 'sanjay@gmail.com', 'sanjay'),
(0, 56, 'tom', 'sanju', 9400878007, NULL, NULL, NULL, NULL, NULL, NULL, 'tom@gmail.com', 'tom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_reg`
--
ALTER TABLE `cust_reg`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `owner_reg`
--
ALTER TABLE `owner_reg`
  ADD KEY `log_id` (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_reg`
--
ALTER TABLE `cust_reg`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust_reg`
--
ALTER TABLE `cust_reg`
  ADD CONSTRAINT `cust_reg_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
