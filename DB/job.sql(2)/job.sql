-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 18, 2014 at 10:21 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `job`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `application_master`
-- 

CREATE TABLE `application_master` (
  `ApplicationId` int(11) NOT NULL auto_increment,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY  (`ApplicationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `application_master`
-- 

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES 
(1, 3, 1, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(2, 3, 2, 'Call Latter Send', 'You are Invited For Interview on 10-MAR-2013.'),
(3, 3, 3, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(5, 3, 4, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(6, 10, 1, 'Apply', 'No Message'),
(7, 7, 1, 'Apply', 'No Message'),
(8, 7, 5, 'Apply', 'No Message'),
(9, 11, 1, 'Apply', 'No Message'),
(10, 11, 8, 'Call Latter Send', 'call later'),
(11, 11, 9, 'Call Latter Send', 'i am calling you for interview later'),
(12, 11, 10, 'Apply', 'No Message'),
(13, 11, 11, 'Apply', 'No Message'),
(14, 11, 18, 'Apply', 'No Message');

-- --------------------------------------------------------

-- 
-- Table structure for table `employer_reg`
-- 

CREATE TABLE `employer_reg` (
  `EmployerId` int(11) NOT NULL auto_increment,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY  (`EmployerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `employer_reg`
-- 

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES 
(7, 'comsats', 'ali', 'brw', 'brw', 's@yahoo.com', 3456473804, 'shjgssgad', 'Confirm', 'sajjad', 'gujjar904', 'What is Your Pet Name?', 'gujjar'),
(8, 'FOOD', 'mohsin', 'BUrewala', 'brw', 's@yahoo.com', 3438473904, 'Developer', 'Confirm', 'abc', 'abc', 'What is Your Pet Name?', 'gujjar'),
(9, 'Weela', 'Jutt', 'brw', 'burewala', 's@ymail.com', 3438473904, 'Developer', 'Confirm', 'sajjad', 'abc', 'What is Your Pet Name?', 'gujjar'),
(12, 'abc', 'iram', 'vehari', 'vehari', 'a@gmail.com', 123456778889, 'teaching', 'Confirm', 'iram', '123', 'Who is Your Favourite Person?', 'dogy'),
(13, 'Friends & Family', 'sajjad', 'LAHORE', 'brw', 'd@ymail.com', 3438473904, 'developer', 'Confirm', 'sun', 'sun', 'Who is Your Favourite Person?', 's'),
(14, 'Vision Consultant', 'mustafa', 'Lahore', 'Vehari', 's@ymail.com', 3438473904, 'Office Administrationâ€Ž', 'Confirm', 'gujjar', 'gujjar', 'What is Your Pet Name?', 'gujjar');

-- --------------------------------------------------------

-- 
-- Table structure for table `experience`
-- 

CREATE TABLE `experience` (
  `E_id` int(11) NOT NULL auto_increment,
  `seekerid` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `EndDate` varchar(255) NOT NULL,
  `Work_exp` varchar(255) NOT NULL,
  `Work_area` varchar(255) NOT NULL,
  `Current_job` varchar(255) NOT NULL,
  `Cmp_name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  PRIMARY KEY  (`E_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `experience`
-- 

INSERT INTO `experience` (`E_id`, `seekerid`, `start_date`, `EndDate`, `Work_exp`, `Work_area`, `Current_job`, `Cmp_name`, `Location`) VALUES 
(5, 11, 'April1999', 'February2001', '1', 'Software', 'jhjhk', '', 'Bannu'),
(6, 11, 'February2000', 'April2003', '3', 'Developer', 'xzdasdassda', 'Comsats', 'Barbar loi');

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback`
-- 

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL auto_increment,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY  (`FeedbackId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `feedback`
-- 

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES 
(5, 3, 'asdad', '2018-09-13'),
(6, 3, 'asd', '2013-09-18'),
(7, 4, 'Thanks For Your Support.', '2013-09-18'),
(8, 3, 'asd', '2013-09-22'),
(9, 7, 'hjhgsjkfsdkjf', '2014-05-03'),
(11, 6, 'Exelent...!', '2014-06-16');

-- --------------------------------------------------------

-- 
-- Table structure for table `job_master`
-- 

CREATE TABLE `job_master` (
  `JobId` int(11) NOT NULL auto_increment,
  `CompanyName` varchar(20) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Work_aera` varchar(255) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `App_date` date NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY  (`JobId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `job_master`
-- 

INSERT INTO `job_master` (`JobId`, `CompanyName`, `Location`, `JobTitle`, `Work_aera`, `Vacancy`, `MinQualification`, `App_date`, `Description`) VALUES 
(1, 'Wipro Infotech', '', 'Software Professional Required', '', 2, 'M.C.A', '0000-00-00', 'ASP.NET'),
(2, 'Wipro Infotech', '', 'Marketing Executive Required', '', 5, 'M.B.A', '0000-00-00', 'Freshers Are Invited'),
(3, 'TCS Private Limited', '', 'Software Trainee Required', '', 1, 'B.Sc.I.T', '0000-00-00', 'Starting Salary 5000'),
(4, 'Wipro Infotech', '', 'Cleaners Required', '', 3, 'S.S.C', '0000-00-00', 'N'),
(5, 'sajjad', '', 'comsats', '', 5, 'M.Sc.C.S', '0000-00-00', 'sgdfgdfgdf'),
(6, 'FOOD', '', 'ffff', '', 5, 'BSCS', '0000-00-00', 'gfdgfdgdfg'),
(7, 'Airline', '', 'Sweaper', '', 5, 'BSCS', '0000-00-00', 'hardworking'),
(8, 'Friends & Family', '', 'friend1', '', 4, 'bcs', '0000-00-00', 'exprience required 6th month'),
(9, 'Freinds', '', 'job1', '', 3, 'M fil in computer science', '0000-00-00', '6th month experience'),
(10, 'Friends & Family', '', 'job1', '', 2, 'BSCS', '0000-00-00', 'hardworking'),
(11, 'Friends & Family', '', 'job2', '', 4, 'MCS', '0000-00-00', 'jsjndjksn'),
(12, 'Friends & Family', 'Abbottabad', 'job707', '', 3, 'bcs', '0000-00-00', 'fgfshda \r\nsdsdbansd\r\nsdasdj\r\nsdjgshjdas\r\nsdsjdbsan'),
(14, 'FOOD', 'Abbottabad', 'job809', '', 7, 'B.B.A', '2014-06-12', 'hgjhghjgjh\r\nkjkjlkj\r\nkjlkjlk'),
(15, 'FOOD', 'Abbottabad', 'job56', '', 4, 'MCS', '2014-06-21', 'sfsdfsdfvsd'),
(16, 'abc', 'Abbottabad', 'Asp.net developer', '', 3, 'BCS', '2014-06-28', 'Manage inventory accuracy through monitoring of daily warehouse activities, cycle counts, stock takes and audit of same to verify results.\r\nProvide leadership by establishing clear expectations and de'),
(17, 'Vision Consultant', 'Lahore', 'Office Administrationâ€Ž', '', 5, 'MCS', '2014-06-28', 'Basic skills in office management: Making sure that everything in office is maintained & organized\r\nCheck and maintain, all fixtures fittings as well as equipment in the office\r\nHandling the front des'),
(18, 'FOOD', 'Arifwala', 'job9000', '', 3, 'B.Sc.I.T', '2014-06-25', 'fdfsfdfsdf'),
(19, 'FOOD', 'Burewala', 'job787879', 'Developer', 5, 'bscs', '2014-06-17', 'sdfsdgdsgs'),
(20, 'FOOD', 'Burewala', 'Administrator Staff', 'Developer', 4, 'BCS', '2014-06-28', 'bchdbcjhbccd\r\ncdfvfdvf\r\nfvfbfdb\r\nfbvfdbfdb');

-- --------------------------------------------------------

-- 
-- Table structure for table `jobseeker_education`
-- 

CREATE TABLE `jobseeker_education` (
  `EduId` int(11) NOT NULL auto_increment,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL,
  PRIMARY KEY  (`EduId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `jobseeker_education`
-- 

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES 
(3, 3, 'B.C.A', 'Ganpat Universiy', 2011, 68.89),
(4, 3, 'M.C.A', 'Ganpat University', 2013, 89.9),
(5, 3, 'S.S.C', 'GSEB', 2005, 80),
(6, 7, 'M.B.A', 'comsats', 2013, 80),
(7, 7, 'BSCS', 'Comsats', 2013, 80),
(8, 7, 'B.B.A', 'Comsats', 2012, 56),
(9, 11, 'BSCS', 'Comsats', 2015, 80),
(10, 12, 'MCS', 'Comsats', 2015, 80);

-- --------------------------------------------------------

-- 
-- Table structure for table `jobseeker_reg`
-- 

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL auto_increment,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY  (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `jobseeker_reg`
-- 

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES 
(6, 'sajjad', 'Burewala', 'Baroda', 'mehul@gmail.com', 8989898998, 'BE', 'Male', '2013-10-09', '470X310_1.jpg', 'Confirm', 'mehul', 'mehul', 'What is Your Pet Name?', 'mehu'),
(11, 'abc', 'brw', 'brw', 'A@ymail.com', 3438473904, '', '', '0000-00-00', '954655_532342496821868_1965301234_n.jpg', 'Confirm', 'abc', 'abc', 'What is Your Pet Name?', 'xyz'),
(12, 'shahbaz', 'Multan', 'Multan', 's@ymail.com', 3438473904, 'MCS', 'Male', '2014-05-19', 'logo.png', 'Confirm', 'kkk', 'kkk', 'What is Your Pet Name?', 'sss'),
(13, 'sajjad', 'burewala', 'Vehari', 's@yahoo.com', 3438473904, 'M.B.A', 'Male', '2014-06-24', 'snapshot.docx', 'Pending', 'sajjad', 'dssds', 'What is Your Pet Name?', 'sajjad');

-- --------------------------------------------------------

-- 
-- Table structure for table `news_master`
-- 

CREATE TABLE `news_master` (
  `NewsId` int(11) NOT NULL auto_increment,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY  (`NewsId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `news_master`
-- 

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES 
(1, 'Register and Get JOB', '2013-09-25'),
(3, 'News has been updated after few days', '2014-05-09');

-- --------------------------------------------------------

-- 
-- Table structure for table `user_master`
-- 

CREATE TABLE `user_master` (
  `UserId` int(11) NOT NULL auto_increment,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY  (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `user_master`
-- 

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES 
(6, 'admin', 'admin'),
(10, 'xyz', 'xyz');

-- --------------------------------------------------------

-- 
-- Table structure for table `walkin_master`
-- 

CREATE TABLE `walkin_master` (
  `WalkInId` int(11) NOT NULL auto_increment,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL,
  PRIMARY KEY  (`WalkInId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `walkin_master`
-- 

INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES 
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2013-09-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2013-10-07', '09:00:00'),
(3, 'FOOD', 'food', 4, 'BSCS', 'Later Call invited', '2014-05-13', '09:00:00'),
(4, 'Airline', 'sweeper', 3, 'BSCS', 'hardworking', '2014-05-22', '11:00:00'),
(5, 'Friends & Family', 'friend1', 4, 'bcs', '6th month', '2014-05-06', '08:00:00'),
(6, 'FOOD', 'food', 4, 'BSCS', 'call you latr', '2014-06-17', '08:00:00'),
(7, 'sajjoo', 'free', 4, 'msc', 'dsfsdfsd', '2014-05-31', '08:00:00');
