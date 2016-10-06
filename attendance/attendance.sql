-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2016 at 10:19 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Serial_No` int(11) NOT NULL AUTO_INCREMENT,
  `Admin_Id` varchar(10) NOT NULL,
  `Admin_Name` text NOT NULL,
  `Department` text NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Contact_Details` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL,
  PRIMARY KEY (`Serial_No`),
  UNIQUE KEY `Admin_Id` (`Admin_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Serial_No`, `Admin_Id`, `Admin_Name`, `Department`, `Designation`, `Contact_Details`, `Email`, `Password`) VALUES
(1, 'sbose1', 'Subrata Bose', 'Computer Science', 'HOD', '4585458569', 'sbose@gmail.com', 'e16b51b67c63fd240400178e8e7bed9b');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_table`
--

CREATE TABLE IF NOT EXISTS `attendance_table` (
  `rn` text NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `day1` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`rn`, `subject_code`, `day1`) VALUES
('14400112040', 'CS801', 'P'),
('14400112041', '0', ''),
('14400112042', '0', ''),
('14400112043', '0', ''),
('14400112044', '0', ''),
('14400112064', '0', ''),
('14400112068', '0', ''),
('14400112070', '0', ''),
('14400112090', '0', ''),
('14400712059', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `cs801a`
--

CREATE TABLE IF NOT EXISTS `cs801a` (
  `Serial` int(11) NOT NULL,
  `RollNo` varchar(20) NOT NULL,
  `Stu_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Att_Status` varchar(10) NOT NULL,
  `Total_Attendance` int(11) NOT NULL,
  PRIMARY KEY (`RollNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs801a`
--


-- --------------------------------------------------------

--
-- Table structure for table `cs801d`
--

CREATE TABLE IF NOT EXISTS `cs801d` (
  `Serial` int(11) NOT NULL AUTO_INCREMENT,
  `RollNo` varchar(20) NOT NULL,
  `Stu_Name` varchar(30) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Att_Status` varchar(10) NOT NULL,
  `Total_Attendance` int(11) NOT NULL,
  PRIMARY KEY (`Serial`),
  KEY `RollNo` (`RollNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED AUTO_INCREMENT=190 ;

--
-- Dumping data for table `cs801d`
--

INSERT INTO `cs801d` (`Serial`, `RollNo`, `Stu_Name`, `Date`, `Att_Status`, `Total_Attendance`) VALUES
(1, '14400112029', 'ABHIJIT BERMAN', '2016/05/27', 'P', 9),
(2, '14400112030', 'ABHISEK DAS', '2016/05/27', 'P', 9),
(3, '14400112031', 'ABHRATANU RAY', '2016/05/27', 'P', 9),
(4, '14400112032', 'AKANSHA GANERIWAL', '2016/05/27', 'P', 9),
(5, '14400112033', 'AMIT KUMAR JHA', '2016/05/27', 'A', 0),
(6, '14400112034', 'ANIRUDHA SEN', '2016/05/27', 'A', 0),
(7, '14400112035', 'ANKITA GUPTA', '2016/05/27', 'A', 0),
(8, '14400112036', 'ANURAG GHOSH', '2016/05/27', 'A', 0),
(9, '14400112037', 'APRAJITA PAUL', '2016/05/27', 'A', 0),
(10, '14400112038', 'ARIJIT SAHA', '2016/05/27', 'A', 0),
(11, '14400112039', 'ARIJIT PATRA', '2016/05/27', 'A', 0),
(12, '14400112040', 'ASHISH KUMAR', '2016/05/27', 'A', 0),
(13, '14400112041', 'ASIF', '2016/05/27', 'A', 0),
(14, '14400112042', 'ATANU', '2016/05/27', 'A', 0),
(15, '14400112043', 'AYAN', '2016/05/27', 'A', 0),
(16, '14400112044', 'DANISH', '2016/05/27', 'A', 0),
(17, '14400112046', 'GARGA CHAKRABARTY', '2016/05/27', 'A', 0),
(18, '14400112064', 'ROHAN', '2016/05/27', 'A', 0),
(19, '14400112068', 'SANKALAN', '2016/05/27', 'A', 0),
(20, '14400112070', 'SARUNAY', '2016/05/27', 'A', 0),
(21, '14400112090', 'VIPUL', '2016/05/27', 'A', 0),
(22, '14400112029', 'ABHIJIT BERMAN', '2016/05/27', 'P', 8),
(23, '14400112030', 'ABHISEK DAS', '2016/05/27', 'P', 8),
(24, '14400112031', 'ABHRATANU RAY', '2016/05/27', 'P', 8),
(25, '14400112032', 'AKANSHA GANERIWAL', '2016/05/27', 'A', 0),
(26, '14400112033', 'AMIT KUMAR JHA', '2016/05/27', 'A', 0),
(27, '14400112034', 'ANIRUDHA SEN', '2016/05/27', 'A', 0),
(28, '14400112035', 'ANKITA GUPTA', '2016/05/27', 'A', 0),
(29, '14400112036', 'ANURAG GHOSH', '2016/05/27', 'A', 0),
(30, '14400112037', 'APRAJITA PAUL', '2016/05/27', 'A', 0),
(31, '14400112038', 'ARIJIT SAHA', '2016/05/27', 'A', 0),
(32, '14400112039', 'ARIJIT PATRA', '2016/05/27', 'A', 0),
(33, '14400112040', 'ASHISH KUMAR', '2016/05/27', 'A', 0),
(34, '14400112041', 'ASIF', '2016/05/27', 'A', 0),
(35, '14400112042', 'ATANU', '2016/05/27', 'A', 0),
(36, '14400112043', 'AYAN', '2016/05/27', 'A', 0),
(37, '14400112044', 'DANISH', '2016/05/27', 'A', 0),
(38, '14400112046', 'GARGA CHAKRABARTY', '2016/05/27', 'A', 0),
(39, '14400112064', 'ROHAN', '2016/05/27', 'A', 0),
(40, '14400112068', 'SANKALAN', '2016/05/27', 'A', 0),
(41, '14400112070', 'SARUNAY', '2016/05/27', 'A', 0),
(42, '14400112090', 'VIPUL', '2016/05/27', 'A', 0),
(43, '14400112029', 'ABHIJIT BERMAN', '2016/05/27', 'P', 7),
(44, '14400112030', 'ABHISEK DAS', '2016/05/27', 'P', 7),
(45, '14400112031', 'ABHRATANU RAY', '2016/05/27', 'P', 7),
(46, '14400112032', 'AKANSHA GANERIWAL', '2016/05/27', 'P', 7),
(47, '14400112033', 'AMIT KUMAR JHA', '2016/05/27', 'A', 0),
(48, '14400112034', 'ANIRUDHA SEN', '2016/05/27', 'A', 0),
(49, '14400112035', 'ANKITA GUPTA', '2016/05/27', 'A', 0),
(50, '14400112036', 'ANURAG GHOSH', '2016/05/27', 'A', 0),
(51, '14400112037', 'APRAJITA PAUL', '2016/05/27', 'A', 0),
(52, '14400112038', 'ARIJIT SAHA', '2016/05/27', 'A', 0),
(53, '14400112039', 'ARIJIT PATRA', '2016/05/27', 'A', 0),
(54, '14400112040', 'ASHISH KUMAR', '2016/05/27', 'A', 0),
(55, '14400112041', 'ASIF', '2016/05/27', 'A', 0),
(56, '14400112042', 'ATANU', '2016/05/27', 'A', 0),
(57, '14400112043', 'AYAN', '2016/05/27', 'A', 0),
(58, '14400112044', 'DANISH', '2016/05/27', 'A', 0),
(59, '14400112046', 'GARGA CHAKRABARTY', '2016/05/27', 'A', 0),
(60, '14400112064', 'ROHAN', '2016/05/27', 'A', 0),
(61, '14400112068', 'SANKALAN', '2016/05/27', 'A', 0),
(62, '14400112070', 'SARUNAY', '2016/05/27', 'A', 0),
(63, '14400112090', 'VIPUL', '2016/05/27', 'A', 0),
(64, '14400112029', 'ABHIJIT BERMAN', '2016-05-27', 'P', 0),
(65, '14400112030', 'ABHISEK DAS', '2016-05-27', 'P', 0),
(66, '14400112031', 'ABHRATANU RAY', '2016-05-27', 'A', 0),
(67, '14400112032', 'AKANSHA GANERIWAL', '2016-05-27', 'A', 0),
(68, '14400112033', 'AMIT KUMAR JHA', '2016-05-27', 'A', 0),
(69, '14400112034', 'ANIRUDHA SEN', '2016-05-27', 'A', 0),
(70, '14400112035', 'ANKITA GUPTA', '2016-05-27', 'A', 0),
(71, '14400112036', 'ANURAG GHOSH', '2016-05-27', 'A', 0),
(72, '14400112037', 'APRAJITA PAUL', '2016-05-27', 'A', 0),
(73, '14400112038', 'ARIJIT SAHA', '2016-05-27', 'A', 0),
(74, '14400112039', 'ARIJIT PATRA', '2016-05-27', 'A', 0),
(75, '14400112040', 'ASHISH KUMAR', '2016-05-27', 'A', 0),
(76, '14400112041', 'ASIF', '2016-05-27', 'A', 0),
(77, '14400112042', 'ATANU', '2016-05-27', 'A', 0),
(78, '14400112043', 'AYAN', '2016-05-27', 'A', 0),
(79, '14400112044', 'DANISH', '2016-05-27', 'A', 0),
(80, '14400112046', 'GARGA CHAKRABARTY', '2016-05-27', 'A', 0),
(81, '14400112064', 'ROHAN', '2016-05-27', 'A', 0),
(82, '14400112068', 'SANKALAN', '2016-05-27', 'A', 0),
(83, '14400112070', 'SARUNAY', '2016-05-27', 'A', 0),
(84, '14400112090', 'VIPUL', '2016-05-27', 'A', 0),
(85, '14400112029', 'ABHIJIT BERMAN', '2016-05-27', 'A', 0),
(86, '14400112030', 'ABHISEK DAS', '2016-05-27', 'A', 0),
(87, '14400112031', 'ABHRATANU RAY', '2016-05-27', 'A', 0),
(88, '14400112032', 'AKANSHA GANERIWAL', '2016-05-27', 'A', 0),
(89, '14400112033', 'AMIT KUMAR JHA', '2016-05-27', 'A', 0),
(90, '14400112034', 'ANIRUDHA SEN', '2016-05-27', 'P', 0),
(91, '14400112035', 'ANKITA GUPTA', '2016-05-27', 'P', 0),
(92, '14400112036', 'ANURAG GHOSH', '2016-05-27', 'P', 0),
(93, '14400112037', 'APRAJITA PAUL', '2016-05-27', 'A', 0),
(94, '14400112038', 'ARIJIT SAHA', '2016-05-27', 'A', 0),
(95, '14400112039', 'ARIJIT PATRA', '2016-05-27', 'A', 0),
(96, '14400112040', 'ASHISH KUMAR', '2016-05-27', 'A', 0),
(97, '14400112041', 'ASIF', '2016-05-27', 'A', 0),
(98, '14400112042', 'ATANU', '2016-05-27', 'A', 0),
(99, '14400112043', 'AYAN', '2016-05-27', 'A', 0),
(100, '14400112044', 'DANISH', '2016-05-27', 'A', 0),
(101, '14400112046', 'GARGA CHAKRABARTY', '2016-05-27', 'A', 0),
(102, '14400112064', 'ROHAN', '2016-05-27', 'A', 0),
(103, '14400112068', 'SANKALAN', '2016-05-27', 'A', 0),
(104, '14400112070', 'SARUNAY', '2016-05-27', 'A', 0),
(105, '14400112090', 'VIPUL', '2016-05-27', 'A', 0),
(106, '14400112029', 'ABHIJIT BERMAN', '2016-05-27', 'A', 0),
(107, '14400112030', 'ABHISEK DAS', '2016-05-27', 'A', 0),
(108, '14400112031', 'ABHRATANU RAY', '2016-05-27', 'A', 0),
(109, '14400112032', 'AKANSHA GANERIWAL', '2016-05-27', 'A', 0),
(110, '14400112033', 'AMIT KUMAR JHA', '2016-05-27', 'A', 0),
(111, '14400112034', 'ANIRUDHA SEN', '2016-05-27', 'P', 0),
(112, '14400112035', 'ANKITA GUPTA', '2016-05-27', 'P', 0),
(113, '14400112036', 'ANURAG GHOSH', '2016-05-27', 'P', 0),
(114, '14400112037', 'APRAJITA PAUL', '2016-05-27', 'A', 0),
(115, '14400112038', 'ARIJIT SAHA', '2016-05-27', 'A', 0),
(116, '14400112039', 'ARIJIT PATRA', '2016-05-27', 'A', 0),
(117, '14400112040', 'ASHISH KUMAR', '2016-05-27', 'A', 0),
(118, '14400112041', 'ASIF', '2016-05-27', 'A', 0),
(119, '14400112042', 'ATANU', '2016-05-27', 'A', 0),
(120, '14400112043', 'AYAN', '2016-05-27', 'A', 0),
(121, '14400112044', 'DANISH', '2016-05-27', 'A', 0),
(122, '14400112046', 'GARGA CHAKRABARTY', '2016-05-27', 'A', 0),
(123, '14400112064', 'ROHAN', '2016-05-27', 'P', 0),
(124, '14400112068', 'SANKALAN', '2016-05-27', 'P', 0),
(125, '14400112070', 'SARUNAY', '2016-05-27', 'A', 0),
(126, '14400112090', 'VIPUL', '2016-05-27', 'A', 0),
(127, '14400112029', 'ABHIJIT BERMAN', '2016-05-27', 'A', 0),
(128, '14400112030', 'ABHISEK DAS', '2016-05-27', 'A', 0),
(129, '14400112031', 'ABHRATANU RAY', '2016-05-27', 'A', 0),
(130, '14400112032', 'AKANSHA GANERIWAL', '2016-05-27', 'A', 0),
(131, '14400112033', 'AMIT KUMAR JHA', '2016-05-27', 'A', 0),
(132, '14400112034', 'ANIRUDHA SEN', '2016-05-27', 'P', 0),
(133, '14400112035', 'ANKITA GUPTA', '2016-05-27', 'P', 0),
(134, '14400112036', 'ANURAG GHOSH', '2016-05-27', 'P', 0),
(135, '14400112037', 'APRAJITA PAUL', '2016-05-27', 'A', 0),
(136, '14400112038', 'ARIJIT SAHA', '2016-05-27', 'A', 0),
(137, '14400112039', 'ARIJIT PATRA', '2016-05-27', 'A', 0),
(138, '14400112040', 'ASHISH KUMAR', '2016-05-27', 'A', 0),
(139, '14400112041', 'ASIF', '2016-05-27', 'A', 0),
(140, '14400112042', 'ATANU', '2016-05-27', 'A', 0),
(141, '14400112043', 'AYAN', '2016-05-27', 'A', 0),
(142, '14400112044', 'DANISH', '2016-05-27', 'A', 0),
(143, '14400112046', 'GARGA CHAKRABARTY', '2016-05-27', 'A', 0),
(144, '14400112064', 'ROHAN', '2016-05-27', 'P', 0),
(145, '14400112068', 'SANKALAN', '2016-05-27', 'P', 0),
(146, '14400112070', 'SARUNAY', '2016-05-27', 'A', 0),
(147, '14400112090', 'VIPUL', '2016-05-27', 'A', 0),
(148, '14400112029', 'ABHIJIT BERMAN', '2016-05-27', 'A', 0),
(149, '14400112030', 'ABHISEK DAS', '2016-05-27', 'A', 0),
(150, '14400112031', 'ABHRATANU RAY', '2016-05-27', 'A', 0),
(151, '14400112032', 'AKANSHA GANERIWAL', '2016-05-27', 'A', 0),
(152, '14400112033', 'AMIT KUMAR JHA', '2016-05-27', 'A', 0),
(153, '14400112034', 'ANIRUDHA SEN', '2016-05-27', 'A', 0),
(154, '14400112035', 'ANKITA GUPTA', '2016-05-27', 'P', 0),
(155, '14400112036', 'ANURAG GHOSH', '2016-05-27', 'A', 0),
(156, '14400112037', 'APRAJITA PAUL', '2016-05-27', 'A', 0),
(157, '14400112038', 'ARIJIT SAHA', '2016-05-27', 'A', 0),
(158, '14400112039', 'ARIJIT PATRA', '2016-05-27', 'A', 0),
(159, '14400112040', 'ASHISH KUMAR', '2016-05-27', 'P', 0),
(160, '14400112041', 'ASIF', '2016-05-27', 'A', 0),
(161, '14400112042', 'ATANU', '2016-05-27', 'A', 0),
(162, '14400112043', 'AYAN', '2016-05-27', 'A', 0),
(163, '14400112044', 'DANISH', '2016-05-27', 'A', 0),
(164, '14400112046', 'GARGA CHAKRABARTY', '2016-05-27', 'A', 0),
(165, '14400112064', 'ROHAN', '2016-05-27', 'A', 0),
(166, '14400112068', 'SANKALAN', '2016-05-27', 'A', 0),
(167, '14400112070', 'SARUNAY', '2016-05-27', 'A', 0),
(168, '14400112090', 'VIPUL', '2016-05-27', 'A', 0),
(169, '14400112029', 'ABHIJIT BERMAN', '2016-05-27', 'A', 0),
(170, '14400112030', 'ABHISEK DAS', '2016-05-27', 'A', 0),
(171, '14400112031', 'ABHRATANU RAY', '2016-05-27', 'A', 0),
(172, '14400112032', 'AKANSHA GANERIWAL', '2016-05-27', 'A', 0),
(173, '14400112033', 'AMIT KUMAR JHA', '2016-05-27', 'A', 0),
(174, '14400112034', 'ANIRUDHA SEN', '2016-05-27', 'A', 0),
(175, '14400112035', 'ANKITA GUPTA', '2016-05-27', 'A', 0),
(176, '14400112036', 'ANURAG GHOSH', '2016-05-27', 'P', 0),
(177, '14400112037', 'APRAJITA PAUL', '2016-05-27', 'A', 0),
(178, '14400112038', 'ARIJIT SAHA', '2016-05-27', 'A', 0),
(179, '14400112039', 'ARIJIT PATRA', '2016-05-27', 'A', 0),
(180, '14400112040', 'ASHISH KUMAR', '2016-05-27', 'A', 0),
(181, '14400112041', 'ASIF', '2016-05-27', 'A', 0),
(182, '14400112042', 'ATANU', '2016-05-27', 'A', 0),
(183, '14400112043', 'AYAN', '2016-05-27', 'A', 0),
(184, '14400112044', 'DANISH', '2016-05-27', 'P', 0),
(185, '14400112046', 'GARGA CHAKRABARTY', '2016-05-27', 'A', 0),
(186, '14400112064', 'ROHAN', '2016-05-27', 'A', 0),
(187, '14400112068', 'SANKALAN', '2016-05-27', 'A', 0),
(188, '14400112070', 'SARUNAY', '2016-05-27', 'A', 0),
(189, '14400112090', 'VIPUL', '2016-05-27', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cs802e`
--

CREATE TABLE IF NOT EXISTS `cs802e` (
  `Serial` int(11) NOT NULL,
  `RollNo` varchar(20) NOT NULL,
  `Stu_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Att_Status` varchar(10) NOT NULL,
  `Total_Attendance` int(11) NOT NULL,
  PRIMARY KEY (`RollNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs802e`
--


-- --------------------------------------------------------

--
-- Table structure for table `cs891`
--

CREATE TABLE IF NOT EXISTS `cs891` (
  `Serial` int(11) NOT NULL,
  `RollNo` varchar(20) NOT NULL,
  `Stu_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Att_Status` varchar(10) NOT NULL,
  `Total_Attendance` int(11) NOT NULL,
  PRIMARY KEY (`RollNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs891`
--


-- --------------------------------------------------------

--
-- Table structure for table `cs892`
--

CREATE TABLE IF NOT EXISTS `cs892` (
  `Serial` int(11) NOT NULL,
  `RollNo` varchar(20) NOT NULL,
  `Stu_Name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Att_Status` varchar(10) NOT NULL,
  `Total_Attendance` int(11) NOT NULL,
  PRIMARY KEY (`RollNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs892`
--

INSERT INTO `cs892` (`Serial`, `RollNo`, `Stu_Name`, `Date`, `Att_Status`, `Total_Attendance`) VALUES
(0, '14400112029', 'ABHIJIT BERMAN', '2016-05-27', 'P', 0),
(0, '14400112030', 'ABHISEK DAS', '2016-05-27', 'P', 0),
(0, '14400112031', 'ABHRATANU RAY', '2016-05-27', 'A', 0),
(0, '14400112032', 'AKANSHA GANERIWAL', '2016-05-27', 'A', 0),
(0, '14400112033', 'AMIT KUMAR JHA', '2016-05-27', 'A', 0),
(0, '14400112034', 'ANIRUDHA SEN', '2016-05-27', 'A', 0),
(0, '14400112035', 'ANKITA GUPTA', '2016-05-27', 'A', 0),
(0, '14400112036', 'ANURAG GHOSH', '2016-05-27', 'A', 0),
(0, '14400112037', 'APRAJITA PAUL', '2016-05-27', 'A', 0),
(0, '14400112038', 'ARIJIT SAHA', '2016-05-27', 'A', 0),
(0, '14400112039', 'ARIJIT PATRA', '2016-05-27', 'A', 0),
(0, '14400112040', 'ASHISH KUMAR', '2016-05-27', 'A', 0),
(0, '14400112041', 'ASIF', '2016-05-27', 'A', 0),
(0, '14400112042', 'ATANU', '2016-05-27', 'A', 0),
(0, '14400112043', 'AYAN', '2016-05-27', 'A', 0),
(0, '14400112044', 'DANISH', '2016-05-27', 'A', 0),
(0, '14400112046', 'GARGA CHAKRABARTY', '2016-05-27', 'A', 0),
(0, '14400112064', 'ROHAN', '2016-05-27', 'A', 0),
(0, '14400112068', 'SANKALAN', '2016-05-27', 'A', 0),
(0, '14400112070', 'SARUNAY', '2016-05-27', 'A', 0),
(0, '14400112090', 'VIPUL', '2016-05-27', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE IF NOT EXISTS `routine` (
  `Day` varchar(30) NOT NULL,
  `Sem` varchar(30) NOT NULL,
  `Period_1` varchar(40) NOT NULL,
  `Period_2` varchar(40) NOT NULL,
  `Period_3` varchar(40) NOT NULL,
  `Period_4` varchar(40) NOT NULL,
  `RECESS` varchar(30) NOT NULL,
  `Period_5` varchar(40) NOT NULL,
  `Period_6` varchar(40) NOT NULL,
  `Period_7` varchar(40) NOT NULL,
  `Period_8` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`Day`, `Sem`, `Period_1`, `Period_2`, `Period_3`, `Period_4`, `RECESS`, `Period_5`, `Period_6`, `Period_7`, `Period_8`) VALUES
('MONDAY', '4TH', 'MCS401 (SD1)', 'CS403 (BM)', 'CS403 (BM)', 'CS402 (SKA)', 'RECESS', 'CS493 (BM & AKN) (A) / HU 481', 'CS493 (BM & AKN) (A) / HU 481', 'CS493 (BM & AKN) (A) / HU 481', 'TUTORIAL'),
('TUESDAY', '8TH', 'CAMPUS CONNECT', 'HU801A (SKG)', 'CS801D(AG)', 'CS801D(AG)', 'RECESS', 'CS802E (DSD)', 'CS802E (DSD)', 'TUTORIAL', 'CAMPUS CONNECT'),
('MONDAY', '8TH', 'CS801D (AG)', 'CS891 (AG)', 'CS891 (AG)', 'CS891 (AG)', 'RECESS', 'CS 892 (SKA)', 'CS 892 (SKA)', 'CS 892 (SKA)', 'CAMPUS CONNECT'),
('TUESDAY', '4TH', 'CS402 (SKA)', 'CS402 (SKA)', 'CS401 (JRC)', 'M401 (SMD)', 'RECESS', 'CS401 (JRC)', 'MCS491 (SD1) (A)', 'MCS491 (SD1) (A)', 'TUTORIAL'),
('MONDAY', '6TH', 'CS603 (SKA)', 'CS603 (SKA)', 'CS602 (SNM)', 'CS602 (SNM)', 'RECESS', 'HU601 (SKG)', 'CS604A (AG) (A) CSE 604B(SKM)', 'CS604A (AG) (A) CSE 604B(SKM)', 'TUTORIAL'),
('TUESDAY', '6TH', 'CS604A (AG) / CS 604B (SKM)', 'CS601 (DSD)', 'CS601 (DSD)', 'HU601 (SKG)', 'RECESS', 'CS693 (SKA) (B) / CS 681 (SS & BM)', 'CS693 (SKA) (B) / CS 681 (SS & BM) (A)', 'CS693 (SKA) (B) / CS 681 (SS & BM) (A)', 'TUTORIAL'),
('WEDNESDAY', '8TH', 'CS802E (DSD)', 'CS891(DN)', 'CS891(DN)', 'CS891(DN)', 'RECESS', 'CS891(SB)', 'CS891(SB)', 'CS891(SB)', 'CAMPUS CONNECT'),
('WEDNESDAY', '6TH', 'CS605A(DN) / CS 605C(KB)', 'HU601A (SKG)', 'CS601 (DSD)', 'CS601 (DSD)', 'RECESS', 'CS603 (SKA)', 'CS602 (SNM)', 'CS602 (SNM)', 'TUTORIAL'),
('WEDNESDAY', '4TH', 'TUTORIAL', 'CS491 (JRC) (A) / CS 492 (SKM & AG) (B)', 'CS491 (JRC) (A) / CS 492 (SKM & AG) (B)', 'CS491 (JRC) (A) / CS 492 (SKM & AG) (B)', 'RECESS', 'CS491 (JRC) (B) / CS 492 (SKM & AG) (A)', 'CS491 (JRC) (B) / CS 492 (SKM & AG) (A)', 'CS491 (JRC) (B) / CS 492 (SKM & AG) (A)', 'TUTORIAL'),
('THURSDAY', '8TH', 'CAMPUS CONNECT', 'CS893 (SD1)', 'CS893 (SD1)', 'CS893 (SD1)', 'RECESS', 'HU801A (SKG)', 'HU801A (SKG)', 'TUTORIAL', 'CAMPUS CONNECT'),
('THURSDAY', '6TH', 'CS605A (DN) /CS 605C (KB)', 'CS691 (DSD) (B) / CS 692 (SNM & KB) (A)', 'CS691 (DSD) (B) / CS 692 (SNM & KB) (A)', 'CS691 (DSD) (B) / CS 692 (SNM & KB) (A)', 'RECESS', 'CS691 (DSD) (A) / CS 692 (SNM & KB) (B)', 'CS691 (DSD) (A) / CS 692 (SNM & KB) (B)', 'CS691 (DSD) (A) / CS 692 (SNM & KB) (B)', 'TUTORIAL'),
('THURSDAY', '4TH', 'CS401 (JRC)', 'CS403 (BM)', 'CS403 (BM)', 'M401 (SMD)', 'RECESS', 'M401 (SMD)', 'MCS491 (SD1 & SS) (B)', 'MCS491 (SD1 & SS) (B)', 'TUTORIAL'),
('FRIDAY', '8TH', 'TUTORIAL', 'CS892 (BM)', 'CS892 (BM)', 'CS892 (BM)', 'RECESS', 'CS892 (AG)', 'CS892 (AG)', 'CS892 (AG) ', 'TUTORIAL'),
('FRIDAY', '6TH', 'CS604A (AG) / CS 604B (SKM)', 'CS605A (DN) / CS 605C (KB)', 'CS605A (DN) / CS 605C (KB)', 'CS603 (SKA)', 'RECESS', 'CS693 (SKA) (A) / CS 681 (SS & SD1) (B)', 'CS693 (SKA) (A) / CS 681 (SS & SD1) (B)', 'CS693 (SKA) (A) / CS 681 (SS & SD1) (B)', 'TUTORIAL'),
('FRIDAY', '4TH', 'M401 (SMD)', 'CS402 (SKA)', 'MCS401 (SD1)', 'MCS401 (SD1)', 'RECESS', 'CS493 (BM & AKN) (B) / HU 481 (A)', 'CS493 (BM & AKN) (B) / HU 481 (A)', 'CS493 (BM & AKN) (B) / HU 481 (A)', 'TUTORIAL');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `Student_Name` text NOT NULL,
  `session` varchar(20) NOT NULL,
  `rn` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Student_Name`, `session`, `rn`, `branch`, `year`, `semester`, `dob`, `address`) VALUES
('ABHIJIT BERMAN', '2012', '14400112029', 'CSE', 'FOURTH', 'EIGHTH', '', 'KOLKATA'),
('ABHISEK DAS', '2012', '14400112030', 'CSE', 'FOURTH', 'EIGHTH', '', 'KOLKATA'),
('ABHRATANU RAY', '2012', '14400112031', 'CSE', 'FOURTH', 'EIGHTH', '', 'KOLKATA,WB'),
('AKANSHA GANERIWAL', '2012', '14400112032', 'CSE', 'FOURTH', 'EIGHTH', '', 'KOLKATA,WB'),
('AMIT KUMAR JHA', '2012', '14400112033', 'CSE', 'FOURTH', 'EIGHTH', '', 'DARBHANGA,BIHAR'),
('ANIRUDHA SEN', '2012', '14400112034', 'CSE', 'FOURTH', 'EIGHTH', '', 'KOLKATA,WB'),
('ANKITA GUPTA', '2012', '14400112035', 'CSE', 'FOURTH', 'EIGHTH', '', 'ASANSOL,WB'),
('ANURAG GHOSH', '2012', '14400112036', 'CSE', 'FOURTH', 'EIGHTH', '', 'HOWRAH,WB'),
('APRAJITA PAUL', '2012', '14400112037', 'CSE', 'FOURTH', 'EIGHTH', '', 'WEST BENGAL'),
('ARIJIT SAHA', '2012', '14400112038', 'CSE', 'FOURTH', 'EIGHTH', '', 'SILIGURI,WB'),
('ARIJIT PATRA', '2012', '14400112039', 'CSE', 'FOURTH', 'EIGHTH', '', 'GARIYA,KOLKATA'),
('ASHISH KUMAR', '2012', '14400112040', 'CSE', 'FOURTH', 'EIGHTH', '1993-02-25', 'SAHARSA'),
('ASIF', '2012', '14400112041', 'CSE', 'FOURTH', 'EIGHTH', '', 'JHARKHAND'),
('ATANU', '2012', '14400112042', 'CSE', 'FOURTH', 'EIGHTH', '', 'KOLKATA'),
('AYAN', '2012', '14400112043', 'CSE', 'FOURTH', 'EIGHTH', '1993-04-21', 'BURDWAN'),
('DANISH', '2012', '14400112044', 'CSE', 'FOURTH', 'EIGHTH', '1993-05-11', 'BIHAR'),
('GARGA CHAKRABARTY', '2012', '14400112046', 'CSE', 'FOURTH', 'EIGHTH', '1993-07-28', 'KOLKATA'),
('ROHAN', '2012', '14400112064', 'CSE', 'FOURTH', 'EIGHTH', '1993-05-29', 'SALKIA,HOWRAH'),
('SANKALAN', '2012', '14400112068', 'CSE', 'FOURTH', 'EIGHTH', '1994-11-12', 'KHARAGPUR'),
('SARUNAY', '2012', '14400112070', 'CSE', 'FOURTH', 'EIGHTH', '1993-02-10', 'BIHAR'),
('VIPUL', '2012', '14400112090', 'CSE', 'FOURTH', 'EIGHTH', '1994-01-03', 'PATNA,BIHAR'),
('VIVEK ', '2012', '14400712059', 'MECHNICAL', 'FOURTH', 'EIGHTH', '1994-11-01', 'PATNA');

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE IF NOT EXISTS `subject_table` (
  `Subject_Code` varchar(30) NOT NULL,
  `Subject_Name` text NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Sem` varchar(10) NOT NULL,
  `Stream` varchar(10) NOT NULL,
  `Initials` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_table`
--

INSERT INTO `subject_table` (`Subject_Code`, `Subject_Name`, `Year`, `Sem`, `Stream`, `Initials`) VALUES
('CS801D', 'Cryptography', 'FOURTH', 'EIGHTH', 'CSE', 'AG'),
('CS891', 'Design Lab', 'FOURTH', 'EIGHTH', 'CSE', 'DN'),
('CS802E', 'E-COMMERCE', 'FOURTH', 'EIGHTH', 'CSE', 'DSD'),
('CS801A', 'HU', 'FOURTH', 'EIGHTH', 'CSE', 'SKG'),
('CS892', 'PROJECT LAB', 'FOURTH', 'EIGHTH', 'CSE', 'SB'),
('CS603', 'OS', 'THIRD', 'SIXTH', 'CSE', 'ska'),
('MCS491', 'NUMERICAL METHOD LAB', 'SECOND', 'FOURTH', 'CSE', 'SD1'),
('MCS401 ', 'NUMERICAL METHOD', 'SECOND', 'FOURTH', 'CSE', 'SD1'),
('HU601', 'PRINCIPLES OF MANAGEMENT', 'THIRD', 'SIXTH', 'CSE', 'SKG'),
('CS602', 'COMPUTER NETWORK', 'THIRD', 'SIXTH', 'CSE', 'SNM'),
('CS601', 'DBMS', 'THIRD', 'SIXTH', 'CSE', 'DSD'),
('CS604A', 'INFORMATION THEORY & CODING', 'THIRD', 'SIXTH', 'CSE', 'AG'),
('CS693', 'OS LAB', 'THIRD', 'SIXTH', 'CSE', 'SKA'),
('CS681', 'SEMINAR', 'THIRD', 'SIXTH', 'CSE', 'SS'),
('CS692', 'NETWORK LAB', 'THIRD', 'SIXTH', 'CSE', 'AG'),
('CS691', 'DBMS LAB', 'THIRD', 'SIXTH', 'CSE', 'DSD'),
('CS605A', 'OPERATION RESEARCH', 'THIRD', 'SIXTH', 'CSE', 'DN');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `Teacher_ID` varchar(30) NOT NULL,
  `Teacher_Name` text NOT NULL,
  `Initials` varchar(20) NOT NULL,
  `Department` text NOT NULL,
  `Designation` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact_Details` varchar(15) NOT NULL,
  `Education_Qualification` varchar(30) NOT NULL,
  `Password` varchar(32) NOT NULL,
  PRIMARY KEY (`Teacher_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Teacher_ID`, `Teacher_Name`, `Initials`, `Department`, `Designation`, `Email`, `Contact_Details`, `Education_Qualification`, `Password`) VALUES
('CSE_SD1', 'SUNANDA DAS', 'SD1', 'CSE', 'Ast.Prof', 'sd@gmail.com', '8927603720', 'M.TECH', 'c60ae7e5831271348f9efe775224ea0d'),
('CSE_DSD', 'DEEP SUMAN DEV', 'DSD', 'CSE', 'Ast.Prof', 'deepsumandev@yahoo.co.in', '9674709542', 'M.TECH', '3167dca9a296ddf5c24dc7235fa1e128'),
('CSE_SKA1', 'SUDIP KUMAR ADHIKARI', '', 'CSE', 'Prof', 'cseska@gmail.com', ' ', 'M.TECH', '27b071c7db0e0162c7791b13d709319b'),
('CSE_BM1', 'BAPPADITYA MONDAL', '', 'CSE', 'Ast.Prof', 'csebm@gmail.com', ' ', 'M.TECH', 'bccbd479d26a65f0a6a6d8d1f8e83645'),
('CSE_DN1', 'DEVBRATANATH', '', 'CSE', 'Ast.Prof', 'csdn@gmail.com', ' ', 'M.TECH', 'fd527bb423c9fb17771da54216bde841'),
('CSE_AG', 'ARIJIT GHOSHAL', 'AG', 'CSE', 'Ast.Prof', 'ghoshal.arijit@gmail.com', '9433476991', 'Phd', 'a1a412443745e432fee908a139f494a7'),
('CSE_SB1', 'SUBRATA BOSE', 'SB', 'CSE', 'Prof', 'sbose_cse@gmail.com', '9434096758', 'Phd', 'sbose1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
