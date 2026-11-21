-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 03:03 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `im`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageid` smallint(5) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageid`, `message`, `timestamp`, `username`) VALUES
(1, 'message 1', '2016-11-02 03:36:48', 'bob'),
(2, 'message2', '2016-11-02 03:36:48', 'bob'),
(3, 'message3', '2016-11-02 03:37:38', 'bob'),
(4, 'boo', '2016-11-02 07:28:24', 'bob'),
(5, 'boo', '2016-11-02 07:28:26', 'bob'),
(6, 'boo', '2016-11-02 07:28:26', 'bob'),
(7, 'boo', '2016-11-02 07:28:27', 'bob'),
(8, 'boo', '2016-11-02 07:28:27', 'bob'),
(9, 'boo', '2016-11-02 07:28:28', 'bob'),
(10, 'boo', '2016-11-02 07:28:35', 'bob'),
(11, 'hi', '2016-11-02 07:29:08', 'bob'),
(12, 'How are you', '2016-11-02 07:29:38', 'bob'),
(13, 'hi', '2016-11-02 07:30:33', 'Anu'),
(14, 'hi', '2016-11-02 07:31:06', 'Harry'),
(15, 'How are you', '2016-11-02 07:31:17', 'Harry'),
(16, 'hi', '2016-11-02 07:31:33', 'Harry'),
(17, 'hi', '2016-11-02 07:34:56', 'Harry'),
(18, 'gfgf', '2016-11-02 07:35:02', 'Harry'),
(19, 'hi there', '2016-11-02 07:35:37', 'Sonia'),
(20, 'hey', '2016-11-02 07:35:49', 'Harry'),
(21, 'hi', '2016-11-02 07:36:02', 'Harry'),
(22, 'j', '2016-11-02 07:36:15', ''),
(23, 'hi', '2016-11-02 14:33:50', 'Sonia'),
(24, 'Hello dear', '2016-11-02 14:34:37', 'Khushboo'),
(25, 'Hi everyone', '2016-11-02 14:35:29', 'Harry'),
(26, 'yo', '2016-11-02 14:36:05', 'vishu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
