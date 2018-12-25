-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 09:10 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accompany_info`
--

CREATE TABLE IF NOT EXISTS `accompany_info` (
  `customer_id` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `boarder_info`
--

CREATE TABLE IF NOT EXISTS `boarder_info` (
`customer_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `gender_info` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `village` varchar(20) NOT NULL,
  `post_office` varchar(20) NOT NULL,
  `police_station` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `e_mail` varchar(20) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `month1` varchar(20) NOT NULL,
  `year1` varchar(20) NOT NULL,
  `id_proof` char(20) NOT NULL,
  `room_no` varchar(20) NOT NULL,
  `no_of_days` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `boarder_info`
--

INSERT INTO `boarder_info` (`customer_id`, `name`, `date`, `month`, `year`, `gender_info`, `nationality`, `village`, `post_office`, `police_station`, `district`, `state`, `pin_code`, `phone`, `e_mail`, `date1`, `month1`, `year1`, `id_proof`, `room_no`, `no_of_days`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname`, `pass`) VALUES
('sakif', 'sakif');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_info`
--

CREATE TABLE IF NOT EXISTS `reservation_info` (
  `room_type` varchar(20) NOT NULL,
  `date_from` varchar(20) NOT NULL,
  `month_from` varchar(20) NOT NULL,
  `year_from` varchar(20) NOT NULL,
  `date_to` varchar(20) NOT NULL,
  `month_to` varchar(20) NOT NULL,
  `year_to` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_info`
--

INSERT INTO `reservation_info` (`room_type`, `date_from`, `month_from`, `year_from`, `date_to`, `month_to`, `year_to`) VALUES
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_class`
--

CREATE TABLE IF NOT EXISTS `room_class` (
  `class_id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `charge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_class`
--

INSERT INTO `room_class` (`class_id`, `type`, `charge`) VALUES
('c_1', 'Standard', 8000),
('c_2', 'Deluxe', 9000),
('c_3', 'Premier Deluxe', 11000),
('c_4', 'Executive Suite', 14500),
('c_5', 'Honeymoon Suite', 17500),
('c_6', '71 Terrace', 120000),
('c_7', 'Coxs Terrace', 95000),
('c_8', 'Wedding Terrace', 220000);

-- --------------------------------------------------------

--
-- Table structure for table `room_number`
--

CREATE TABLE IF NOT EXISTS `room_number` (
  `r_number` varchar(20) NOT NULL,
  `r_class` varchar(20) NOT NULL,
  `avilable` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_number`
--

INSERT INTO `room_number` (`r_number`, `r_class`, `avilable`) VALUES
('101', 'c_1', 'y'),
('102', 'c_1', 'y'),
('103', 'c_1', 'y'),
('104', 'c_1', 'y'),
('105', 'c_1', 'y'),
('106', 'c_2', 'y'),
('107', 'c_2', 'y'),
('108', 'c_2', 'y'),
('109', 'c_2', 'y'),
('110', 'c_2', 'y'),
('111', 'c_3', 'y'),
('112', 'c_3', 'y'),
('113', 'c_3', 'y'),
('114', 'c_3', 'y'),
('115', 'c_3', 'y'),
('116', 'c_4', 'y'),
('117', 'c_4', 'y'),
('118', 'c_4', 'y'),
('119', 'c_4', 'y'),
('120', 'c_4', 'y'),
('121', 'c_5', 'y'),
('122', 'c_5', 'y'),
('123', 'c_5', 'y'),
('124', 'c_5', 'y'),
('125', 'c_5', 'y'),
('126', 'c_6', 'y'),
('127', 'c_7', 'y'),
('128', 'c_8', 'y');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `boarder_info`
--
ALTER TABLE `boarder_info`
 ADD PRIMARY KEY (`customer_id`), ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `room_class`
--
ALTER TABLE `room_class`
 ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `room_number`
--
ALTER TABLE `room_number`
 ADD PRIMARY KEY (`r_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boarder_info`
--
ALTER TABLE `boarder_info`
MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
