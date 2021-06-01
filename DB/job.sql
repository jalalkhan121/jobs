-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 10:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE `application_master` (
  `ApplicationId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(14, 11, 18, 'Apply', 'No Message'),
(15, 6, 1, 'Apply', 'No Message'),
(16, 6, 23, 'Call Latter Send', 'hi, how are you'),
(17, 6, 21, 'Apply', 'No Message');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `EmployerId` int(11) NOT NULL,
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
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(7, 'comsats', 'Ali Nawaz', 'brw', 'brw', 's@yahoo.com', 3456473804, 'shjgssgad', 'Confirm', 'user', 'password', 'What is Your Pet Name?', 'gujjar'),
(8, 'FOOD', 'mohsin', 'BUrewala', 'brw', 's@yahoo.com', 3438473904, 'Developer', 'Confirm', 'abc', 'abc', 'What is Your Pet Name?', 'gujjar'),
(12, 'abc', 'iram', 'vehari', 'vehari', 'a@gmail.com', 123456778889, 'teaching', 'Confirm', 'iram', '123', 'Who is Your Favourite Person?', 'dogy'),
(13, 'Friends & Family', 'sajjad', 'LAHORE', 'brw', 'd@ymail.com', 3438473904, 'developer', 'Confirm', 'sun', 'sun', 'Who is Your Favourite Person?', 's'),
(14, 'Vision Consultant', 'mustafa', 'Lahore', 'Vehari', 's@ymail.com', 3438473904, 'Office Administrationâ€Ž', 'Confirm', 'gujjar', 'gujjar', 'What is Your Pet Name?', 'gujjar');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `E_id` int(11) NOT NULL,
  `seekerid` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `EndDate` varchar(255) NOT NULL,
  `Work_exp` varchar(255) NOT NULL,
  `Work_area` varchar(255) NOT NULL,
  `Current_job` varchar(255) NOT NULL,
  `Cmp_name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`E_id`, `seekerid`, `start_date`, `EndDate`, `Work_exp`, `Work_area`, `Current_job`, `Cmp_name`, `Location`) VALUES
(5, 11, 'April1999', 'February2001', '1', 'Software', 'jhjhk', '', 'Bannu'),
(6, 11, 'February2000', 'April2003', '3', 'Developer', 'xzdasdassda', 'Comsats', 'Barbar loi'),
(7, 6, 'February2007', 'October2010', '3', 'Software', 'Web Developer', 'Systems Ltd', 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(5, 3, 'asdad', '2018-09-13'),
(6, 3, 'asd', '2013-09-18'),
(7, 4, 'Thanks For Your Support.', '2013-09-18'),
(8, 3, 'asd', '2013-09-22'),
(9, 7, 'hjhgsjkfsdkjf', '2014-05-03'),
(11, 6, 'Exelent...!', '2014-06-16'),
(12, 6, 'This is a great job portal website', '2020-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE `jobseeker_education` (
  `EduId` int(11) NOT NULL,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(10, 12, 'MCS', 'Comsats', 2015, 80),
(11, 6, 'B.Sc.I.T', 'IUB', 2020, 80);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL,
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
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(6, 'Adnan', 'Bahawalpur', 'Baroda', 'mehul@gmail.com', 8989898998, 'BE', 'Male', '2013-10-09', '470X310_1.jpg', 'Confirm', 'user', 'password', 'What is Your Pet Name?', 'mehu'),
(12, 'shahbaz', 'Multan', 'Multan', 's@ymail.com', 3438473904, 'MCS', 'Male', '2014-05-19', 'logo.png', 'Confirm', 'kkk', 'kkk', 'What is Your Pet Name?', 'sss'),
(13, 'Shahzad', 'burewala', 'Vehari', 's@yahoo.com', 3438473904, 'M.B.A', 'Male', '2014-06-24', 'snapshot.docx', 'Confirm', 'sajjad', 'dssds', 'What is Your Pet Name?', 'sajjad'),
(14, 'erqeq', '2 B Umar Chokqweqwe', 'Lahore', 'admin@site.com', 3027549807, 'BA/B.SC', 'Male', '2020-10-22', 'images (1).jpg', 'Pending', 'admin', 'admin', 'What is the Name of Your First School?', 'GHHB');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `JobId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Work_aera` varchar(255) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `App_date` date NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `Location`, `JobTitle`, `Work_aera`, `Vacancy`, `MinQualification`, `App_date`, `Description`) VALUES
(1, 'Wipro Infotech', '', 'Software Professional Required', '', 2, 'M.C.A', '2020-12-31', 'ASP.NET'),
(2, 'Wipro Infotech', '', 'Marketing Executive Required', '', 5, 'M.B.A', '2020-12-31', 'Freshers Are Invited'),
(3, 'TCS Private Limited', '', 'Software Trainee Required', '', 1, 'B.Sc.I.T', '2020-12-31', 'Starting Salary 5000'),
(4, 'Wipro Infotech', '', 'Cleaners Required', '', 3, 'S.S.C', '2020-12-31', 'N'),
(5, 'sajjad', '', 'comsats', '', 5, 'M.Sc.C.S', '2020-12-31', 'sgdfgdfgdf'),
(6, 'FOOD', '', 'ffff', '', 5, 'BSCS', '2020-12-31', 'gfdgfdgdfg'),
(7, 'Airline', '', 'Sweaper', '', 5, 'BSCS', '2020-12-31', 'hardworking'),
(8, 'Friends & Family', '', 'friend1', '', 4, 'bcs', '2020-12-31', 'exprience required 6th month'),
(9, 'Freinds', '', 'job1', '', 3, 'M fil in computer science', '2020-12-31', '6th month experience'),
(10, 'Friends & Family', '', 'job1', '', 2, 'BSCS', '2020-12-31', 'hardworking'),
(11, 'Friends & Family', '', 'job2', '', 4, 'MCS', '2020-12-31', 'jsjndjksn'),
(12, 'Friends & Family', 'Abbottabad', 'job707', '', 3, 'bcs', '2020-12-31', 'fgfshda \r\nsdsdbansd\r\nsdasdj\r\nsdjgshjdas\r\nsdsjdbsan'),
(14, 'FOOD', 'Abbottabad', 'job809', '', 7, 'B.B.A', '2020-12-31', 'hgjhghjgjh\r\nkjkjlkj\r\nkjlkjlk'),
(15, 'FOOD', 'Abbottabad', 'job56', '', 4, 'MCS', '2020-12-31', 'sfsdfsdfvsd'),
(16, 'abc', 'Abbottabad', 'Asp.net developer', '', 3, 'BCS', '2020-12-31', 'Manage inventory accuracy through monitoring of daily warehouse activities, cycle counts, stock takes and audit of same to verify results.\r\nProvide leadership by establishing clear expectations and de'),
(17, 'Vision Consultant', 'Lahore', 'Office Administrationâ€Ž', '', 5, 'MCS', '2020-12-31', 'Basic skills in office management: Making sure that everything in office is maintained & organized\r\nCheck and maintain, all fixtures fittings as well as equipment in the office\r\nHandling the front des'),
(18, 'FOOD', 'Arifwala', 'job9000', '', 3, 'B.Sc.I.T', '2020-12-31', 'fdfsfdfsdf'),
(19, 'FOOD', 'Burewala', 'job787879', 'Developer', 5, 'bscs', '2020-12-31', 'sdfsdgdsgs'),
(20, 'FOOD', 'Burewala', 'Administrator Staff', 'Developer', 4, 'BCS', '2020-12-31', 'bchdbcjhbccd\r\ncdfvfdvf\r\nfvfbfdb\r\nfbvfdbfdb'),
(21, 'comsats', 'Bahawalpur', 'Urgent Required Web Developer', 'Software', 5, 'MCS', '2021-10-30', 'Urgent Required Web Developer'),
(23, 'comsats', 'Bahawalpur', 'Web Designer', 'Software', 9, 'M.Sc(IT)', '2021-10-30', 'web designer required...');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `NewsId` int(11) NOT NULL,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2013-09-25'),
(3, 'News has been updated after few days', '2014-05-09'),
(4, 'Lockdown due to pandamic COVID-19 has been start from 24th of March2020', '2020-03-24'),
(5, 'Lockdown due to pandamic COVID-19 has been finish today', '2020-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admin', 'admin'),
(11, 'Adnan', '123456'),
(12, 'Ahsan', '123456'),
(13, 'Murtaza', '123456'),
(14, 'Fahad', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_master`
--

CREATE TABLE `walkin_master` (
  `WalkInId` int(11) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_master`
--
ALTER TABLE `application_master`
  ADD PRIMARY KEY (`ApplicationId`);

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`EmployerId`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD PRIMARY KEY (`EduId`);

--
-- Indexes for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  ADD PRIMARY KEY (`JobSeekId`),
  ADD KEY `JobSeekId` (`JobSeekId`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`NewsId`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `walkin_master`
--
ALTER TABLE `walkin_master`
  ADD PRIMARY KEY (`WalkInId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_master`
--
ALTER TABLE `application_master`
  MODIFY `ApplicationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `EmployerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  MODIFY `EduId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `NewsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `walkin_master`
--
ALTER TABLE `walkin_master`
  MODIFY `WalkInId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
