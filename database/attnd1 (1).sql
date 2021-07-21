-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2018 at 01:41 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attnd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `af`
--

DROP TABLE IF EXISTS `af`;
CREATE TABLE IF NOT EXISTS `af` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) DEFAULT NULL,
  `emp_id` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `af`
--

INSERT INTO `af` (`att_id`, `value`, `emp_id`, `date`) VALUES
(25, 'Present', '3', '2018-10-21'),
(24, 'Present', '2', '2018-10-21'),
(23, 'Absent', '5', '2018-10-19'),
(22, 'Absent', '4', '2018-10-19'),
(21, 'Present', '3', '2018-10-19'),
(20, 'Present', '2', '2018-10-19'),
(26, 'Present', '4', '2018-10-21'),
(27, 'Present', '5', '2018-10-21'),
(28, 'Absent', '6', '2018-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `date` varchar(40) NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `value`, `emp_id`, `date`) VALUES
(105, 'Absent', 20, '2018-10-21'),
(104, 'Present', 19, '2018-10-21'),
(103, 'Present', 14, '2018-10-21'),
(102, 'Present', 15, '2018-10-21'),
(101, 'Present', 16, '2018-10-21'),
(100, 'Present', 17, '2018-10-21'),
(99, 'Present', 18, '2018-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `name`, `fname`, `email`) VALUES
(18, 'Ruchi', 'Sanjay', 'ruchimishra@gmail.com'),
(17, 'Rushi', 'Rajaram', 'rushigaikwad@gmail.com'),
(16, 'Janhavi', 'Milind', 'janhavikharade@gmail.com'),
(15, 'Sonalika', 'Mukesh', 'sonalikarai372@gmail.com'),
(14, 'Manish ', 'Babulal', 'Manyshverma@gmail.com'),
(19, 'cs new', 'cs new', 'csnew@gmail.com'),
(20, 'cs1', 'cs1', 'cs1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `iis`
--

DROP TABLE IF EXISTS `iis`;
CREATE TABLE IF NOT EXISTS `iis` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) DEFAULT NULL,
  `emp_id` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iis`
--

INSERT INTO `iis` (`att_id`, `value`, `emp_id`, `date`) VALUES
(27, 'Absent', '6', '2018-10-21'),
(26, 'Present', '4', '2018-10-21'),
(25, 'Present', '5', '2018-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

DROP TABLE IF EXISTS `it`;
CREATE TABLE IF NOT EXISTS `it` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) DEFAULT NULL,
  `emp_id` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`att_id`, `value`, `emp_id`, `date`) VALUES
(65, 'Absent', '10', '2018-10-21'),
(64, 'Absent', '9', '2018-10-21'),
(63, 'Absent', '8', '2018-10-21'),
(62, 'Absent', '7', '2018-10-21'),
(61, 'Present', '6', '2018-10-21'),
(60, 'Present', '5', '2018-10-21'),
(59, 'Present', '4', '2018-10-21'),
(58, 'Present', '9', '2018-10-19'),
(57, 'Present', '8', '2018-10-19'),
(56, 'Present', '7', '2018-10-19'),
(55, 'Present', '6', '2018-10-19'),
(54, 'Present', '5', '2018-10-19'),
(53, 'Present', '4', '2018-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `un` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `un`, `pass`) VALUES
(1, 'sona', '1234'),
(2, 'manish', '123'),
(3, 'manish', '123');

-- --------------------------------------------------------

--
-- Table structure for table `std_af`
--

DROP TABLE IF EXISTS `std_af`;
CREATE TABLE IF NOT EXISTS `std_af` (
  `emp_id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_af`
--

INSERT INTO `std_af` (`emp_id`, `name`, `fname`, `email`) VALUES
(2, 'af', 'af', 'af@gmail.com'),
(3, 'af1', 'af1', 'af1@gmail.com'),
(4, 'af2', 'af3', 'af3@gmail.com'),
(5, 'afnew', 'afnew', 'afnew@gmail.com'),
(6, 'af3', 'af3', 'af3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `std_is`
--

DROP TABLE IF EXISTS `std_is`;
CREATE TABLE IF NOT EXISTS `std_is` (
  `emp_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_is`
--

INSERT INTO `std_is` (`emp_id`, `name`, `fname`, `email`) VALUES
(5, 'btnew', 'btnew', 'btnew@gmail.com'),
(4, 'bt', 'bt', 'bt@gmail.com'),
(6, 'bt1', 'bt1', 'bt1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `std_it`
--

DROP TABLE IF EXISTS `std_it`;
CREATE TABLE IF NOT EXISTS `std_it` (
  `emp_id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_it`
--

INSERT INTO `std_it` (`emp_id`, `name`, `fname`, `email`) VALUES
(4, 'manish', 'babulal', 'manish@gmail.com'),
(5, 'Sonalika', 'Mukesh', 'sonalikarai372@gmail.com'),
(6, 'Janhavi', 'Milind', 'janhavi452@gmail.com'),
(7, 'Rushi', 'Rajaram', 'rushigaikwad2@gmail.com'),
(8, 'Ruchi', 'Sanjay', 'ruchimishra@gmail.com'),
(9, 'itnew', 'itnew', 'itnew@gmail.com'),
(10, 'it1', 'it1', 'it1@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
