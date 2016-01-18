-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2015 at 07:12 
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courses_documentation`
--

-- --------------------------------------------------------

--
-- Table structure for table `Documentation`
--

CREATE TABLE IF NOT EXISTS `Documentation` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_price` varchar(20) NOT NULL,
  `c_gender` tinyint(1) NOT NULL,
  `c_num` int(11) NOT NULL,
  `c_req_num` tinyint(4) NOT NULL,
  `c_reg_time` date NOT NULL,
  `c_max_num` tinyint(4) NOT NULL,
  `c_time_from` time NOT NULL,
  `c_time_to` time NOT NULL,
  `c_major` varchar(100) NOT NULL,
  `c_location` varchar(60) NOT NULL,
  `c_languate` varchar(20) NOT NULL,
  `C_goals` text,
  `c_notes` text,
  `c_doc_desc` text,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Doc_Imgs`
--

CREATE TABLE IF NOT EXISTS `Doc_Imgs` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_loc` varchar(255) NOT NULL,
  `img_des` varchar(50) DEFAULT NULL,
  `doc_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `doc_id` (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Doc_Imgs`
--
ALTER TABLE `Doc_Imgs`
  ADD CONSTRAINT `Doc_Imgs_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `Documentation` (`c_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
