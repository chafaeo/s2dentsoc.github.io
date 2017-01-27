-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 02:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `verify` varchar(3) NOT NULL DEFAULT 'N',
  `token` varchar(250) NOT NULL,
  PRIMARY KEY (`account_id`),
  KEY `fk_ACCOUNT_TYPE1_idx` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `type_id`, `username`, `password`, `contact_number`, `email`, `verify`, `token`) VALUES
(38, 2, 'arvin', '89f6432af2e2bcea9489ad02cd27a134', '09055850532', 'arvinreydp@gmail.com', 'Y', 'e6f5c217d9ceaa639a0499041e6cdbe5'),
(39, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '09056219184', 'admin@gmail.com', '', ''),
(40, 3, 'company', '93c731f1c3a84ef05cd54d044c379eaa', '09055850535', 'company@gmail.com', 'Y', '66464646464654798787987987');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `account_id`, `fname`, `lname`) VALUES
(1, 39, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Web, Mobile & Software Development'),
(2, 'IT & Networking'),
(3, 'Design & Creative');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_desc` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`company_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `account_id`, `name`, `company_desc`, `address`) VALUES
(1, 40, 'Entheos IT', 'Software Company', 'Dr. Miciano Rd., Dumaguete City');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `max_applicants` int(11) NOT NULL,
  `date_posted` datetime NOT NULL,
  `company_id` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  PRIMARY KEY (`job_id`),
  KEY `company_id` (`company_id`),
  KEY `company_id_2` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `title`, `description`, `max_applicants`, `date_posted`, `company_id`, `location`) VALUES
(1, 'OJT for Web Dev Department', 'The On The Job Trainee will be exposed in developing websites. The On The Job Trainee will be exposed in developing websites. The On The Job Trainee will be exposed in developing websites.', 30, '2016-10-29 05:23:08', 1, 'Dr. Miciano Rd., Dumaguete City'),
(2, 'Internship Business Or It Related', 'We are looking for OJT (On-the-Job Trainee) or Interns (for Internship) to fulfill requirements on your course. Preferrable Business / IT / Marketing Related courses. 200 hours above. Willing to wor...', 15, '2016-10-21 15:23:09', 1, 'Valencia, Negros Oriental');

-- --------------------------------------------------------

--
-- Table structure for table `job_applicant`
--

CREATE TABLE IF NOT EXISTS `job_applicant` (
  `job_applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`job_applicant_id`),
  KEY `job_id` (`job_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `job_applicant`
--

INSERT INTO `job_applicant` (`job_applicant_id`, `job_id`, `student_id`, `status`) VALUES
(1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_skills_requirement`
--

CREATE TABLE IF NOT EXISTS `job_skills_requirement` (
  `job_skills_requirement_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  PRIMARY KEY (`job_skills_requirement_id`),
  KEY `job_id` (`job_id`,`skill_id`),
  KEY `skill_id` (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `job_skills_requirement`
--

INSERT INTO `job_skills_requirement` (`job_skills_requirement_id`, `job_id`, `skill_id`) VALUES
(5, 1, 1),
(1, 1, 2),
(4, 1, 3),
(3, 1, 6),
(2, 1, 7),
(7, 1, 13),
(6, 1, 14),
(10, 2, 2),
(8, 2, 3),
(11, 2, 5),
(12, 2, 7),
(9, 2, 19);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `fk_SKILL_CATEGORY_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

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
(15, 'Animation', 3),
(16, 'Audio Production', 3),
(17, 'Graphic Design', 3),
(18, 'Illustration', 3),
(19, 'Photoshop', 3),
(20, 'Other - Design & Creative', 3);

-- --------------------------------------------------------

--
-- Table structure for table `skill_detail`
--

CREATE TABLE IF NOT EXISTS `skill_detail` (
  `skill_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  PRIMARY KEY (`skill_detail_id`),
  KEY `fk_SKILL_DETAIL_ACCOUNT1_idx` (`account_id`),
  KEY `fk_SKILL_DETAIL_SKILL1_idx` (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `skill_detail`
--

INSERT INTO `skill_detail` (`skill_detail_id`, `account_id`, `skill_id`) VALUES
(22, 38, 5),
(23, 38, 12),
(24, 38, 17);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `resume` varchar(250) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `account_id`, `fname`, `lname`, `resume`) VALUES
(1, 38, 'arv', 'dp', 'ddd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `job_applicant`
--
ALTER TABLE `job_applicant`
  ADD CONSTRAINT `job_applicant_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `job_applicant_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `job_skills_requirement`
--
ALTER TABLE `job_skills_requirement`
  ADD CONSTRAINT `job_skills_requirement_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`skill_id`),
  ADD CONSTRAINT `job_skills_requirement_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

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

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
