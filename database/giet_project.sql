-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 12:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giet_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'sarfaraz');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `sr. no.` int(200) NOT NULL,
  `branchname` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL,
  `action` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`sr. no.`, `branchname`, `status`, `action`) VALUES
(1, 'nwe', 'OK', 'active'),
(3, 'hello', 'OK', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_registration`
--

CREATE TABLE `faculty_registration` (
  `Sr. no` int(50) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `empid` int(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `teaching` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Sr. no` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `context` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `sr.no` int(200) NOT NULL,
  `programname` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL,
  `action` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`sr.no`, `programname`, `status`, `action`) VALUES
(1, 'hello', 'OK', 'active'),
(2, 'New', 'OK', 'active'),
(4, 'flksed', 'OK', 'active'),
(5, 'newprogram', 'OK', 'active'),
(6, 'lksf', 'OK', 'active'),
(7, 'dfsf', 'OK', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sr. no.` int(200) NOT NULL,
  `section` varchar(5) NOT NULL,
  `status` varchar(12) NOT NULL,
  `action` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sr. no.`, `section`, `status`, `action`) VALUES
(1, 'ABC', 'OK', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `sr. no.` int(200) NOT NULL,
  `year` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL,
  `action` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sr. no.`, `year`, `status`, `action`) VALUES
(2, '2021', 'OK', 'active'),
(3, '2017-2021', 'OK', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `Sr. no` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `regd` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `program` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sr. no.` int(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL,
  `action` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sr. no.`, `subject`, `status`, `action`) VALUES
(1, 'English', 'OK', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`sr. no.`);

--
-- Indexes for table `faculty_registration`
--
ALTER TABLE `faculty_registration`
  ADD PRIMARY KEY (`Sr. no`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Sr. no`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sr. no.`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`sr. no.`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`Sr. no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sr. no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `sr. no.` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_registration`
--
ALTER TABLE `faculty_registration`
  MODIFY `Sr. no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Sr. no` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `sr.no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sr. no.` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `sr. no.` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `Sr. no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sr. no.` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
