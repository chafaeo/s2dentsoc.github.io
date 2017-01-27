-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 03:25 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `resume` varchar(150) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(15) NOT NULL,
  `verify` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`account_id`),
  KEY `fk_ACCOUNT_TYPE1_idx` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`, `first_name`, `last_name`, `type_id`, `resume`, `status`, `email`, `contact_number`, `verify`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'test', 'test', 1, NULL, NULL, 'admin@gmail.com', '', 'N'),
(2, 'student', 'cd73502828457d15655bbd7a63fb0bc8', 'student', 'student', 2, NULL, NULL, 'student@gmail.com', '', 'N'),
(3, 'arvin', '89f6432af2e2bcea9489ad02cd27a134', 'arvin rey', 'dela pena', 2, NULL, NULL, 'arvin@gmail.com', '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Web, Mobile & Software Development'),
(2, 'IT & Networking'),
(3, 'Design & Creative');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE IF NOT EXISTS `skill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `fk_SKILL_CATEGORY_idx` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill`, `category_id`) VALUES
(1, 'Desktop Software Development', 1),
(2, 'E-commerce Development', 1),
(3, 'Game Development', 1),
(4, 'Mobile Development', 1),
(5, 'Product Management', 1),
(6, 'QA & Testing', 1),
(7, 'Web Development', 1),
(8, 'Web & Mobile Design', 1),
(9, 'Other - Software Development', 1),
(10, 'Database Admin', 2),
(11, 'ERP/CRM Software', 2),
(12, 'Information Security', 2),
(13, 'Network & System Admin', 2),
(14, 'Other - IT & Networking', 2),
(16, 'Audio Production', 3),
(17, 'Graphic Design', 3),
(20, 'Other - Design & Creative', 3),
(21, 'Illustrator', 3),
(22, 'Photoshop', 3),
(23, 'Animation', 3);

-- --------------------------------------------------------

--
-- Table structure for table `skill_detail`
--

DROP TABLE IF EXISTS `skill_detail`;
CREATE TABLE IF NOT EXISTS `skill_detail` (
  `skill_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  PRIMARY KEY (`skill_detail_id`),
  KEY `fk_SKILL_DETAIL_ACCOUNT1_idx` (`account_id`),
  KEY `fk_SKILL_DETAIL_SKILL1_idx` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type`) VALUES
(1, 'admin'),
(2, 'student'),
(3, 'employer'),
(4, 'teacher');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_ACCOUNT_TYPE1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `fk_SKILL_CATEGORY` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skill_detail`
--
ALTER TABLE `skill_detail`
  ADD CONSTRAINT `fk_SKILL_DETAIL_ACCOUNT1` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SKILL_DETAIL_SKILL1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
