
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2018 at 06:58 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u689854465_makac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(32) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'deep_2607', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc'),
(2, 'hits', '8d3fef65d38a88ba05e6efb96fb8de9aade1e0e4');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `complaint_id` int(32) NOT NULL AUTO_INCREMENT,
  `problem` varchar(100) NOT NULL,
  `category` int(32) NOT NULL,
  `timeslot` varchar(50) NOT NULL,
  `user` int(32) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `region` int(32) NOT NULL,
  `date` date NOT NULL,
  `status` int(32) NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `problem`, `category`, `timeslot`, `user`, `user_id`, `address`, `region`, `date`, `status`) VALUES
(53, 'Cleaning of garden', 4, '3', 2, '2', 'Faculty residance number B7', 5, '2018-04-21', 0),
(52, 'Gate latch is broken', 1, '2', 1, '11', '154', 3, '2018-04-21', 1),
(51, 'Fan isn''t working', 2, '3', 1, '10', '214', 1, '2018-04-21', 0),
(50, 'Window is broken', 1, '3', 1, '9', '312', 2, '2018-04-21', 0),
(49, 'Cleaning of room', 4, '1', 1, '9', '312', 2, '2018-04-21', 0),
(48, 'Flush isn''t working of toilet T-05', 3, '3', 1, '8', '129', 4, '2018-04-21', 1),
(47, 'Tubelight isn''t working.', 2, '2', 1, '8', '129', 4, '2018-04-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback`) VALUES
(1, 'Nice'),
(2, 'Sb mil k chutiya bna rhe ye  **** k bachhe'),
(3, 'Sb mil k chutiya bna rhe ye  **** k bachhe'),
(4, 'schsucuscsu'),
(5, 'Sb mil k chutiya bna rhe ye  **** k bachhe'),
(6, 'hrhtrhth'),
(7, 'bhbhbhbhb'),
(8, 'chutiya app hai'),
(9, 'Abvd'),
(10, 'Abcd'),
(11, 'Hmko pagal bnare ye ****k bacche'),
(12, 'Nagrpalika Bulaoo koi'),
(13, 'Nice work!!'),
(14, 'Nice app'),
(15, 'Awesome app!!');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `mobile`, `address`, `username`, `password`) VALUES
(2, 'Dr. Ramesh Gupta', '8364578643', 'Faculty residance number B7', 'Ramesh', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `roll_number` varchar(50) NOT NULL,
  `room_number` int(32) NOT NULL,
  `hostel` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `mobile`, `roll_number`, `room_number`, `hostel`, `password`) VALUES
(10, 'Samyak', '8364839273', '2014IPG-098', 214, '1', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e'),
(11, 'Saurabh', '8354657354', '2016IPG-095', 154, '3', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e'),
(9, 'Parth', '8346945734', '2017IMT-055', 312, '2', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e'),
(8, 'Divya', '8349958047', '2016IPG-035', 129, '4', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e'),
(7, 'Deepak Kumrawat ', '7898378532', '2016IPG-033 ', 28, '3', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(32) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `category`, `cat_id`) VALUES
(14, '2016IPG-035', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '1', 8),
(13, 'mohit ', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', '3', 7),
(12, 'pratik ', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', '3', 6),
(11, 'shubham', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', '3', 5),
(10, 'abhishek', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', '3', 4),
(9, '2016IPG-033 ', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc', '1', 7),
(15, '2017IMT-055', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '1', 9),
(16, '2014IPG-098', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '1', 10),
(17, '2016IPG-095', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '1', 11),
(18, 'Ramesh', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `worker_id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`worker_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`worker_id`, `name`, `mobile`, `category`, `username`, `password`) VALUES
(5, 'Shubham sharma', '7898378532', '1', 'shubham', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc'),
(4, 'Abhishek sharma', '7898378532', '2', 'abhishek', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc'),
(6, 'Pratik Sharma ', '7898378532', '3', 'pratik ', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc'),
(7, 'Mohit Sharma ', '7898378532', '4', 'mohit ', 'b0399d2029f64d445bd131ffaa399a42d2f8e7dc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
