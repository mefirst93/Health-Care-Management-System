-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2018 at 06:09 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM'),
(2, 'ad', 'as', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(1, 'Dentist', 1, 1, 500, '2016-12-31', '09:25', '2017-01-01 00:29:02', 1, 0, ''),
(2, 'Homeopath', 4, 5, 700, '2017-01-11', '14:10', '2017-01-07 08:02:58', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(50) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctorSpecialization`, `doctorId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`) VALUES
(1, 'General Physician', 0, 0, '', '', '2018-04-16 05:57:24'),
(2, 'Demo test', 7, 0, '', '', '2018-04-16 05:57:24'),
(3, 'General Physician', 3, 1200, '2018-04-21', '11:01', '2018-04-16 05:57:24'),
(4, 'Dentist', 1, 500, '2018-04-28', '10:00', '2018-04-19 05:01:38'),
(5, 'Dentist', 1, 500, '2018-07-07', '10:00', '2018-04-20 14:45:41'),
(6, 'demo1', 8, 120, '1111-11-11', '11:01', '2018-04-27 17:11:25'),
(7, 'demo1', 8, 120, '2018-05-01', '00:00', '2018-04-28 09:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`) VALUES
(1, 'Dentist', 'Anuj', 'New Delhi', '500', 8285703354, 'anuj.lpu1@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '2016-12-29 06:25:37'),
(2, 'Homeopath', 'Sarita Pandey', 'Varanasi', '600', 2147483647, 'sarita@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-29 06:51:51'),
(3, 'General Physician', 'Nitesh Kumar', 'Ghaziabad', '1200', 8523692222, 'nitesh@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:43:35'),
(4, 'Homeopath', 'Vijay Verma', 'New Delhi', '700', 25668888, 'vijay@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:45:09'),
(5, 'Ayurveda', 'Sanjeev', 'Gurugram', '8050', 442166644646, 'sanjeev@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:47:07'),
(6, 'General Physician', 'Amrita', 'New Delhi India', '2500', 45497964, 'amrita@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 07:52:50'),
(7, 'Demo test', 'abc ', 'xyz', '200', 852888888, 'test@demo.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-07 08:08:58'),
(8, 'demo1', 'raja', 'uluberia,howrah', '120', 1234567890, 'raja@gmail.com', 'f970e2767d0cfe75876ea857f92e319b', '2018-04-27 10:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

DROP TABLE IF EXISTS `doctorspecilization`;
CREATE TABLE IF NOT EXISTS `doctorspecilization` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-28 06:37:25'),
(2, 'General Physician', '2016-12-28 06:38:12'),
(3, 'Dermatologist', '2016-12-28 06:38:48'),
(4, 'Homeopath', '2016-12-28 06:39:26'),
(5, 'Ayurveda', '2016-12-28 06:39:51'),
(6, 'Dentist', '2016-12-28 06:40:08'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18'),
(9, 'Demo test', '2016-12-28 07:37:39'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53'),
(13, 'demo1', '2018-04-27 08:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
CREATE TABLE IF NOT EXISTS `logintb` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass'),
('admin', 'pass'),
('adminn', 'pass'),
('', 'adfdf');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

DROP TABLE IF EXISTS `userdb`;
CREATE TABLE IF NOT EXISTS `userdb` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`id`, `name`, `email`, `password`, `date`, `gender`, `regDate`) VALUES
(1, 'qwerty', 'sahai67@live.com', 'as', '2018-03-09', '', '2018-04-27 17:06:09'),
(2, 'qwertyuo lsnd', 'prasad.raja.93@gmail.com', 'adsfsdgfg', '2018-03-22', 'male', '2018-04-27 17:06:09'),
(3, 'qwertyuo lsnd', 'mefirst93@gmail.com', 'adsfsef', '1987-02-13', 'female', '2018-04-27 17:06:09'),
(4, 'raja', 'mefirst93@gmail.com', 'Raja^132', '2018-03-09', 'male', '2018-04-27 17:06:09'),
(12, 'Kushal Ghosh', 'kushalghosh789@gmail.com', 'janinaone', '1996-04-20', 'male', '2018-04-27 17:06:09'),
(6, 'sanchuw', 'a@a.com', 'asd', '2018-03-08', 'female', '2018-04-27 17:06:09'),
(7, 'cgdrgz', 'gdfg@dgd.vb', 'dsfdf', '2018-03-08', '', '2018-04-27 17:06:09'),
(8, 'cgdrgz', 'gdfg@dgd.vb', 'dsfdf', '2018-03-08', '', '2018-04-27 17:06:09'),
(9, 'sanchita', '1@gmail.com', '123', '2018-04-26', 'female', '2018-04-27 17:06:09'),
(10, 'asdasd', 'a@a.aa', 'as', '5666-11-11', 'male', '2018-04-27 17:06:09'),
(11, 'dsfsf', 'sdf@dfsrf..coam', 'as', '2018-04-01', 'female', '2018-04-27 17:06:09'),
(13, 'Kushal Ghosh', 'kushalghosh789@gmail.com', 'as', '1984-01-01', 'male', '2018-04-27 17:06:09'),
(16, 'Shriparna Sarkar', 'shriparnasarkar200@gmail.com', 'archanasarkar', '1996-05-01', 'female', '2018-04-28 09:15:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
