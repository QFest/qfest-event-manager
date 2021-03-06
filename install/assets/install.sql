-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2013 at 11:07 AM
-- Server version: 5.5.32-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bodhi_AAA2k13`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `event_name` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '',
  `stopped` int(2) NOT NULL DEFAULT '0',
  `cash` int(10) NOT NULL DEFAULT '50',
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=41 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `group_id`, `event_name`, `stopped`, `cash`) VALUES
(1, 1, 'PADMAVYUHA', 1, 50),
(2, 1, 'PRASHNOTHARI', 1, 50),
(3, 1, 'SETHUBANDHAN', 1, 50),
(4, 1, 'SHASTRAPATHRA', 1, 50),
(5, 2, 'Bhavachitra', 1, 50),
(6, 2, 'Smrithishastra', 1, 50),
(7, 2, 'Vikasitha', 1, 50),
(8, 3, 'AAVISHKAR', 1, 50),
(9, 3, 'MOKSHAYATI', 1, 50),
(10, 3, 'PRAKALPA', 1, 50),
(11, 3, 'SHASTRAPATHRA', 1, 50),
(12, 3, 'PRASNOTHARA', 1, 50),
(13, 4, '1 versus 0', 1, 50),
(14, 4, 'ELECTRICUS', 1, 50),
(15, 4, 'SHASTRAPATHRA', 1, 50),
(16, 4, 'VIJANATHI', 1, 50),
(17, 5, 'Anveshana', 1, 50),
(18, 5, 'Dattpravidha', 1, 50),
(19, 5, 'NIRDOSHANAM', 1, 50),
(20, 5, 'Prashnothari', 1, 50),
(21, 5, 'Shastrapathra', 1, 50),
(22, 6, 'INCEPTION', 1, 50),
(23, 6, '3D CAD drawing', 1, 50),
(24, 6, 'Robo Mud Race', 1, 50),
(25, 6, 'The Cyclist', 1, 50),
(26, 6, 'The Machinist', 1, 50),
(27, 6, 'The Mechanic', 1, 50),
(28, 7, 'IPL PLAYER AUCTION', 1, 50),
(29, 7, 'NRTYA UTSAV', 1, 50),
(30, 7, 'One Minute to win it', 1, 50),
(31, 7, 'Rockshow', 1, 100),
(32, 7, 'Spot Choreo', 1, 100),
(40, 10, 'Windows 8 App development', 1, 50),
(34, 7, 'DURGALAGGHANA', 1, 100),
(35, 7, 'CHAYACITRA', 1, 100),
(36, 7, 'AGRAGANYA', 1, 300),
(37, 9, 'Ranbhoomi NFS', 1, 100),
(38, 9, 'Ranbhoomi CounterStrike', 1, 100),
(39, 9, '3''s Football', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `event_groups`
--

CREATE TABLE IF NOT EXISTS `event_groups` (
  `group_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `event_groups`
--

INSERT INTO `event_groups` (`group_id`, `group_name`) VALUES
(1, 'Civil Engineering'),
(2, 'Computer Science'),
(3, 'Electronics & Communication'),
(4, 'Electrical & Electronics'),
(5, 'Information Technology'),
(6, 'Mechanical Engineering'),
(7, 'Cultural Events'),
(9, 'Gaming'),
(10, 'Workshops');

-- --------------------------------------------------------

--
-- Table structure for table `event_regs`
--

CREATE TABLE IF NOT EXISTS `event_regs` (
  `reg_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `event` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2238 ;

--
-- Dumping data for table `event_regs`
--

-- --------------------------------------------------------

--
-- Table structure for table `online_regs`
--

CREATE TABLE IF NOT EXISTS `online_regs` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '',
  `name` varchar(60) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_regdate` int(11) unsigned NOT NULL DEFAULT '0',
  `college` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `dept` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `cno` bigint(30) NOT NULL DEFAULT '0',
  `auth_key` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `confirm` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1260 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
         