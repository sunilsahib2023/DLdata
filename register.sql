-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 12:53 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshope`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `custid` int(10) NOT NULL,
  `custaddress` varchar(25) NOT NULL,
  `custphone` int(10) NOT NULL,
  `custemail` varchar(30) NOT NULL,
  `custcity` varchar(15) NOT NULL,
  `custipin` int(15) NOT NULL,
  `custpass` varchar(15) NOT NULL,
  `custname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`custid`, `custaddress`, `custphone`, `custemail`, `custcity`, `custipin`, `custpass`, `custname`) VALUES
(101, 'v-2 /3 Subhsh Nagar Delhi', 848495959, 'raj@yahoo.com', 'Delhi', 110067, 'abc@123', 'Raj kumar'),
(102, 'a-2 /3 Raj Nagar Delhi', 2147483647, 'pkraj@yahoo.com', 'Delhi', 110067, 'abc@123', 'Harri kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`custid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
