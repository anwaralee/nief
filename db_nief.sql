-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2014 at 07:40 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nief`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE IF NOT EXISTS `tbl_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `meta_key` text NOT NULL,
  `meta_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `title`, `content`, `meta_key`, `meta_desc`) VALUES
(1, 'About', 'New About us page. New About us page. New About us page. New About us page. New About us page. New About us page.', 'New About us page.', 'New About us page.'),
(2, 'Portfolio', 'New Portfolio page. New Portfolio page. New Portfolio page. New Portfolio page.', 'New Portfolio page.', 'New Portfolio page.'),
(3, 'Missions & Goals', 'New Missions & Goals page. New Missions & Goals page. New Missions & Goals page. New Missions & Goals page.', 'New Missions & Goals page.', 'New Missions & Goals page.'),
(4, 'Contact Us', 'New Contact Us page. New Contact Us page. New Contact Us page. New Contact Us page.', 'New Contact Us page.', 'New Contact Us page.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
