-- phpMyAdmin SQL Dump
-- version 2.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2013 at 03:00 PM
-- Server version: 5.1.28
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ssms`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_level`
--

CREATE TABLE `access_level` (
  `access_Level` int(45) NOT NULL AUTO_INCREMENT,
  `access_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`access_Level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `access_level`
--

INSERT INTO `access_level` (`access_Level`, `access_Name`) VALUES
(1, 'Administrator'),
(3, 'Staff'),
(4, 'Bursar'),
(6, 'Card Generation Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_Id` int(45) NOT NULL AUTO_INCREMENT,
  `school_Id` varchar(45) NOT NULL,
  `class_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`class_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_Id`, `school_Id`, `class_Name`) VALUES
(1, '1', 'Jss1'),
(2, '1', 'Jss2'),
(3, '1', 'Jss3'),
(4, '2', 'sss1'),
(5, '2', 'sss2'),
(6, '2', 'sss3');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_Id` int(10) NOT NULL AUTO_INCREMENT,
  `grade_Name` varchar(45) NOT NULL,
  `grade_Value` varchar(45) NOT NULL,
  PRIMARY KEY (`grade_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_Id`, `grade_Name`, `grade_Value`) VALUES
(1, 'A', '5'),
(2, 'B', '4'),
(3, 'C', '3'),
(4, 'D', '2'),
(5, 'E', '1'),
(6, 'F', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_Id` int(45) NOT NULL AUTO_INCREMENT,
  `student_Id` varchar(45) NOT NULL,
  `class_Id` varchar(45) NOT NULL,
  `session_Id` varchar(45) NOT NULL,
  `term_Id` varchar(45) NOT NULL,
  `required_Amount` varchar(45) NOT NULL,
  `paid_Amount` varchar(45) NOT NULL,
  `date_Of_Payment` varchar(45) NOT NULL,
  `receipt_No` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`payment_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_Id`, `student_Id`, `class_Id`, `session_Id`, `term_Id`, `required_Amount`, `paid_Amount`, `date_Of_Payment`, `receipt_No`, `status`) VALUES
(1, '', '', '', '', '', '50,000', '', '', ''),
(2, '', '', '', '', '', '50,000', '', '', ''),
(3, '1', '', '2013/2014', '1st', '', '50,000', '', '', ''),
(4, '1', '', '2013/2014', '1st', '', '50,000', '', '', ''),
(5, '1', '', '2013/2014', '1st', '', '50,000', 'wert', '', ''),
(6, '1', '', '2013/2014', '1st', '', '50,000', '', '', ''),
(7, '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '565688', '', '', ''),
(9, '', '', '', '', '', '67.09', '', '', ''),
(10, '', '', '1', '1', '', '67.09', '', '', ''),
(11, '17', '1', '1', '1', '', '78', '', '', ''),
(12, '17', '1', '1', '1', '', '78', '', '8', ''),
(13, '18', '1', '1', '1', '', '67.090', '', '989', ''),
(19, '17', '1', '1', '1', '', '67', '76', '67', ''),
(20, '17', '1', '1', '1', '', '67', '676', '67', ''),
(21, '17', '1', '1', '1', '', '676', '767', '67', ''),
(22, '20', '1', '1', '1', '', '56', '566', '3', ''),
(23, '20', '1', '1', '1', '', '787', '878', '78', ''),
(24, '17', '1', '1', '1', '', '98', '898', '989', ''),
(25, '18', '1', '1', '1', '', '8', '898', '98', ''),
(26, '17', '1', '1', '1', '20,000', '20,000', '76', '67', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registered_staff`
--

CREATE TABLE `registered_staff` (
  `staff_Id` int(45) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) NOT NULL,
  `first_Name` varchar(45) NOT NULL,
  `middle_Name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `date_Of_Birth` varchar(45) NOT NULL,
  `mobile_No` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(60) NOT NULL,
  PRIMARY KEY (`staff_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `registered_staff`
--

INSERT INTO `registered_staff` (`staff_Id`, `role`, `first_Name`, `middle_Name`, `surname`, `title`, `sex`, `date_Of_Birth`, `mobile_No`, `email`, `username`) VALUES
(26, '1', 'tope', 'Dav', 'David', 'Dr', 'Female', '', '76', '76', 'admin'),
(27, '3', 'tope', 'Dav', 'David', 'Miss', 'Female', '', '76', '76', 'james'),
(28, '3', 'Kola', 'Mazing', 'adebayo', 'Mr', 'Male', '', '08094736787678', 'adekoola@gmail.com', 'kola'),
(29, '4', 'james', '', 'james', 'Mr', 'Male', '', '0908080890099', 'yuy', 'james@james'),
(30, '1', '', '', '', 'Miss', 'Female', '', '', '', '@'),
(31, '1', '', '', '', 'Miss', 'Female', '', '', '', '@'),
(32, '1', 'emeka', 'paul', 'paul', 'Mr', 'Male', '', '08047253566', 'paul', 'emeka@paul'),
(34, '1', 'dsfgh', 'fdhgh', 'fh', 'Miss', 'Female', '', '098765', 'kl', 'dsfgh@fh'),
(37, '1', 'adfsghj', 'dhgfhj', 'hcgvh', 'Miss', 'Female', '', '08047253566', 'adekoola@gmail.com', 'adfsghj@hcgvh'),
(38, '6', 'josh', 'kj', 'josh', 'Mr', 'Male', '', '08047253566', 'adekoola@gmail.com', 'josh@josh'),
(39, '1', 'fds', 'gdf', 'fd', 'Miss', 'Female', '', '08047253566', 'adekoola@gmail.com', 'fds@fd'),
(41, '1', 'SAFD', 'dgfh', 'ghj', 'Miss', 'Female', '', '08047253566', 'adekoola@gmail.com', 'SAFD@ghj'),
(42, '1', 'dfjg', 'fghj', 'fhj', 'Mr', 'Female', '', '08047253566', 'adekoola@gmail.com', 'dfjg@fhj'),
(49, '1', '87', '878', '787', 'Miss', 'Female', '', '8', '78', '87@787');

-- --------------------------------------------------------

--
-- Table structure for table `registered_stud`
--

CREATE TABLE `registered_stud` (
  `student_Id` int(45) NOT NULL AUTO_INCREMENT,
  `class_Id` varchar(45) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `first_Name` varchar(60) NOT NULL,
  `middle_Name` varchar(60) NOT NULL,
  `sex` varchar(45) NOT NULL,
  `passport` varchar(45) NOT NULL,
  `date_Of_Birth` varchar(45) NOT NULL,
  `year_Of_Entry` varchar(45) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `state` varchar(60) NOT NULL,
  `lga` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_No` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `religion` varchar(45) NOT NULL,
  `mother_Tongue` varchar(45) NOT NULL,
  `ssurname` varchar(60) NOT NULL,
  `sfirst_Name` varchar(60) NOT NULL,
  `sother_Name` varchar(60) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `soccupation` varchar(60) NOT NULL,
  `srelationship` varchar(50) NOT NULL,
  `ksurname` varchar(60) NOT NULL,
  `kfirst_Name` varchar(60) NOT NULL,
  `kother_Name` varchar(60) NOT NULL,
  `kaddress` varchar(100) NOT NULL,
  `koccupation` varchar(60) NOT NULL,
  `krelationship` varchar(50) NOT NULL,
  PRIMARY KEY (`student_Id`),
  UNIQUE KEY `first_Name` (`first_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `registered_stud`
--

INSERT INTO `registered_stud` (`student_Id`, `class_Id`, `surname`, `first_Name`, `middle_Name`, `sex`, `passport`, `date_Of_Birth`, `year_Of_Entry`, `nationality`, `state`, `lga`, `address`, `mobile_No`, `email`, `religion`, `mother_Tongue`, `ssurname`, `sfirst_Name`, `sother_Name`, `saddress`, `soccupation`, `srelationship`, `ksurname`, `kfirst_Name`, `kother_Name`, `kaddress`, `koccupation`, `krelationship`) VALUES
(17, '1', 'olayiwola', 'grace', '', 'Female', '', '', '1995', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '1', 'ameh', 'friday', 'Mariam', 'Male', '', '', '2000', 'nigeria', 'ondo', 'iwo', 'no24 eru oba street', '08038364969', 'amehfriday@gmail.com', 'christian', 'hausa', '67', '67', '67', '6', '76', '76', '76', '76', '76', '76', '67', '7'),
(19, '4', '76', '76767', '', 'Female', '', '', '1995', '76', '76', '7', '67', '67', '67', '67', '67', '6', '76', '7', '76', '7', '7', '7', '67', '67', '6', '76', '76'),
(20, '1', 'Adeniji', 'Toluwalade', '', 'Female', 'uploads/1376100522.jpg', '', '2013', 'Nigerian', 'Osun', 'Iwo', 'Osogbo', '90909090909', 'tolu@yahoo.com', 'Christain', 'Yoruba', 'Adeniji', 'M', '', 'Osogba', 'Civil Servant', 'Father', 'Adeniji', 'Bola', '', 'Osogbo', 'student', 'Sister'),
(21, '', '', '', '', '', 'uploads/1376654472.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', 'dfgtyry', 'ttyu', '', '', 'uploads/1376659720.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result_sheet`
--

CREATE TABLE `result_sheet` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `term_Id` varchar(10) NOT NULL,
  `session_Id` varchar(10) NOT NULL,
  `school_Id` varchar(10) NOT NULL,
  `student_Id` varchar(10) NOT NULL,
  `class_Id` varchar(10) NOT NULL,
  `total_score` varchar(10) NOT NULL,
  `total_subject` varchar(45) NOT NULL,
  `average` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `result_sheet`
--

INSERT INTO `result_sheet` (`id`, `term_Id`, `session_Id`, `school_Id`, `student_Id`, `class_Id`, `total_score`, `total_subject`, `average`) VALUES
(106, '1', '1', '', '17', '1', '100', '2', '50'),
(107, '1', '1', '', '18', '1', '100', '2', '50'),
(108, '1', '1', '', '19', '4', '180', '3', '60');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_Id` int(45) NOT NULL AUTO_INCREMENT,
  `school_Type` varchar(45) NOT NULL,
  PRIMARY KEY (`school_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_Id`, `school_Type`) VALUES
(1, 'Junior Secondary School'),
(2, 'Senior Secondary School');

-- --------------------------------------------------------

--
-- Table structure for table `school_fee`
--

CREATE TABLE `school_fee` (
  `school_fee_Id` int(45) NOT NULL AUTO_INCREMENT,
  `class_Id` varchar(45) NOT NULL,
  `session` varchar(45) NOT NULL,
  `term` varchar(45) NOT NULL,
  `amount` varchar(60) NOT NULL,
  PRIMARY KEY (`school_fee_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `school_fee`
--

INSERT INTO `school_fee` (`school_fee_Id`, `class_Id`, `session`, `term`, `amount`) VALUES
(6, '1', '1', '1', '20,000'),
(7, '2', '1', '1', '40,000'),
(8, '1', '1', '1', ''),
(9, '', '1', '1', ''),
(10, '1', '1', '1', ''),
(11, '1', '1', '1', ''),
(12, '2', '1', '1', '50,000'),
(13, '1', '1', '1', ''),
(14, '1', '1', '1', '98'),
(15, '1', '1', '1', '34,000'),
(16, '1', '1', '1', '89');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_Id` int(45) NOT NULL AUTO_INCREMENT,
  `session_Name` varchar(45) NOT NULL,
  `session_Status` varchar(45) NOT NULL,
  PRIMARY KEY (`session_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_Id`, `session_Name`, `session_Status`) VALUES
(1, '2013/2014', 'active'),
(2, '2014/2015', 'inactive'),
(3, '2015/2016', 'inactive'),
(4, '2016/2017', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `stud_scores`
--

CREATE TABLE `stud_scores` (
  `scores_Id` int(45) NOT NULL AUTO_INCREMENT,
  `student_Id` varchar(45) NOT NULL,
  `school_Id` varchar(45) NOT NULL,
  `class_Id` varchar(45) NOT NULL,
  `session_Id` varchar(45) NOT NULL,
  `term_Id` varchar(45) NOT NULL,
  `subject_Id` varchar(45) NOT NULL,
  `test_score` varchar(45) NOT NULL,
  `exam_score` varchar(45) NOT NULL,
  `total_score` varchar(45) NOT NULL,
  `grade_Value` varchar(45) NOT NULL,
  `has_scores` varchar(10) NOT NULL,
  PRIMARY KEY (`scores_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `stud_scores`
--

INSERT INTO `stud_scores` (`scores_Id`, `student_Id`, `school_Id`, `class_Id`, `session_Id`, `term_Id`, `subject_Id`, `test_score`, `exam_score`, `total_score`, `grade_Value`, `has_scores`) VALUES
(12, '19', '2', '4', '1', '1', '16', '23', '23', '46', '2', '1'),
(13, '19', '2', '4', '1', '1', '17', '23', '43', '66', '4', '1'),
(14, '19', '2', '4', '1', '1', '18', '23', '45', '68', '4', '1'),
(15, '17', '1', '1', '1', '1', '4', '21', '23', '44', '1', '1'),
(16, '17', '1', '1', '1', '1', '15', '22', '34', '56', '3', '1'),
(17, '18', '1', '1', '1', '1', '4', '22', '32', '54', '3', '1'),
(18, '18', '1', '1', '1', '1', '15', '23', '23', '46', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_Id` int(45) NOT NULL AUTO_INCREMENT,
  `school_Id` varchar(45) NOT NULL,
  `subject_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`subject_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_Id`, `school_Id`, `subject_Name`) VALUES
(4, '1', 'Mathematics'),
(15, '1', 'English language'),
(16, '2', 'Economics'),
(17, '2', 'Agriculturer Science'),
(18, '2', 'Biology'),
(19, '1', 'Yoruba'),
(20, '1', 'french'),
(21, '1', 'social studies'),
(22, '1', 'social studies'),
(24, '1', 'Mathematics'),
(25, '1', 'CRS'),
(26, '1', 'Chemistry'),
(27, '1', 'economics'),
(28, '1', 'geography'),
(31, '', ''),
(32, '', ''),
(33, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_Id` int(45) NOT NULL AUTO_INCREMENT,
  `term_Name` varchar(45) NOT NULL,
  `term_Status` varchar(45) NOT NULL,
  PRIMARY KEY (`term_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_Id`, `term_Name`, `term_Status`) VALUES
(1, '1st', 'active'),
(2, '2nd', 'inactive'),
(3, '3rd', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(45) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `access_Level` varchar(45) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `access_Level`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'john', 'john', '4'),
(3, '@', '1375355618', ''),
(4, '@opeyemi', '1375355668', ''),
(5, '@', '1375355872', ''),
(6, '@', '1375356376', ''),
(7, 'ade@', '1375570323', ''),
(8, 'ghhjklj@', '1375570427', ''),
(9, 'favour@', '1375570852', ''),
(10, 'grace@', '1375571155', ''),
(11, 'kola@adebayo', '1375571589', ''),
(12, 'ameh@opeyemi', '1375573922', ''),
(13, 'friday@', '1375694248', ''),
(14, '76767@', '1376036925', ''),
(15, '76@76', '1376037728', ''),
(16, 'james', 'james', '3'),
(17, 'Toluwalade@', '1376100150', ''),
(18, 'Toluwalade@', '1376100328', ''),
(19, 'friday', 'friday', '6'),
(20, '87@787', '1377077135', '1');
