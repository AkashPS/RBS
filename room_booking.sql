-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 07:48 AM
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
  `pincode` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_reg`
--

INSERT INTO `cust_reg` (`cust_id`, `log_id`, `fname`, `lname`, `mobile`, `house`, `town`, `place`, `district`, `state`, `pincode`) VALUES
(1, 3, 'akash', 'ps', 9656680084, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 5, 'tony', 't', 9966555446, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 6, 'nik', 'jose', 9400878007, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 7, 'marty', 'jose', 8943815087, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 14, 'alan', 'jose', 9539835630, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 15, 'syam', 'gopi', 9112345678, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `usertype` char(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `aproval` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`, `usertype`, `status`, `aproval`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 1, 1),
(2, 'pepe@gmail.com', 'pepe', 'owner', 1, 1),
(3, 'jikku@gmail.com', 'jikku', 'owner', 1, 1),
(4, 'sam@gmail.com', 'sam', 'owner', 1, 0),
(5, 'tony@gmail.com', 'tony', 'customer', 1, 1),
(6, 'nik@gmail.com', 'nik', 'customer', 1, 1),
(7, 'mart@gmail.com', 'marty', 'customer', 1, 1),
(8, 'akash@gmail.com', 'akash', 'owner', 1, 2),
(9, 'savio@gmail.com', 'savio', 'owner', 1, 2),
(10, 'sample@gmail.com', 'sample', 'owner', 1, 2),
(11, 'jeo@gmail.com', 'jeo', 'owner', 1, 1),
(12, 'sanjay@gmail.com', 'sanjay', 'owner', 1, 2),
(13, 'alan@gmail.com', 'alan', 'owner', 1, 1),
(14, 'alanm@gmail.com', 'admin', 'customer', 1, 1),
(15, 'er@gh.in', '123@123q', 'customer', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `main_hotel_registration`
--

CREATE TABLE `main_hotel_registration` (
  `hid` int(11) NOT NULL,
  `aadhaar` varchar(25) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `owner_add` varchar(100) NOT NULL,
  `village` varchar(50) NOT NULL,
  `taluk` varchar(50) NOT NULL,
  `state` varchar(60) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_add` varchar(100) NOT NULL,
  `hotel_village` varchar(50) NOT NULL,
  `hotel_taluk` varchar(50) NOT NULL,
  `hotel_state` varchar(60) NOT NULL,
  `hotel_district` varchar(50) NOT NULL,
  `hotel_locarea` varchar(50) NOT NULL,
  `hotel_pincode` varchar(50) NOT NULL,
  `hotel_area` varchar(50) NOT NULL,
  `hotel_owner` varchar(50) DEFAULT NULL,
  `hotel_license_no` varchar(50) NOT NULL,
  `owner_id_proof` varchar(100) DEFAULT NULL,
  `hotel_license` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_hotel_registration`
--

INSERT INTO `main_hotel_registration` (`hid`, `aadhaar`, `fullname`, `father_name`, `gender`, `owner_add`, `village`, `taluk`, `state`, `district`, `pincode`, `mobile`, `email`, `hotel_name`, `hotel_add`, `hotel_village`, `hotel_taluk`, `hotel_state`, `hotel_district`, `hotel_locarea`, `hotel_pincode`, `hotel_area`, `hotel_owner`, `hotel_license_no`, `owner_id_proof`, `hotel_license`) VALUES
(1, '784512362589', 'Jeo jose', 'Jose k', 'MALE', 'plangottu (H)\r\nKarinilam P O\r\nAmaravathy', 'Kanjirapally', 'Mundakayam', '13', '7', 686513, '9656680054', 'jeo@gmail.com', 'Hotel Royal Empire', 'Hotel Royal Empire\r\nmundakayam P O\r\nmundakayam', 'Kanjirapally', 'Mundakayam', '13', '8', 'Mundakayam', '686513', '89000', 'Jeo jose', '8956231425', '1557656887download (3).jpg', '15576568871_b.jpg'),
(2, '965668005468', 'P k suresh', 'Krishnnan kutty', 'MALE', 'plangottu (h)\r\nkarinilam p o,\r\nammaravathy,\r\n ', 'Mundakayam', 'Kanjirapally', '6', '173', 686513, '8943815087', 'pksuresh@gmail.com', 'Hotel Swagath', 'Hotel Swagath\r\ngoa \r\npanaji', 'Panaji', 'Panaji', '6', '173', 'Panaji', '696586', '26000', 'Pk suresh', '7845123656', '1557983018download (3).jpg', '15579830181519032245.jpg'),
(3, '894567321236', 'Pepe', 'Thomas', 'MALE', 'pepatal house(h)\r\nchenai\r\n', 'Chenai', 'Kalkarapatty', '24', '511', 698956, '8943815087', 'pepe@gmail.com', 'Hotel pepe', 'Hotel pepe\r\nchenai\r\ntown junction\r\ntamil nadu', 'Chenai', 'Kalkarapatty', '24', '511', 'Chennai', '698956', '89000', 'Pepe', '7845123652', '1557984338aadhar-card-registration-service-250x250.jpg', '15579843381519032245.jpg'),
(4, '895623142536', 'Alan dev', 'Devasia', 'MALE', 'karipuram (h)\r\niratty PO\r\nkannur', 'Iratty', 'Iratty', '13', '4', 686563, '8943815087', 'alan@gmail.com', 'Hotel Vazhiyoram', 'Hotel Vazhiyoram\r\nIratty PO\r\nIratty\r\nkannur\r\n', 'Iratty', 'Iratty', '13', '4', 'Iratty', '686563', '65000', 'Alan Dev', '8946562325', '1557989185pre-printed-aadhar-card-500x500.jpg', '1557989185holiday-inn-the-colony-4629618286-4x3.jpg'),
(5, '965668005425', 'Pepe', 'Jose', 'MALE', 'pepatal(h)\r\nchenai p o\r\nChennai\r\ntamil nadu', 'Chennai', 'Kalparivattam', '24', '511', 698956, '8943815087', 'pepe@gmail.com', 'Hotel Njanbhal', 'Hotel Njanbhal\r\nmurudeswar p o\r\nkavalypooram\r\nkarnadaka\r\n', 'Murudeswar', 'Kavalypooram', '12', '26', 'Kavalypooram', '698985', '9500', 'Pepe josaph', '8596741452', '1557991962UIDAI-Aadhaar-card-Updates-644x362.jpg', '1557991962pre-license-certificate-of-completion-property-1-638.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner_reg`
--

CREATE TABLE `owner_reg` (
  `deal_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `property_name` varchar(80) DEFAULT NULL,
  `town` varchar(80) DEFAULT NULL,
  `place` varchar(80) DEFAULT NULL,
  `state` varchar(80) DEFAULT NULL,
  `district` varchar(80) DEFAULT NULL,
  `pincode` int(20) DEFAULT NULL,
  `id_type` varchar(50) DEFAULT NULL,
  `id_proof` varchar(100) DEFAULT NULL,
  `prop_proof` varchar(80) DEFAULT NULL,
  `prop_doc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_reg`
--

INSERT INTO `owner_reg` (`deal_id`, `log_id`, `fname`, `lname`, `mobile`, `property_name`, `town`, `place`, `state`, `district`, `pincode`, `id_type`, `id_proof`, `prop_proof`, `prop_doc`) VALUES
(1, 2, 'pepe', 'thomas', 2147483647, 'owner proof', 'mundakaym ', 'amaravathy', 'kerala', 'kottayam', 686513, 'adhar', '1556166242ajcelogoonly (1).png', 'owner proof', '1556166242Books+stack+of+three+copy.png'),
(2, 3, 'jikku josedfgtyhuj35', 'mon', 2147483647, 'jikku home', 'kozhikodu', 'palarivattam', 'kerala', 'kozhikodu', 686513444, 'adhar', '1556154799rbs.png', 'owner proof', '1556154799crumpled-paper-4k-paper-texture-old-paper-white-paper.jpg'),
(3, 4, 'sam', 'john', 2147483647, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 8, 'akash', 'ps', 2147483647, 'owner certificate', 'mudakayam', 'mundakayam', 'kerala', 'kottayam', 686513, 'aadaar', '1556908585download (3).jpg', 'owner certificate', '1556908585IIT-2.jpg'),
(5, 9, 'savio', 'akash', 2147483647, 'owner certificate', 'mudakayam', 'mundakayam', 'kerala', 'kollam', 686515, 'aadaar', '1556908712download (3).jpg', 'owner certificate', '1556908712'),
(6, 10, 'saple', 'test', 2147483647, 'owner certificate', 'mudakayam', 'mundakayam', 'kerala', 'kottayam', 686513, 'aadaar', '1556908824download (3).jpg', 'owner certificate', '1556908824download (1).jpg'),
(7, 11, 'jeo', 'jose', 2147483647, 'owner certificate', 'mudakayam', 'mundakayam', 'kerala', 'kollam', 686515, 'aadaar', '1556909379download (3).jpg', 'owner certificate', '1556909379images (5).jpg'),
(8, 12, 'sanjay', 'kk', 2147483647, 'property lisence', 'kannur', 'iratty', '13', '4', 686517, 'aadaar', '1557296224download (3).jpg', 'property lisence', '1557296224images (11).jpg'),
(9, 13, 'alan', 'jose', 2147483647, 'owner', 'palai', 'poovarani', '13', '7', 686577, 'AADHAAR', '1557470897download (3).jpg', 'owner', '1557470897pre-license-certificate-of-completion-property-1-638.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `sname`, `status`) VALUES
(1, 'Andhra Pradesh', '1'),
(2, 'Arunachal Pradesh', '1'),
(3, 'Assam', '1'),
(4, 'Bihar', '1'),
(5, 'Chhattisgarh', '1'),
(6, 'Goa', '1'),
(7, 'Gujarat', '1'),
(8, 'Haryana', '1'),
(9, 'Himachal Pradesh', '1'),
(10, 'Jammu and Kashmir', '1'),
(11, 'Jharkhand', '1'),
(12, 'Karnataka', '1'),
(13, 'Kerala', '1'),
(14, 'Madhya Pradesh', '1'),
(15, 'Maharashtra', '1'),
(16, 'Manipur', '1'),
(17, 'Meghalaya', '1'),
(18, 'Mizoram', '1'),
(19, 'Nagaland', '1'),
(20, 'Odisha', '1'),
(21, 'Punjab', '1'),
(22, 'Rajasthan', '1'),
(23, 'Sikkim', '1'),
(24, 'Tamil Nadu', '1'),
(25, 'Telangana', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_details`
--

CREATE TABLE `tbl_bank_details` (
  `bank_id` int(11) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `cardtype` varchar(100) NOT NULL,
  `accountno` varchar(50) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `cvv` int(3) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank_details`
--

INSERT INTO `tbl_bank_details` (`bank_id`, `bankname`, `cardtype`, `accountno`, `cardno`, `cardname`, `month`, `year`, `cvv`, `amount`, `status`) VALUES
(1, 'SBI', 'VISA', '647458989898', '4545454545454545', 'Bibin Sabu', 'Dec', 2024, 655, 38800, 'Null'),
(2, 'FEDERAL', 'MASTER CARD', '656565656565', '6445454545454545', 'Princejose', 'Nov', 2022, 701, 10960, 'Null'),
(3, 'SOUTH INDIAN', 'RUPAY', '84785454', '9876543219876543', 'Albin Joseph', 'May', 2025, 900, 3200, 'Null'),
(4, 'SBI', 'Visa', '12345678910', '1212121212121212', 'ADMIN', 'dec', 2025, 999, 106800, 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `c_id` int(11) NOT NULL,
  `c_name` char(30) NOT NULL,
  `c_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`c_id`, `c_name`, `c_status`) VALUES
(1, 'HOME', 1),
(2, 'HOSTEL', 1),
(3, 'HOTEL', 1),
(4, 'PAYING GUST', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`did`, `dname`, `sid`, `status`) VALUES
(5, 'Kasaragod', 13, 1),
(4, 'Kannur', 13, 1),
(3, 'Idukki', 13, 1),
(2, 'Ernakulam', 13, 1),
(1, 'Alappuzha', 13, 1),
(6, 'Kollam', 13, 1),
(7, 'Kottayam', 13, 1),
(8, 'Kozhikode', 13, 1),
(9, 'Malappuram', 13, 1),
(10, 'Palakkad', 13, 1),
(11, 'Pathanamthitta', 13, 1),
(12, 'Thiruvananthapuram', 13, 1),
(13, 'Thrissur', 13, 1),
(14, 'Wayanad', 13, 1),
(15, 'Bagalkot', 12, 1),
(16, 'Bangalore', 12, 1),
(17, 'Bangalore Rural', 12, 1),
(18, 'Belgaum', 12, 1),
(19, 'Bellary', 12, 1),
(20, 'Bidar', 12, 1),
(21, 'Bijapur', 12, 1),
(22, 'Chamarajanagar', 12, 1),
(23, 'Chikkaballapura', 12, 1),
(24, 'Chikmagalur', 12, 1),
(25, 'Chitradurga', 12, 1),
(26, 'Dakshina Kannada', 12, 1),
(27, 'Davanagere', 12, 1),
(28, 'Dharwad', 12, 1),
(29, 'Gadag', 12, 1),
(30, 'Gulbarga', 12, 1),
(31, 'Hassan', 12, 1),
(32, 'Haveri', 12, 1),
(33, 'Kodagu', 12, 1),
(34, 'Kolar', 12, 1),
(35, 'Koppal', 12, 1),
(36, 'Mandya', 12, 1),
(37, 'Mysore', 12, 1),
(38, 'Raichur', 12, 1),
(39, 'Ramanagara', 12, 1),
(40, 'Shimoga', 12, 1),
(41, 'Tumkur', 12, 1),
(42, 'Udupi', 12, 1),
(43, 'Uttara Kannada', 12, 1),
(44, 'Yadgir', 12, 1),
(45, 'Anantapur', 1, 1),
(46, 'Chittoor', 1, 1),
(47, 'East Godavari', 1, 1),
(48, 'Guntur', 1, 1),
(49, 'Krishna', 1, 1),
(50, 'Kurnool', 1, 1),
(51, 'Prakasam', 1, 1),
(52, 'Sri Potti Sriramulu Nellore', 1, 1),
(53, 'Srikakulam', 1, 1),
(54, 'Visakhapatnam', 1, 1),
(55, 'Vizianagaram', 1, 1),
(56, 'West Godavari', 1, 1),
(57, 'YSR (Kadapa)', 1, 1),
(58, 'Anjaw', 2, 1),
(59, 'Changlang', 2, 1),
(60, 'Dibang Valley', 2, 1),
(61, 'East Kameng', 2, 1),
(62, 'East Siang', 2, 1),
(63, 'Kurung Kumey', 2, 1),
(64, 'Lohit', 2, 1),
(65, 'Longding', 2, 1),
(66, 'Lower Dibang Valley', 2, 1),
(67, 'Lower Subansiri', 2, 1),
(68, 'Papum Pare', 2, 1),
(69, 'Tawang', 2, 1),
(70, 'Tirap', 2, 1),
(71, 'Upper Siang', 2, 1),
(72, 'Upper Subansiri', 2, 1),
(73, 'West Kameng', 2, 1),
(74, 'West Siang', 2, 1),
(75, 'Baksa', 3, 1),
(76, 'Barpeta', 3, 1),
(77, 'Bongaigaon', 3, 1),
(78, 'Cachar', 3, 1),
(79, 'Chirang', 3, 1),
(80, 'Darrang', 3, 1),
(81, 'Dhemaji', 3, 1),
(82, 'Dhubri', 3, 1),
(83, 'Dibrugarh', 3, 1),
(84, 'Dima Hasao', 3, 1),
(85, 'Goalpara', 3, 1),
(86, 'Golaghat', 3, 1),
(87, 'Hailakandi', 3, 1),
(88, 'Jorhat', 3, 1),
(89, 'Kamrup', 3, 1),
(90, 'Kamrup Metropolitan', 3, 1),
(91, 'Karbi Anglong', 3, 1),
(92, 'Karimganj', 3, 1),
(93, 'Kokrajhar', 3, 1),
(94, 'Lakhimpur', 3, 1),
(95, 'Morigaon', 3, 1),
(96, 'Nagaon', 3, 1),
(97, 'Nalbari', 3, 1),
(98, 'Sivasagar', 3, 1),
(99, 'Sonitpur', 3, 1),
(100, 'Tinsukia', 3, 1),
(101, 'Udalguri', 3, 1),
(102, 'Biswanath', 3, 1),
(103, 'Charaideo', 3, 1),
(104, 'Hojai', 3, 1),
(105, 'Majuli', 3, 1),
(106, 'South Salamara-Mankachar', 3, 1),
(107, 'West Karbi Anglong', 3, 1),
(108, 'Araria', 4, 1),
(109, 'Arwal', 4, 1),
(110, 'Aurangabad', 4, 1),
(111, 'Banka', 4, 1),
(112, 'Begusarai', 4, 1),
(113, 'Bhagalpur', 4, 1),
(114, 'Bhojpur', 4, 1),
(115, 'Buxar', 4, 1),
(116, 'Darbhanga', 4, 1),
(117, 'East Champaran', 4, 1),
(118, 'Gaya', 4, 1),
(119, 'Gopalganj', 4, 1),
(120, 'Jamui', 4, 1),
(121, 'Jehanabad', 4, 1),
(122, 'Kaimur', 4, 1),
(123, 'Katihar', 4, 1),
(124, 'Khagaria', 4, 1),
(125, 'Kishanganj', 4, 1),
(126, 'Lakhisarai', 4, 1),
(127, 'Madhepura', 4, 1),
(128, 'Madhubani', 4, 1),
(129, 'Munger', 4, 1),
(130, 'Muzaffarpur', 4, 1),
(131, 'Nalanda', 4, 1),
(132, 'Nawada', 4, 1),
(133, 'Patna', 4, 1),
(134, 'Purnia', 4, 1),
(135, 'Rohtas', 4, 1),
(136, 'Saharsa', 4, 1),
(137, 'Samastipur', 4, 1),
(138, 'Saran', 4, 1),
(139, 'Sheikhpura', 4, 1),
(140, 'Sheohar', 4, 1),
(141, 'Sitamarhi', 4, 1),
(142, 'Siwan', 4, 1),
(143, 'Supaul', 4, 1),
(144, 'Vaishali', 4, 1),
(145, 'West Champaran', 4, 1),
(146, 'Balod', 5, 1),
(147, 'Baloda Bazar', 5, 1),
(148, 'Balrampur', 5, 1),
(149, 'Bastar', 5, 1),
(150, 'Bemetara', 5, 1),
(151, 'Bijapur', 5, 1),
(152, 'Bilaspur', 5, 1),
(153, 'Dantewada', 5, 1),
(154, 'Dhamtari', 5, 1),
(155, 'Durg', 5, 1),
(156, 'Gariaband', 5, 1),
(157, 'Janjgir Champa', 5, 1),
(158, 'Jashpur', 5, 1),
(159, 'Kabirdham', 5, 1),
(160, 'Kanker', 5, 1),
(161, 'Kondagaon', 5, 1),
(162, 'Korba', 5, 1),
(163, 'Koriya', 5, 1),
(164, 'Mahasamund', 5, 1),
(165, 'Mungeli', 5, 1),
(166, 'Narayanpur', 5, 1),
(167, 'Raigarh', 5, 1),
(168, 'Raipur', 5, 1),
(169, 'Rajnandgaon', 5, 1),
(170, 'Sukma', 5, 1),
(171, 'Surajpur', 5, 1),
(172, 'Surguja', 5, 1),
(173, 'North Goa', 6, 1),
(174, 'South Goa', 6, 1),
(175, 'Ahmedabad', 7, 1),
(176, 'Amreli', 7, 1),
(177, 'Anand', 7, 1),
(178, 'Aravalli', 7, 1),
(179, 'Banaskantha', 7, 1),
(180, 'Botad', 7, 1),
(181, 'Bharuch', 7, 1),
(182, 'Bhavnagar', 7, 1),
(183, 'Chhota Udaipur', 7, 1),
(184, 'Dahod', 7, 1),
(185, 'Devbhoomi Dwarka', 7, 1),
(186, 'Gandhinagar', 7, 1),
(187, 'Gir Somnath', 7, 1),
(188, 'Jamnagar', 7, 1),
(189, 'Junagadh', 7, 1),
(190, 'Kheda', 7, 1),
(191, 'Kutch', 7, 1),
(192, 'Mahisagar', 7, 1),
(193, 'Mahesana', 7, 1),
(194, 'Morbi', 7, 1),
(195, 'Narmada', 7, 1),
(196, 'Navsari', 7, 1),
(197, 'Panchmahal', 7, 1),
(198, 'Patan', 7, 1),
(199, 'Porbandar', 7, 1),
(200, 'Rajkot', 7, 1),
(201, 'Sabarkantha', 7, 1),
(202, 'Surat', 7, 1),
(203, 'Surendranagar', 7, 1),
(204, 'Tapi', 7, 1),
(205, 'The Dangs', 7, 1),
(206, 'Vadodara', 7, 1),
(207, 'Valsad', 7, 1),
(208, 'Ambala', 8, 1),
(209, 'Bhiwani', 8, 1),
(210, 'Faridabad', 8, 1),
(211, 'Fatehabad', 8, 1),
(212, 'Gurgaon', 8, 1),
(213, 'Hisar', 8, 1),
(214, 'Jhajjar', 8, 1),
(215, 'Jind', 8, 1),
(216, 'Kaithal', 8, 1),
(217, 'Karnal', 8, 1),
(218, 'Kurukshetra', 8, 1),
(219, 'Mahendragarh', 8, 1),
(220, 'Mewat', 8, 1),
(221, 'Palwal', 8, 1),
(222, 'Panchkula', 8, 1),
(223, 'Panipat', 8, 1),
(224, 'Rewari', 8, 1),
(225, 'Rohtak', 8, 1),
(226, 'Sirsa', 8, 1),
(227, 'Sonipat', 8, 1),
(228, 'Yamunanagar', 8, 1),
(229, 'Charkhi Dadri', 8, 1),
(230, 'Bilaspur', 9, 1),
(231, 'Chamba', 9, 1),
(232, 'Hamirpur', 9, 1),
(233, 'Kangra', 9, 1),
(234, 'Kinnaur', 9, 1),
(235, 'Kullu', 9, 1),
(236, 'Lahaul and Spiti', 9, 1),
(237, 'Mandi', 9, 1),
(238, 'Shimla', 9, 1),
(239, 'Sirmaur', 9, 1),
(240, 'Solan', 9, 1),
(241, 'Una', 9, 1),
(242, 'Anantnag', 10, 1),
(243, 'Badgam', 10, 1),
(244, 'Bandipora', 10, 1),
(245, 'Baramulla', 10, 1),
(246, 'Doda', 10, 1),
(247, 'Ganderbal', 10, 1),
(248, 'Jammu', 10, 1),
(249, 'Kargil', 10, 1),
(250, 'Kathua', 10, 1),
(251, 'Kishtwar', 10, 1),
(252, 'Kulgam', 10, 1),
(253, 'Kupwara', 10, 1),
(254, 'Leh', 10, 1),
(255, 'Poonch', 10, 1),
(256, 'Pulwama', 10, 1),
(257, 'Rajouri', 10, 1),
(258, 'Ramban', 10, 1),
(259, 'Reasi', 10, 1),
(260, 'Samba', 10, 1),
(261, 'Shopian', 10, 1),
(262, 'Srinagar', 10, 1),
(263, 'Udhampur', 10, 1),
(264, 'Bokaro', 11, 1),
(265, 'Chatra', 11, 1),
(266, 'Deoghar', 11, 1),
(267, 'Dhanbad', 11, 1),
(268, 'Dumka', 11, 1),
(269, 'East Singhbhum', 11, 1),
(270, 'Garhwa', 11, 1),
(271, 'Giridih', 11, 1),
(272, 'Godda', 11, 1),
(273, 'Gumla', 11, 1),
(274, 'Hazaribagh', 11, 1),
(275, 'Jamtara', 11, 1),
(276, 'Khunti', 11, 1),
(277, 'Koderma', 11, 1),
(278, 'Latehar', 11, 1),
(279, 'Lohardaga', 11, 1),
(280, 'Pakur', 11, 1),
(281, 'Palamu', 11, 1),
(282, 'Ramgarh', 11, 1),
(283, 'Ranchi', 11, 1),
(284, 'Sahibganj', 11, 1),
(285, 'Saraikela Kharsawan', 11, 1),
(286, 'Simdega', 11, 1),
(287, 'West Singhbhum', 11, 1),
(288, 'Agar Malwa', 14, 1),
(289, 'Alirajpur', 14, 1),
(290, 'Anuppur', 14, 1),
(291, 'Ashoknagar', 14, 1),
(292, 'Balaghat', 14, 1),
(293, 'Barwani', 14, 1),
(294, 'Betul', 14, 1),
(295, 'Bhind', 14, 1),
(296, 'Bhopal', 14, 1),
(297, 'Burhanpur', 14, 1),
(298, 'Chhatarpur', 14, 1),
(299, 'Chhindwara', 14, 1),
(300, 'Damoh', 14, 1),
(301, 'Datia', 14, 1),
(302, 'Dewas', 14, 1),
(303, 'Dhar', 14, 1),
(304, 'Dindori', 14, 1),
(305, 'East Nimar', 14, 1),
(306, 'Guna', 14, 1),
(307, 'Gwalior', 14, 1),
(308, 'Harda', 14, 1),
(309, 'Hoshangabad', 14, 1),
(310, 'Indore', 14, 1),
(311, 'Jabalpur', 14, 1),
(312, 'Jhabua', 14, 1),
(313, 'Katni', 14, 1),
(314, 'Mandla', 14, 1),
(315, 'Mandsaur', 14, 1),
(316, 'Morena', 14, 1),
(317, 'Narsinghpur', 14, 1),
(318, 'Neemuch', 14, 1),
(319, 'Panna', 14, 1),
(320, 'Raisen', 14, 1),
(321, 'Rajgarh', 14, 1),
(322, 'Ratlam', 14, 1),
(323, 'Rewa', 14, 1),
(324, 'Sagar', 14, 1),
(325, 'Satna', 14, 1),
(326, 'Sehore', 14, 1),
(327, 'Seoni', 14, 1),
(328, 'Shahdol', 14, 1),
(329, 'Shajapur', 14, 1),
(330, 'Sheopur', 14, 1),
(331, 'Shivpuri', 14, 1),
(332, 'Sidhi', 14, 1),
(333, 'Singrauli', 14, 1),
(334, 'Tikamgarh', 14, 1),
(335, 'Ujjain', 14, 1),
(336, 'Umaria', 14, 1),
(337, 'Vidisha', 14, 1),
(338, 'West Nimar', 14, 1),
(339, 'Ahmednagar', 15, 1),
(340, 'Akola', 15, 1),
(341, 'Amravati', 15, 1),
(342, 'Aurangabad', 15, 1),
(343, 'Beed', 15, 1),
(344, 'Bhandara', 15, 1),
(345, 'Buldhana', 15, 1),
(346, 'Chandrapur', 15, 1),
(347, 'Dhule', 15, 1),
(348, 'Gadchiroli', 15, 1),
(349, 'Gondia', 15, 1),
(350, 'Hingoli', 15, 1),
(351, 'Jalgaon', 15, 1),
(352, 'Jalna', 15, 1),
(353, 'Kolhapur', 15, 1),
(354, 'Latur', 15, 1),
(355, 'Mumbai City', 15, 1),
(356, 'Mumbai Suburban', 15, 1),
(357, 'Nagpur', 15, 1),
(358, 'Nanded', 15, 1),
(359, 'Nandurbar', 15, 1),
(360, 'Nashik', 15, 1),
(361, 'Osmanabad', 15, 1),
(362, 'Parbhani', 15, 1),
(363, 'Pune', 15, 1),
(364, 'Raigad', 15, 1),
(365, 'Ratnagiri', 15, 1),
(366, 'Sangli', 15, 1),
(367, 'Satara', 15, 1),
(368, 'Sindhudurg', 15, 1),
(369, 'Solapur', 15, 1),
(370, 'Thane', 15, 1),
(371, 'Wardha', 15, 1),
(372, 'Washim', 15, 1),
(373, 'Yavatmal', 15, 1),
(374, 'Palghar', 15, 1),
(375, 'Bishnupur', 16, 1),
(376, 'Chandel', 16, 1),
(377, 'Churachandpur', 16, 1),
(378, 'Imphal East', 16, 1),
(379, 'Imphal West', 16, 1),
(380, 'Senapati', 16, 1),
(381, 'Tamenglong', 16, 1),
(382, 'Thoubal', 16, 1),
(383, 'Ukhrul', 16, 1),
(384, 'Jiribam', 16, 1),
(385, 'Kangpokpi', 16, 1),
(386, 'Kakching district', 16, 1),
(387, 'Tengnoupal', 16, 1),
(388, 'Kamjong', 16, 1),
(389, 'Noney', 16, 1),
(390, 'Pherzawl', 16, 1),
(391, 'East Garo Hills', 17, 1),
(392, 'West Garo Hills', 17, 1),
(393, 'North Garo Hills', 17, 1),
(394, 'South Garo Hills', 17, 1),
(395, 'South West Garo Hills', 17, 1),
(396, 'East Jaintia Hills', 17, 1),
(397, 'West Jaintia Hills', 17, 1),
(398, 'East Khasi Hills', 17, 1),
(399, 'South West Khasi Hills', 17, 1),
(400, 'West Khasi Hills', 17, 1),
(401, 'Ri-Bhoi', 17, 1),
(402, 'Aizawl', 18, 1),
(403, 'Champhai', 18, 1),
(404, 'Kolasib', 18, 1),
(405, 'Lawngtlai', 18, 1),
(406, 'Lunglei', 18, 1),
(407, 'Mamit', 18, 1),
(408, 'Saiha', 18, 1),
(409, 'Serchhip', 18, 1),
(410, 'Dimapur', 19, 1),
(411, 'Kiphire', 19, 1),
(412, 'Kohima', 19, 1),
(413, 'Longleng', 19, 1),
(414, 'Mokokchung', 19, 1),
(415, 'Mon', 19, 1),
(416, 'Peren', 19, 1),
(417, 'Phek', 19, 1),
(418, 'Tuensang', 19, 1),
(419, 'Wokha', 19, 1),
(420, 'Zunheboto', 19, 1),
(421, 'Angul', 20, 1),
(422, 'Balangir', 20, 1),
(423, 'Baleshwar', 20, 1),
(424, 'Bargarh', 20, 1),
(425, 'Bhadrak', 20, 1),
(426, 'Boudh', 20, 1),
(427, 'Cuttack', 20, 1),
(428, 'Debagarh', 20, 1),
(429, 'Dhenkanal', 20, 1),
(430, 'Gajapati', 20, 1),
(431, 'Ganjam', 20, 1),
(432, 'Jagatsinghpur', 20, 1),
(433, 'Jajpur', 20, 1),
(434, 'Jharsuguda', 20, 1),
(435, 'Kalahandi', 20, 1),
(436, 'Kandhamal', 20, 1),
(437, 'Kendrapara', 20, 1),
(438, 'Kendujhar', 20, 1),
(439, 'Khordha', 20, 1),
(440, 'Koraput', 20, 1),
(441, 'Malkangiri', 20, 1),
(442, 'Mayurbhanj', 20, 1),
(443, 'Nabarangapur', 20, 1),
(444, 'Nayagarh', 20, 1),
(445, 'Nuapada', 20, 1),
(446, 'Puri', 20, 1),
(447, 'Rayagada', 20, 1),
(448, 'Sambalpur', 20, 1),
(449, 'Subarnapur', 20, 1),
(450, 'Sundergarh', 20, 1),
(451, 'Amritsar', 21, 1),
(452, 'Barnala', 21, 1),
(453, 'Bathinda', 21, 1),
(454, 'Fazilka', 21, 1),
(455, 'Faridkot', 21, 1),
(456, 'Fatehgarh Sahib', 21, 1),
(457, 'Firozpur', 21, 1),
(458, 'Gurdaspur', 21, 1),
(459, 'Hoshiarpur', 21, 1),
(460, 'Jalandhar', 21, 1),
(461, 'Kapurthala', 21, 1),
(462, 'Ludhiana', 21, 1),
(463, 'Mansa', 21, 1),
(464, 'Moga', 21, 1),
(465, 'Mohali', 21, 1),
(466, 'Muktsar', 21, 1),
(467, 'Pathankot', 21, 1),
(468, 'Patiala', 21, 1),
(469, 'Rupnagar', 21, 1),
(470, 'Sangrur', 21, 1),
(471, 'Shahid Bhagat Singh Nagar', 21, 1),
(472, 'Tarn Taran', 21, 1),
(473, 'Ajmer', 22, 1),
(474, 'Alwar', 22, 1),
(475, 'Banswara', 22, 1),
(476, 'Baran', 22, 1),
(477, 'Barmer', 22, 1),
(478, 'Bharatpur', 22, 1),
(479, 'Bhilwara', 22, 1),
(480, 'Bikaner', 22, 1),
(481, 'Bundi', 22, 1),
(482, 'Chittaurgarh', 22, 1),
(483, 'Churu', 22, 1),
(484, 'Dausa', 22, 1),
(485, 'Dhaulpur', 22, 1),
(486, 'Dungarpur', 22, 1),
(487, 'Ganganagar', 22, 1),
(488, 'Hanumangarh', 22, 1),
(489, 'Jaipur', 22, 1),
(490, 'Jaisalmer', 22, 1),
(491, 'Jalor', 22, 1),
(492, 'Jhalawar', 22, 1),
(493, 'Jhunjhunun', 22, 1),
(494, 'Jodhpur', 22, 1),
(495, 'Karauli', 22, 1),
(496, 'Kota', 22, 1),
(497, 'Nagaur', 22, 1),
(498, 'Pali', 22, 1),
(499, 'Pratapgarh', 22, 1),
(500, 'Rajsamand', 22, 1),
(501, 'Sawai Madhopur', 22, 1),
(502, 'Sikar', 22, 1),
(503, 'Sirohi', 22, 1),
(504, 'Tonk', 22, 1),
(505, 'Udaipur', 22, 1),
(506, 'East Sikkim', 23, 1),
(507, 'North Sikkim', 23, 1),
(508, 'South Sikkim', 23, 1),
(509, 'West Sikkim', 23, 1),
(510, 'Ariyalur', 24, 1),
(511, 'Chennai', 24, 1),
(512, 'Coimbatore', 24, 1),
(513, 'Cuddalore', 24, 1),
(514, 'Dharmapuri', 24, 1),
(515, 'Dindigul', 24, 1),
(516, 'Erode', 24, 1),
(517, 'Kanchipuram', 24, 1),
(518, 'Kanyakumari', 24, 1),
(519, 'Karur', 24, 1),
(520, 'Krishnagiri', 24, 1),
(521, 'Madurai', 24, 1),
(522, 'Nagapattinam', 24, 1),
(523, 'Namakkal', 24, 1),
(524, 'Perambalur', 24, 1),
(525, 'Pudukkottai', 24, 1),
(526, 'Ramanathapuram', 24, 1),
(527, 'Salem', 24, 1),
(528, 'Sivaganga', 24, 1),
(529, 'Thanjavur', 24, 1),
(530, 'The Nilgiris', 24, 1),
(531, 'Theni', 24, 1),
(532, 'Thiruvallur', 24, 1),
(533, 'Thiruvarur', 24, 1),
(534, 'Thoothukudi', 24, 1),
(535, 'Tiruchirappalli', 24, 1),
(536, 'Tirunelveli', 24, 1),
(537, 'Tirupur', 24, 1),
(538, 'Tiruvannamalai', 24, 1),
(539, 'Vellore', 24, 1),
(540, 'Viluppuram', 24, 1),
(541, 'Virudhunagar', 24, 1),
(542, 'Dhalai', 26, 1),
(543, 'Gomati', 26, 1),
(544, 'Khowai', 26, 1),
(545, 'North Tripura', 26, 1),
(546, 'Sepahijala', 26, 1),
(547, 'South Tripura', 26, 1),
(548, 'Unakoti', 26, 1),
(549, 'West Tripura', 26, 1),
(550, 'Agra', 27, 1),
(551, 'Aligarh', 27, 1),
(552, 'Allahabad', 27, 1),
(553, 'Ambedkar Nagar', 27, 1),
(554, 'Amethi', 27, 1),
(555, 'Amroha', 27, 1),
(556, 'Auraiya', 27, 1),
(557, 'Azamgarh', 27, 1),
(558, 'Baghpat', 27, 1),
(559, 'Bahraich', 27, 1),
(560, 'Ballia', 27, 1),
(561, 'Balrampur', 27, 1),
(562, 'Banda', 27, 1),
(563, 'Barabanki', 27, 1),
(564, 'Bareilly', 27, 1),
(565, 'Basti', 27, 1),
(566, 'Bijnor', 27, 1),
(567, 'Budaun', 27, 1),
(568, 'Bulandshahr', 27, 1),
(569, 'Chandauli', 27, 1),
(570, 'Chitrakoot', 27, 1),
(571, 'Deoria', 27, 1),
(572, 'Etah', 27, 1),
(573, 'Etawah', 27, 1),
(574, 'Faizabad', 27, 1),
(575, 'Farrukhabad', 27, 1),
(576, 'Fatehpur', 27, 1),
(577, 'Firozabad', 27, 1),
(578, 'Gautam Buddha Nagar', 27, 1),
(579, 'Ghaziabad', 27, 1),
(580, 'Ghazipur', 27, 1),
(581, 'Gonda', 27, 1),
(582, 'Gorakhpur', 27, 1),
(583, 'Hamirpur', 27, 1),
(584, 'Hardoi', 27, 1),
(585, 'Hathras (Mahamaya Nagar)', 27, 1),
(586, 'Jalaun', 27, 1),
(587, 'Jaunpur', 27, 1),
(588, 'Jhansi', 27, 1),
(589, 'Jyotiba Phule Nagar', 27, 1),
(590, 'Kannauj', 27, 1),
(591, 'Kanpur Dehat (Ramabai Nagar)', 27, 1),
(592, 'Kanpur Nagar', 27, 1),
(593, 'Kanshiram Nagar', 27, 1),
(594, 'Kaushambi', 27, 1),
(595, 'Kheri', 27, 1),
(596, 'Kushinagar', 27, 1),
(597, 'Lalitpur', 27, 1),
(598, 'Lucknow', 27, 1),
(599, 'Maharajganj', 27, 1),
(600, 'Mahoba', 27, 1),
(601, 'Mainpuri', 27, 1),
(602, 'Mathura', 27, 1),
(603, 'Mau', 27, 1),
(604, 'Meerut', 27, 1),
(605, 'Mirzapur', 27, 1),
(606, 'Moradabad', 27, 1),
(607, 'Muzaffarnagar', 27, 1),
(608, 'Panchsheel Nagar district (Hapur)', 27, 1),
(609, 'Pilibhit', 27, 1),
(610, 'Pratapgarh', 27, 1),
(611, 'Raebareli', 27, 1),
(612, 'Rampur', 27, 1),
(613, 'Saharanpur', 27, 1),
(614, 'Sant Kabir Nagar', 27, 1),
(615, 'Sant Ravidas Nagar', 27, 1),
(616, 'Shahjahanpur', 27, 1),
(617, 'Shamli', 27, 1),
(618, 'Shravasti', 27, 1),
(619, 'Siddharthnagar', 27, 1),
(620, 'Sitapur', 27, 1),
(621, 'Sonbhadra', 27, 1),
(622, 'Sultanpur', 27, 1),
(623, 'Unnao', 27, 1),
(624, 'Varanasi', 27, 1),
(625, 'Almora', 28, 1),
(626, 'Bageshwar', 28, 1),
(627, 'Chamoli', 28, 1),
(628, 'Champawat', 28, 1),
(629, 'Dehradun', 28, 1),
(630, 'Haridwar', 28, 1),
(631, 'Nainital', 28, 1),
(632, 'Pauri Garhwal', 28, 1),
(633, 'Pithoragarh', 28, 1),
(634, 'Rudraprayag', 28, 1),
(635, 'Tehri Garhwal', 28, 1),
(636, 'Udham Singh Nagar', 28, 1),
(637, 'Uttarkashi', 28, 1),
(638, 'Bankura', 29, 1),
(639, 'Bardhaman', 29, 1),
(640, 'Birbhum', 29, 1),
(641, 'Cooch Behar', 29, 1),
(642, 'Dakshin Dinajpur', 29, 1),
(643, 'Darjeeling', 29, 1),
(644, 'Hooghly', 29, 1),
(645, 'Howrah', 29, 1),
(646, 'Jalpaiguri', 29, 1),
(647, 'Kolkata', 29, 1),
(648, 'Malda', 29, 1),
(649, 'Murshidabad', 29, 1),
(650, 'Nadia', 29, 1),
(651, 'North 24 Parganas', 29, 1),
(652, 'Paschim Medinipur', 29, 1),
(653, 'Purba Medinipur', 29, 1),
(654, 'Purulia', 29, 1),
(655, 'South 24 Parganas', 29, 1),
(656, 'Uttar Dinajpur', 29, 1),
(657, 'Alipurduar', 29, 1),
(658, 'Burdwan', 29, 1),
(659, 'Jhargram', 29, 1),
(660, 'Kalimpong', 29, 1),
(661, 'West Burdwan', 29, 1),
(662, 'Adilabad', 25, 1),
(663, 'Bhadradri Kothagudem', 25, 1),
(664, 'Hyderabad', 25, 1),
(665, 'Jagtial', 25, 1),
(666, 'Jangaon', 25, 1),
(667, 'Jayashankar Bhupalpally', 25, 1),
(668, 'Jogulamba Gadwal', 25, 1),
(669, 'Kamareddy', 25, 1),
(670, 'Karimnagar', 25, 1),
(671, 'Khammam', 25, 1),
(672, 'Kumuram Bheem', 25, 1),
(673, 'Mahabubabad', 25, 1),
(674, 'Mahabubnagar', 25, 1),
(675, 'Mancherial', 25, 1),
(676, 'Medak', 25, 1),
(677, 'Medchal', 25, 1),
(678, 'Mulugu', 25, 1),
(679, 'Nagarkurnool', 25, 1),
(680, 'Nalgonda', 25, 1),
(681, 'Narayanpet', 25, 1),
(682, 'Nirmal', 25, 1),
(683, 'Nizamabad', 25, 1),
(684, 'Peddapalli', 25, 1),
(685, 'Rajanna Sircilla', 25, 1),
(686, 'Rangareddy', 25, 1),
(687, 'Sangareddy', 25, 1),
(688, 'Siddipet', 25, 1),
(689, 'Suryapet', 25, 1),
(690, 'Vikarabad', 25, 1),
(691, 'Wanaparthy', 25, 1),
(692, 'Warangal (Rural)', 25, 1),
(693, 'Warangal (Urban)', 25, 1),
(694, 'Yadadri Bhuvanagiri', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `home_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `home_name` char(60) NOT NULL,
  `address` char(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `pincode` int(11) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `discription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hostel`
--

CREATE TABLE `tbl_hostel` (
  `hostel_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `hostel_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` char(15) NOT NULL,
  `pincode` char(20) NOT NULL,
  `longitude` char(50) NOT NULL,
  `latitude` char(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `discription` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `hotel_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `pincode` int(20) NOT NULL,
  `longitude` int(50) NOT NULL,
  `latitude` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`hotel_id`, `h_id`, `p_id`, `log_id`, `hotel_name`, `address`, `contact`, `pincode`, `longitude`, `latitude`, `image`, `discription`, `status`) VALUES
(1, 1, 1, 11, 'Hotel Royal Empire', 'Hotel Royal Empire', 2147483647, 686513, 2147483647, 2147483647, '1557656960download (2).jpg', 'Near by koottikal junction', 0),
(2, 2, 2, 11, 'Hotel Swagath', 'Hotel Swagathgoa panaji', 2147483647, 696586, 2147483647, 2147483647, '1557983074download.jpg', 'Near by panji', 1),
(3, 3, 3, 2, 'Hotel pepe', 'Hotel pepechenaitown junctiontamil nadu', 2147483647, 698956, 2147483647, 2147483647, '1557984421ISibopmowuh1e11000000000.jpg', 'Near by town junction', 1),
(4, 4, 4, 13, 'Hotel Vazhiyoram', 'Hotel VazhiyoramIratty POIrattykannur', 2147483647, 686563, 0, 0, '1557989252holiday-inn-the-colony-4629618286-4x3.jpg', 'Near by iratty stand', 1),
(5, 5, 5, 2, 'Hotel Njanbhal', 'Hotel Njanbhalmurudeswar p okavalypooramkarnadaka', 2147483647, 698985, 2147483647, 2147483647, '1557992047ISibopmowuh1e11000000000.jpg', 'Near by murudeswar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotelbooking`
--

CREATE TABLE `tbl_hotelbooking` (
  `bokid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `hrid` int(11) NOT NULL,
  `logid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `norooms` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hotelbooking`
--

INSERT INTO `tbl_hotelbooking` (`bokid`, `hid`, `hrid`, `logid`, `startdate`, `enddate`, `norooms`, `amount`, `cardno`, `status`) VALUES
(1, 1, 1, 6, '2019-05-12', '2019-05-13', 1, 600, '4545454545454545', 0),
(2, 1, 2, 6, '2019-05-14', '2019-05-16', 2, 3000, '4545454545454545', 0),
(3, 1, 1, 6, '2019-05-14', '2019-05-16', 2, 1200, '4545454545454545', 0),
(5, 1, 1, 6, '2019-05-14', '2019-05-15', 2, 1200, '4545454545454545', 0),
(7, 1, 1, 6, '2019-05-16', '2019-05-18', 2, 2400, '6445454545454545', 0),
(8, 1, 3, 6, '2019-05-16', '2019-05-17', 2, 1600, '6445454545454545', 0),
(9, 2, 1, 6, '2019-05-17', '2019-05-18', 1, 1200, '4545454545454545', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_h_room_dtls`
--

CREATE TABLE `tbl_h_room_dtls` (
  `hr_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_h_room_dtls`
--

INSERT INTO `tbl_h_room_dtls` (`hr_id`, `h_id`, `r_id`, `no_of_room`, `rate`, `status`) VALUES
(1, 1, 1, 30, 600, 1),
(2, 1, 2, 30, 750, 1),
(3, 1, 3, 30, 800, 1),
(4, 1, 4, 30, 1000, 1),
(5, 2, 1, 50, 1200, 1),
(6, 2, 2, 50, 1300, 1),
(7, 2, 3, 60, 1500, 1),
(8, 2, 4, 60, 1700, 1),
(9, 3, 1, 100, 750, 1),
(10, 3, 2, 120, 800, 1),
(11, 3, 3, 100, 1000, 1),
(12, 3, 4, 100, 1200, 1),
(13, 4, 1, 65, 850, 1),
(14, 4, 2, 50, 950, 1),
(15, 4, 3, 90, 1000, 1),
(16, 4, 4, 35, 1100, 1),
(17, 5, 1, 80, 800, 1),
(18, 5, 2, 50, 950, 1),
(19, 5, 3, 50, 1000, 1),
(20, 5, 4, 50, 1300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pg`
--

CREATE TABLE `tbl_pg` (
  `pg_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `pg_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `pincode` int(20) NOT NULL,
  `longitude` int(50) NOT NULL,
  `latitude` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `p_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`p_id`, `log_id`, `c_id`) VALUES
(1, 11, 3),
(2, 11, 3),
(3, 2, 3),
(4, 13, 3),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roomtyp`
--

CREATE TABLE `tbl_roomtyp` (
  `r_id` int(11) NOT NULL,
  `r_type` char(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roomtyp`
--

INSERT INTO `tbl_roomtyp` (`r_id`, `r_type`, `status`) VALUES
(1, 'SINGLE NON A/C', 1),
(2, 'SINGLE A/C', 1),
(3, 'DOUBLE NON A/C', 1),
(4, 'DOUBLE  A/C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `sname`, `status`) VALUES
(1, 'Andhra Pradesh', '1'),
(2, 'Arunachal Pradesh', '1'),
(3, 'Assam', '1'),
(4, 'Bihar', '1'),
(5, 'Chhattisgarh', '1'),
(6, 'Goa', '1'),
(7, 'Gujarat', '1'),
(8, 'Haryana', '1'),
(9, 'Himachal Pradesh', '1'),
(10, 'Jammu and Kashmir', '1'),
(11, 'Jharkhand', '1'),
(12, 'Karnataka', '1'),
(13, 'Kerala', '1'),
(14, 'Madhya Pradesh', '1'),
(15, 'Maharashtra', '1'),
(16, 'Manipur', '1'),
(17, 'Meghalaya', '1'),
(18, 'Mizoram', '1'),
(19, 'Nagaland', '1'),
(20, 'Odisha', '1'),
(21, 'Punjab', '1'),
(22, 'Rajasthan', '1'),
(23, 'Sikkim', '1'),
(24, 'Tamil Nadu', '1'),
(25, 'Telangana', '1');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `int_status` int(11) NOT NULL,
  `apr_status` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `file1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `status`, `int_status`, `apr_status`, `file`, `file1`) VALUES
(1, 1, 1, 1, '', ''),
(2, 1, 1, 0, '', ''),
(3, 1, 1, 1, '', ''),
(4, 1, 1, 0, '', ''),
(5, 0, 0, 1, '', ''),
(6, 0, 0, 0, '', ''),
(7, 0, 0, 0, '1556079257rbs.png', ''),
(8, 0, 0, 0, '1556079782download (1).png', ''),
(9, 0, 0, 0, '1556079914main-qimg-f02c64cc69f06fd6a2e13b0257e03150.jpg', ''),
(10, 0, 0, 0, '1556080071crumpled-paper-4k-paper-texture-old-paper-white-paper.jpg', ''),
(11, 0, 0, 0, '1556080116crumpled-paper-4k-paper-texture-old-paper-white-paper.jpg', ''),
(12, 0, 0, 0, '1556080136261-2617401_high-school-graduation-cap-png-72576-degree-graduation-silhouette.png', ''),
(13, 0, 0, 0, '1556080243pulsepositionmodulation_1308732341.jpg', '1556080243main-qimg-f02c64cc69f06fd6a2e13b0257e03150.jpg'),
(14, 0, 0, 0, '1556082971images (2).jpg', '1556082971images (2).jpg'),
(15, 0, 0, 0, '1556083038kisspng-knowledge-organization-concept-education-human-res-flat-creative-pen-5aa5d5dbe59fa', '1556083038footerDesign.png');

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
-- Indexes for table `main_hotel_registration`
--
ALTER TABLE `main_hotel_registration`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `owner_reg`
--
ALTER TABLE `owner_reg`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bank_details`
--
ALTER TABLE `tbl_bank_details`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `tbl_hostel`
--
ALTER TABLE `tbl_hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `tbl_hotelbooking`
--
ALTER TABLE `tbl_hotelbooking`
  ADD PRIMARY KEY (`bokid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `tbl_h_room_dtls`
--
ALTER TABLE `tbl_h_room_dtls`
  ADD PRIMARY KEY (`hr_id`);

--
-- Indexes for table `tbl_pg`
--
ALTER TABLE `tbl_pg`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_roomtyp`
--
ALTER TABLE `tbl_roomtyp`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_reg`
--
ALTER TABLE `cust_reg`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `main_hotel_registration`
--
ALTER TABLE `main_hotel_registration`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `owner_reg`
--
ALTER TABLE `owner_reg`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_bank_details`
--
ALTER TABLE `tbl_bank_details`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=695;
--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_hostel`
--
ALTER TABLE `tbl_hostel`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_hotelbooking`
--
ALTER TABLE `tbl_hotelbooking`
  MODIFY `bokid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_h_room_dtls`
--
ALTER TABLE `tbl_h_room_dtls`
  MODIFY `hr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_pg`
--
ALTER TABLE `tbl_pg`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_roomtyp`
--
ALTER TABLE `tbl_roomtyp`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust_reg`
--
ALTER TABLE `cust_reg`
  ADD CONSTRAINT `cust_reg_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`);

--
-- Constraints for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD CONSTRAINT `tbl_hotel_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `main_hotel_registration` (`hid`);

--
-- Constraints for table `tbl_hotelbooking`
--
ALTER TABLE `tbl_hotelbooking`
  ADD CONSTRAINT `tbl_hotelbooking_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `tbl_hotel` (`hotel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
