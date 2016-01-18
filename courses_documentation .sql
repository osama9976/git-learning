-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2016 at 07:41 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses_documentation`
--

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--

CREATE TABLE `collage` (
  `ID` int(10) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collage`
--

INSERT INTO `collage` (`ID`, `name`) VALUES
(1, 'الشريعة والدراسات الإسلامية'),
(2, 'اللغة العربية والدراسات الاجتماعية'),
(3, 'التربية'),
(4, 'الاقتصاد والادارة'),
(5, 'الحاسب'),
(6, 'الهندسة'),
(7, 'الزراعة والطب البيطري'),
(8, 'العمارة والتخطيط'),
(9, 'الصيدلة'),
(10, 'الطب'),
(11, 'العلوم الطبية التطبيقية'),
(12, 'العلوم'),
(13, 'التصاميم');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `c_id` int(11) NOT NULL,
  `course` int(2) NOT NULL DEFAULT '0',
  `event` int(11) NOT NULL DEFAULT '0',
  `c_name` varchar(60) NOT NULL,
  `c_num` int(11) NOT NULL,
  `c_location` varchar(60) NOT NULL,
  `c_collage_index` int(3) NOT NULL,
  `c_dept` varchar(60) NOT NULL,
  `c_price` varchar(20) NOT NULL,
  `c_gender` int(1) NOT NULL,
  `c_target_group` varchar(60) NOT NULL,
  `c_duration` varchar(60) NOT NULL,
  `c_req_num` int(4) NOT NULL,
  `c_reg_time` date NOT NULL,
  `c_max_num` int(4) NOT NULL,
  `c_time_from` time NOT NULL,
  `c_time_to` time NOT NULL,
  `c_major` varchar(100) NOT NULL,
  `c_languate` varchar(20) NOT NULL,
  `c_goals` text,
  `c_doc_desc` text,
  `c_notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`c_id`, `course`, `event`, `c_name`, `c_num`, `c_location`, `c_collage_index`, `c_dept`, `c_price`, `c_gender`, `c_target_group`, `c_duration`, `c_req_num`, `c_reg_time`, `c_max_num`, `c_time_from`, `c_time_to`, `c_major`, `c_languate`, `c_goals`, `c_doc_desc`, `c_notes`) VALUES
(5, 0, 1, '', 0, '', 0, '', '', 0, '', '', 0, '0000-00-00', 0, '00:00:00', '00:00:00', '', '', '', '', ''),
(6, 1, 0, '', 0, '', 0, '', '', 0, '', '', 0, '0000-00-00', 0, '00:00:00', '00:00:00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doc_imgs`
--

CREATE TABLE `doc_imgs` (
  `img_id` int(11) NOT NULL,
  `img_loc` varchar(255) NOT NULL,
  `img_des` varchar(50) DEFAULT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collage`
--
ALTER TABLE `collage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doc_imgs`
--
ALTER TABLE `doc_imgs`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collage`
--
ALTER TABLE `collage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doc_imgs`
--
ALTER TABLE `doc_imgs`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_imgs`
--
ALTER TABLE `doc_imgs`
  ADD CONSTRAINT `Doc_Imgs_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `documentation` (`c_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
