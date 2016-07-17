-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2015 at 05:03 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examania`
--
CREATE DATABASE `examania` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `examania`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `c_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'course id',
  `c_name` varchar(10) NOT NULL COMMENT 'course name',
  `duration` year(4) NOT NULL COMMENT 'duration',
  `info` varchar(30) NOT NULL COMMENT 'info',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam_records`
--

CREATE TABLE IF NOT EXISTS `exam_records` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `s_no` int(11) NOT NULL,
  `marks_obtained` int(11) NOT NULL,
  `avg_marks` int(11) NOT NULL,
  `result` varchar(10) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE IF NOT EXISTS `exam_type` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'exam id',
  `exam_name` varchar(15) NOT NULL COMMENT 'exam name',
  `exam_types` varchar(10) NOT NULL,
  `exam_pattern` tinyint(1) NOT NULL,
  `no_of_ques` int(11) NOT NULL COMMENT 'no of questions',
  `duration` time NOT NULL COMMENT 'duration',
  `total_marks` int(11) NOT NULL COMMENT 'total marks',
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `s_id` int(11) NOT NULL,
  `s_username` text NOT NULL,
  `s_password` varchar(20) NOT NULL,
  `s_type` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_id`, `s_username`, `s_password`, `s_type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'student id',
  `s_name` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `s_contact` varchar(20) NOT NULL,
  `s_gen` varchar(1) NOT NULL,
  `course_name` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `s_add` varchar(50) NOT NULL,
  `s_username` varchar(10) NOT NULL,
  `s_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`sid`, `s_name`, `f_name`, `s_email`, `s_contact`, `s_gen`, `course_name`, `dob`, `s_add`, `s_username`, `s_pass`) VALUES
(1, 'daevkw', 'lkndlkewnvr', 'fnlkwrgneo', '398125', '1', 'm', '2015-06-02', 'Please cjkbryour address', 'fmergk', 'knfl'),
(2, 'kfnek', 'cjbk', 'kncvkr', '218384', '1', 'm', '2015-06-22', 'Pleasdjbefe enter your address', 'kfjnwk', 'dknkf'),
(3, 'fnkfj', 'dfjkbjfk', 'kjcbwkej', '2147483647', '2', 'm', '2015-06-02', 'Please ewdqwnter your address', 'wdwf', 'fwr');

-- --------------------------------------------------------

--
-- Table structure for table `student_exam`
--

CREATE TABLE IF NOT EXISTS `student_exam` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `incorrect` int(11) NOT NULL,
  `unattempted` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentenq`
--

CREATE TABLE IF NOT EXISTS `studentenq` (
  `enq_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(20) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `s_contact` varchar(20) NOT NULL,
  `s_enquiry` text NOT NULL,
  PRIMARY KEY (`enq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `studentenq`
--

INSERT INTO `studentenq` (`enq_id`, `s_name`, `s_email`, `s_contact`, `s_enquiry`) VALUES
(1, 'nlwkfwlg', 'lkfvneth', '435769', 'lknflkerngePlease enter your enquiry'),
(2, 'htyj', 'bgfnghn', '91255558', 'bubgyhgbdiuvn');

-- --------------------------------------------------------

--
-- Table structure for table `studentfeed`
--

CREATE TABLE IF NOT EXISTS `studentfeed` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(20) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `s_contact` varchar(20) NOT NULL,
  `s_feedback` text NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
