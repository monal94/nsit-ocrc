-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2015 at 05:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `complain_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complains`
--

CREATE TABLE IF NOT EXISTS `tbl_complains` (
`cid` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `comp_type` varchar(40) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `eng_id` int(10) NOT NULL,
  `eng_name` varchar(40) NOT NULL,
  `eng_comment` varchar(240) NOT NULL,
  `create_date` datetime NOT NULL,
  `close_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complains`
--

INSERT INTO `tbl_complains` (`cid`, `cust_id`, `cust_name`, `comp_type`, `comp_title`, `comp_desc`, `status`, `eng_id`, `eng_name`, `eng_comment`, `create_date`, `close_date`) VALUES
(21, 15, 'hitesh_saini', 'Academics', 'Fans not working', 'Please repair fans for room no 17/Block 5.', 'open', 0, '', '', '2015-05-24 20:51:00', '0000-00-00 00:00:00'),
(19, 1, 'mohd_nvd', 'Admin Department', 'Fees Refund Not Received', 'Merit Scholarship refund for first semester not received till now.', 'open', 0, '', '', '2015-05-24 19:57:51', '0000-00-00 00:00:00'),
(20, 14, 'monal94', 'Library Related', 'ACA - Kai Hwang Request', 'Please provide ACA - Kai Hwang book.', 'close', 8, 'library', 'Order has been placed and it will be available from next week.', '2015-05-24 20:01:33', '2015-05-24 20:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainsf`
--

CREATE TABLE IF NOT EXISTS `tbl_complainsf` (
`cid` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `comp_type` varchar(40) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `eng_id` int(10) NOT NULL,
  `eng_name` varchar(40) NOT NULL,
  `eng_comment` varchar(240) NOT NULL,
  `create_date` datetime NOT NULL,
  `close_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complainsf`
--

INSERT INTO `tbl_complainsf` (`cid`, `cust_id`, `cust_name`, `comp_type`, `comp_title`, `comp_desc`, `status`, `eng_id`, `eng_name`, `eng_comment`, `create_date`, `close_date`) VALUES
(4, 15, 'faculty_2', 'Academics', 'Mass Bunk of COE-2', 'This is to inform about mass bunk of COE-2 on 22/05/2015 for ISDM class.', 'open', 0, '', '', '2015-05-24 20:43:52', '0000-00-00 00:00:00'),
(5, 23, 'faculty_10', 'Others', 'Clash of timetable', 'I am alloted 2 classes on the same time on Monday for time slot 9:30-10:30.', 'assigned', 6, 'admin_ug', '', '2015-05-24 20:52:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
`eid` int(10) NOT NULL,
  `ename` varchar(40) NOT NULL,
  `epass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `e_mobile` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`eid`, `ename`, `epass`, `address`, `email`, `e_mobile`, `date_time`) VALUES
(6, 'admin_ug', '1234', 'Room No. 12, Admin Block', 'adminug@nsit.nic.in', '999999911', '2011-02-02 23:36:51'),
(7, 'admin_pg', '1234', 'Room no 12, Admin Block', 'adminpg@nsit.ac.in', '9999999900', '2015-05-24 17:31:21'),
(8, 'library', '1234', 'Library Building', 'library@nsit.ac.in', '9999990000', '2015-05-24 11:24:00'),
(9, 'exam_cell', '1234', 'Examination Cell, Admin Block', 'exams@nsit.ac.in', '9999999901', '2015-05-24 14:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE IF NOT EXISTS `tbl_faculty` (
`fid` int(10) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `fpass` varchar(40) NOT NULL,
  `facid` varchar(200) NOT NULL,
  `section` varchar(30) NOT NULL,
  `fmobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`fid`, `fname`, `fpass`, `facid`, `section`, `fmobile`, `email`, `date_time`) VALUES
(14, 'faculty_1', '1234', '1', 'COE', '9999999991', 'faculty_1@nsit.ac.in', '2015-04-13 00:07:01'),
(15, 'faculty_2', '1234', '2', 'BT', '9999999992', 'faculty_2@nsit.ac.in', '2015-05-24 20:03:38'),
(16, 'faculty_3', '1234', '3', 'COE', '9999999993', 'faculty_3@nsit.ac.in', '2015-05-24 20:04:56'),
(17, 'faculty_4', '1234', '4', 'ICE', '9999999994', 'faculty_4@nsit.ac.in', '2015-05-24 20:05:53'),
(18, 'faculty_5', '1234', '5', 'ECE', '9999999995', 'faculty_5@nsit.ac.in', '2015-05-24 20:06:36'),
(19, 'faculty_6', '1234', '6', 'ECE', '9999999996', 'faculty_6@nsit.ac.in', '2015-05-24 20:08:47'),
(20, 'faculty_7', '1234', '7', 'ICE', '9999999997', 'faculty_7@nsit.ac.in', '2015-05-24 20:09:26'),
(21, 'faculty_8', '1234', '8', 'COE', '9999999998', 'faculty_8@nsit.ac.in', '2015-05-24 20:09:51'),
(22, 'faculty_9', '1234', '9', 'IT', '9999999999', 'faculty_9@nsit.ac.in', '2015-05-24 20:10:57'),
(23, 'faculty_10', '1234', '10', 'MPAE', '9999999990', 'faculty_10@nsit.ac.in', '2015-05-24 20:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
`sid` int(10) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `spass` varchar(40) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `semandyear` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `smobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`sid`, `sname`, `spass`, `rollno`, `semandyear`, `branch`, `email`, `smobile`, `date_time`) VALUES
(1, 'mohd_nvd', '1234', '296/CO/12', '6th/3rd', 'COE', 'mohammadnaveed01@gmail.com', '9013975701', '2015-04-13 00:04:27'),
(14, 'monal94', '1234', '299/CO/12', '6th/3rd', 'COE', 'monal94@gmail.com', '9654302002', '2015-05-24 19:58:58'),
(15, 'hitesh_saini', '1234', '276/CO/12', '6th/3rd', 'COE', 'hitesh@gmail.com', '9876543210', '2015-05-24 19:59:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_complains`
--
ALTER TABLE `tbl_complains`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_complainsf`
--
ALTER TABLE `tbl_complainsf`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
 ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
 ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_complains`
--
ALTER TABLE `tbl_complains`
MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_complainsf`
--
ALTER TABLE `tbl_complainsf`
MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
