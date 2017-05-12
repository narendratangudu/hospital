-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2016 at 09:36 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE IF NOT EXISTS `appoint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(12) DEFAULT NULL,
  `date` varchar(25) DEFAULT NULL,
  `address` longtext,
  `oldornew` varchar(25) DEFAULT NULL,
  `p_id` varchar(25) DEFAULT NULL,
  `subdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `pname`, `phone`, `email`, `date`, `address`, `oldornew`, `p_id`, `subdate`) VALUES
(1, 'varaprasad', 'varaprasad', 'varaprasad.f', '08-01-2016', 'This is something,some village, some town.', 'old', '100000', '2016-01-08 07:13:41'),
(2, 'varaprasad', 'varaprasad', 'varaprasad.f', '08-01-2016', 'This is something,some village, some town.', 'old', '100000', '2016-01-08 07:13:54'),
(3, 'varaprasad', 'varaprasad', 'varaprasad.f', '08-01-2016', 'This is something,some village, some town.', 'old', '100000', '2016-01-08 07:14:04'),
(4, 'varaprasad', 'varaprasad', 'varaprasad.f', '08-01-2016', 'This is something,some village, some town.', 'old', '100000', '2016-01-08 07:14:05'),
(5, 'varaprasad', 'varaprasad', 'varaprasad.f', '08-01-2016', 'This is something,some village, some town.', 'old', '100000', '2016-01-08 07:14:05'),
(6, 'varaprasad', 'varaprasad', 'varaprasad.f', '08-01-2016', 'This is something,some village, some town.', 'old', '100000', '2016-01-08 07:14:06'),
(7, 'varaprasad', 'varaprasad', 'varaprasad.f', '08-01-2016', 'This is something,some village, some town.', 'old', '100000', '2016-01-08 07:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(12) DEFAULT NULL,
  `address` longtext,
  `gender` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `symptoms` longtext,
  `joindate` datetime DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `pname`, `phone`, `email`, `address`, `gender`, `age`, `symptoms`, `joindate`) VALUES
(1, 'varaprasad', '9550335604', 'varaprasad.f', 'kalidindi, sanarudravaram,bhimavaram-521344', 'Female', 20, 'high pressre, stress, headache', '2016-01-08 08:10:33'),
(2, 'somu', '9550335604', 'varaprasad.f', 'pennada', 'Male', 15, 'too much chatting', '2016-01-08 08:11:27'),
(3, 'ramu', '95503356049', 'varaprasad.f', 'newyork', '', 0, 'heavy weight', '2016-01-08 08:12:29'),
(4, 'asdf', 'asdfa', 'sadfas', 'asdfasdf', 'Male', 100, 'nothing', '2016-01-08 09:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `visit_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(20) DEFAULT NULL,
  `cur_symts` longtext,
  `rect` varchar(200) DEFAULT NULL,
  `prec` longtext,
  `other` longtext,
  `joindate` datetime DEFAULT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`visit_id`, `p_id`, `cur_symts`, `rect`, `prec`, `other`, `joindate`) VALUES
(1, '', 'Head ache', 'Better than Previous', 'Some tablets,\r\nsome tanics etc.,', 'Patient feeling better than Previous', '2016-01-08 08:59:02'),
(2, '', 'Head ache', 'Better than Previous', 'Some tablets,\r\nsome tanics etc.,', 'Patient feeling better than Previous', '2016-01-08 09:01:24'),
(3, '', 'Head ache', 'Better than Previous', 'Some tablets,\r\nsome tanics etc.,', 'Patient feeling better than Previous', '2016-01-08 09:01:27'),
(4, '', 'Head ache', 'Better than Previous', 'Some tablets,\r\nsome tanics etc.,', 'Patient feeling better than Previous', '2016-01-08 09:01:37'),
(5, '', 'Head ache', 'Better than Previous', 'Some tablets,\r\nsome tanics etc.,', 'Patient feeling better than Previous', '2016-01-08 09:01:40'),
(6, '1', '', 'Better than Previous', '', '', '2016-01-08 09:02:09'),
(7, '1', 'Current Symptoms', 'Worst than Previous', 'More prescription', 'No other notes', '2016-01-08 09:02:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
