-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2023 at 04:01 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatewaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feesinfo`
--

DROP TABLE IF EXISTS `feesinfo`;
CREATE TABLE IF NOT EXISTS `feesinfo` (
  `date` varchar(40) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `relevantMonth` varchar(20) NOT NULL,
  `fee` int NOT NULL,
  `discount` int NOT NULL,
  `netFee` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `position` varchar(25) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`position`, `username`, `password`) VALUES
('Admin', 'admin', 'admin1234'),
('Staff', 'staff', 'staff1234'),
('Student', 'student', 'stu1234'),
('Member', 'member', 'member1234'),
('Accountant', 'acc', 'acc1234');

-- --------------------------------------------------------

--
-- Table structure for table `memberinfo`
--

DROP TABLE IF EXISTS `memberinfo`;
CREATE TABLE IF NOT EXISTS `memberinfo` (
  `fullName` varchar(70) NOT NULL,
  `nameWithInitials` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `fullName` varchar(40) NOT NULL,
  `initName` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullName`, `initName`, `gender`, `nic`, `email`, `mobile`, `password`, `confirmpassword`) VALUES
('Thilina Kasun Mendis', 'M T Kasun', 'male', '199076523456', 'thilina@gmail.com', '0716453213', '123', '123'),
('Naduni Perera', 'N Perera', 'female', '893456789', 'lakshi453@gmail.com', '0716583927', '456', '456'),
('Rashmi Fernando', 'R Fernando', 'female', '199976534251', 'lakshi453@gmail.com', '0716583927', '234', '234'),
('Kavinga Perera', 'K Perera', 'male', '907656454', 'kavinga@gmail.com', '0787776665', '234', '234'),
('Gayan Alwis', 'G Alwis', 'male', '924567896', 'gayan@gmail.com', '0756453213', '234', '234');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `date` varchar(40) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `relevantMonth` varchar(20) NOT NULL,
  `basicSalary` int NOT NULL,
  `bonus` int NOT NULL,
  `netSalary` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffmemberinfo`
--

DROP TABLE IF EXISTS `staffmemberinfo`;
CREATE TABLE IF NOT EXISTS `staffmemberinfo` (
  `fullName` varchar(60) NOT NULL,
  `nameWithInitials` varchar(40) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `position` varchar(10) NOT NULL,
  `holderName` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `accountNumber` varchar(20) NOT NULL,
  `bankName` varchar(20) NOT NULL,
  `branchName` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staffmemberinfo`
--

INSERT INTO `staffmemberinfo` (`fullName`, `nameWithInitials`, `gender`, `nic`, `email`, `mobile`, `position`, `holderName`, `accountNumber`, `bankName`, `branchName`) VALUES
('Induwara Gamage', 'G induwara', 'male', '200076563424', 'induwara@gmail.com', '0766777888', 'Coordinato', 'G Induwara', '79876545', 'BOC', 'Matara'),
('Kumari Wijekoon', 'K  Wijekoon', 'female', '887656454', 'gateway.wijekon@gmail.com', '0777888999', 'Coordinato', 'K  Wijekoon', '79224365', 'BOC', 'Battaramulla'),
('Threesha Fernando', 'T  Fernando', 'female', '876543234', 'gateway.threesha@gmail.com', '0767888999', 'Coordinato', 'T  Fernando', '79654789', 'BOC', 'Galle'),
('Kavishka Hettige', 'K Hettige', 'male', '200245673219', 'kavishka@gmail.com', '0786564345', 'Instructor', 'K Hettige', '79657453', 'BOC', 'Rathnapura');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
