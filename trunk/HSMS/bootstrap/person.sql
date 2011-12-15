-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2011 at 10:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `PID` int(15) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1111111115 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`PID`, `firstName`, `lastName`, `DOB`, `gender`, `phoneNumber`, `street`, `postalCode`, `city`, `country`) VALUES
(1111111111, 'Tim', 'Duncan', '1980/01/01', 'Male', '01-111-1234567', 'fff', '1f2f3f', 'LA', 'USA'),
(1111111112, 'Kevin', 'G', '1980/02/02', 'Male', '01-111-4564566', 'aaa', 'a6s5d4', 'as', 'CA'),
(1111111113, 'Lebrown', 'J', '1990/01/03', 'Male', '01-456-9874564', 'aaa', 'z1x2c3', 'aaa', 'USA'),
(1111111114, 'Steven', 'N', '1985/05/05', 'Male', '01-564-9877411', 'adf', 't1h4f6', 'ggg', 'CA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
