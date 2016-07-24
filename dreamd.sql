-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 06:53 AM
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
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
`tid` int(10) NOT NULL,
  `tname` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`tid`, `tname`) VALUES
(101, 'english '),
(102, 'computers');

-- --------------------------------------------------------

--
-- Table structure for table `training_user`
--

CREATE TABLE IF NOT EXISTS `training_user` (
  `tid` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_user`
--

INSERT INTO `training_user` (`tid`, `uid`) VALUES
(101, 1),
(101, 2);

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
  `tracking call` date DEFAULT NULL,
  `father_phone` int(10) NOT NULL,
  `mother_phone` int(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `milestone` int(1) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `dob`, `age`, `gender`, `email`, `user_phone`, `other_phone`, `edu_details`, `category`, `tracking start`, `tracking call`, `father_phone`, `mother_phone`, `course`, `milestone`, `password`) VALUES
(1, 'Shilpa', 'Sharma', '1995-04-05', 21, 'F', 'shilpa@gmail.com', 9876543202, 7987654386, 'Senior secondary', '1', '2016-01-15', '2016-06-16', 223456893, 709543216, 'life skills', 2, 'shilpa'),
(2, 'aditi', 'patil', '2000-07-05', 16, 'F', 'aditipatil@yahoo.co.in', 90674523456, 70954632178, '10th', '1', '2014-09-17', '2016-07-03', 582179658, 854756849, 'career awareness', 1, 'aditi'),
(3, 'pavitra', 'dad', '1992-10-23', 23, 'F', 'pavitra.dad@gmail.com', 156464325, 549876134, 'Graduate', '2', '0000-00-00', '0000-00-00', 2147483647, 2147483647, '', 0, 'pavitra'),
(4, 'Sanjay', 'Sukhwani', '1995-10-24', 20, 'M', 'sanjay@gmail.com', 6846465, 684654164, 'Senior Secondary', '1', '2016-07-17', '0000-00-00', 68464116, 97654164, 'English', 2, 'sanjay'),
(5, 'Sudipta', 'Saha', '1995-07-12', 21, 'F', 'sudiptasaha@gmail.com', 654654897, 46516484, 'Secondary', '1', '2015-08-03', NULL, 897456468, 2147483647, 'Computers', 3, 'sudipta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `training`
--
ALTER TABLE `training`
 ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `training_user`
--
ALTER TABLE `training_user`
 ADD PRIMARY KEY (`tid`,`uid`), ADD KEY `tid` (`tid`), ADD KEY `tid_2` (`tid`), ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `training_user`
--
ALTER TABLE `training_user`
ADD CONSTRAINT `traininguser_user_fk` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
