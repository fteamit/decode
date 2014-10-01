-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2014 at 06:33 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `decode_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE IF NOT EXISTS `tbl_bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT '1',
  `paricipants` int(11) NOT NULL DEFAULT '2',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `game_id` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `booking_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE IF NOT EXISTS `tbl_faqs` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faq_status` tinyint(2) NOT NULL DEFAULT '1',
  `faq_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_games`
--

CREATE TABLE IF NOT EXISTS `tbl_games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `game_desc` text COLLATE utf8_unicode_ci,
  `game_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `game_difficult` int(11) NOT NULL DEFAULT '1',
  `game-status` tinyint(4) NOT NULL DEFAULT '1',
  `game_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE IF NOT EXISTS `tbl_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_value` text COLLATE utf8_unicode_ci,
  `option_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option_group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `option_status` tinyint(2) NOT NULL DEFAULT '1',
  `option_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prices`
--

CREATE TABLE IF NOT EXISTS `tbl_prices` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_status` tinyint(4) NOT NULL DEFAULT '1',
  `price_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_times`
--

CREATE TABLE IF NOT EXISTS `tbl_times` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  `game_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `time_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
