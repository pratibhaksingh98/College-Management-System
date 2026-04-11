-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 02:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bit`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `ddate` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `att` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `stu_id`, `name`, `course`, `branch`, `year`, `ddate`, `sub`, `att`) VALUES
(1, '1', 'Ghanshayam', 'B-Tech', 'IT', '1st Year', '03/04/2017', 'C Language', 'P'),
(2, '1', 'Ghanshayam', 'B-Tech', 'IT', '1st Year', '04/04/2017', 'C Language', 'P'),
(3, '1', 'Ghanshayam', 'B-Tech', 'IT', '1st Year', '02/04/2017', 'C Language', 'A'),
(4, '1', 'Ghanshayam', 'B-Tech', 'IT', '1st Year', '01/04/2017', 'C Language', 'H'),
(5, '1', 'Ghanshayam', 'B-Tech', 'IT', '1st Year', '03/04/2017', 'C Language', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(1, 'ram', 'ram@gmail.com', 'none'),
(2, 'Sham', '', 'hi'),
(3, '', 'shakti.programmer@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact2`
--

CREATE TABLE IF NOT EXISTS `contact2` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact2`
--

INSERT INTO `contact2` (`id`, `fname`, `lname`, `email`, `sub`, `msg`) VALUES
(0, 'Ram', 'Singh', 'd@gmail.com', 'hello', 'bye');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `reg` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `fname`, `mname`, `dob`, `gender`, `course`, `branch`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `mob`, `email`, `address`, `password`, `type`, `image`, `reg`) VALUES
(1, 'Ram', 'Sham', 'Kaam', '09/01/1991', 'Male', 'B-Tech', 'IT', '', '', '', 'C Language', '', '7007480495', 'ram@gmail.com', 'Gorakhpur', '12345', 'Admin', 'upload/img1.png', 123),
(2, 'Sham', 'Kaam', 'Sh', '01/01/1990', 'Male', 'B-Tech', 'IT', 'C Language', 'None', 'None', 'None', 'None', '9236151000', 'shakti.programmer@gmail.com', 'GKP', 'tiger', 'Employee', 'upload/Add.jpg', 111);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `sessional` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `mm` varchar(50) NOT NULL,
  `om` varchar(50) NOT NULL,
  `per` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `stu_id`, `name`, `mob`, `sessional`, `sub`, `mm`, `om`, `per`) VALUES
(1, 1, 'Ghanshayam', '7007480495', 'Sessional 1', 'C Language', '100', '60', '60');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `reg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `fname`, `mname`, `dob`, `gender`, `course`, `branch`, `year`, `section`, `mob`, `email`, `address`, `password`, `image`, `reg`) VALUES
(1, 'Ghanshayam', 'Sham', 'Kaam', '09/01/1991', 'Male', 'B-Tech', 'IT', '1st Year', 'A', '7007480495', 'ram@gmail.com', 'Gorakhpur', 'tiger', 'upload/Holi.jpg', '123'),
(3, 'abc', '', '', '', 'Male', 'MCA', 'IT', '1st Year', 'A', '', '', '', ' xc0sKUKl', 'upload/', '121'),
(4, '123', '456', '789', '30/11/1995', 'Female', 'B-Tech', 'IT', '1st Year', 'A', 'ffhjkklljhgd', 'vcgjtsghsf', 'fhkgfgh', ' nLOY0sSf', 'upload/', '123');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sub` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `course`, `branch`, `year`, `sub`) VALUES
(1, 'B-Tech', 'IT', '1st Year', 'C Language'),
(2, 'B-Tech', 'IT', '1st Year', 'C Language'),
(3, 'MCA', 'IT', '1st Year', 'ABC');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
