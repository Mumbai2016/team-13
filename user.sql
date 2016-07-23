-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2016 at 03:35 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dreamd`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(10) NOT NULL,
  `fname` char(15) NOT NULL,
  `lname` char(15) NOT NULL,
  `dob` date NOT NULL,
  `age` int(2) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_phone` bigint(10) NOT NULL,
  `other_phone` bigint(10) NOT NULL,
  `edu_details` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `tracking start` date NOT NULL,
  `tracking call` date NOT NULL,
  `father_phone` int(10) NOT NULL,
  `mother_phone` int(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `milestone` int(1) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `dob`, `age`, `gender`, `email`, `user_phone`, `other_phone`, `edu_details`, `category`, `tracking start`, `tracking call`, `father_phone`, `mother_phone`, `course`, `milestone`, `password`) VALUES
(1, 'Shilpa', 'Sharma', '1995-04-05', 21, 'F', 'shilpa@gmail.com', 9876543202, 7987654386, 'Senior secondary', '1', '2016-01-15', '2016-06-16', 223456893, 709543216, 'life skills', 2, ''),
(2, 'aditi', 'patil', '2000-07-05', 16, 'F', 'aditipatil@yahoo.co.in', 90674523456, 70954632178, '10th', '1', '2014-09-17', '2016-07-03', 582179658, 854756849, 'career awareness', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;