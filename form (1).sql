-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 04:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nobleclg`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `course` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `comm` varchar(50) NOT NULL,
  `reli` varchar(30) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `nation` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mari` varchar(30) NOT NULL,
  `aadhar` varchar(40) NOT NULL,
  `language` varchar(40) NOT NULL,
  `lang` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `year` varchar(40) NOT NULL,
  `late` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `income` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `fmail` varchar(60) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mocc` varchar(50) NOT NULL,
  `mincome` varchar(60) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `gocc` varchar(50) NOT NULL,
  `gnumber` varchar(50) NOT NULL,
  `gincome` varchar(70) NOT NULL,
  `file` varchar(200) NOT NULL,
  `marks` varchar(200) NOT NULL,
  `mark` varchar(200) NOT NULL,
  `dc` varchar(200) NOT NULL,
  `incomecertificate` varchar(200) NOT NULL,
  `god` varchar(200) NOT NULL,
  `service` varchar(200) NOT NULL,
  `sports` varchar(200) NOT NULL,
  `sig` varchar(200) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `age` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`course`, `name`, `date`, `gender`, `blood`, `comm`, `reli`, `caste`, `nation`, `state`, `mari`, `aadhar`, `language`, `lang`, `address`, `city`, `pin`, `email`, `school`, `year`, `late`, `fname`, `occupation`, `income`, `mobile`, `fmail`, `mname`, `mocc`, `mincome`, `gname`, `gocc`, `gnumber`, `gincome`, `file`, `marks`, `mark`, `dc`, `incomecertificate`, `god`, `service`, `sports`, `sig`, `filename`, `age`) VALUES
('BA(English)', 'roy', '2003-10-30', 'Male', 'AB+ve', 'BC/BCC/BCM', 'Hindu', 'nadar', 'indian', 'tamilnadu', 'Single', '989419321210', 'tamil', 'tamil', '11,sedan kinatru street', 'thiruthangal', '626130', 'Karanprabha22668@gmail.com', 'kalaimagalhighersecondry school', '2019', 'no', 'selvaraj', 'self', '90888', '6383786437', 'g@gmail.com', 'kalaiselvi', 'self', '30000', 'no', 'no', '0000000000', 'none', 'author-01.png', 'author-02.png', 'author-03.png', 'author-04.png', 'bba.jpg', 'bcom.jpg', 'bcomca.jpg', 'choose-us-image-03.png', 'courses-04.jpg', '', '20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
