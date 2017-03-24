-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2017 at 07:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE `bot` (
  `QusID` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` text NOT NULL,
  `CreatedDateTime` datetime NOT NULL,
  `UpdatedDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`QusID`, `Question`, `Answer`, `CreatedDateTime`, `UpdatedDateTime`) VALUES
(1, 'Hi', 'Hello', '2016-12-21 06:08:11', '2016-12-21 06:08:11'),
(3, 'How are you', 'Im fine ', '2016-12-21 06:20:53', '2016-12-21 06:20:53'),
(5, 'What are you doing', 'Im just looking outside', '2016-12-21 06:22:22', '2016-12-21 06:22:22'),
(6, 'Tell me something about you ', 'Im jarvis created by Vins', '2016-12-21 06:24:57', '2016-12-21 06:24:57'),
(7, 'Tell me something about your hobbies', 'I would like to play games', '2016-12-21 06:29:12', '2016-12-21 06:29:12'),
(8, 'who are you ', 'Im jarvis', '2016-12-21 06:34:12', '2016-12-21 06:34:12'),
(9, 'What is your name', 'My name is jarvis', '2016-12-21 07:33:55', '2016-12-21 07:33:55'),
(10, 'hello', 'Hi', '2016-12-21 07:50:10', '2016-12-21 07:50:10'),
(11, 'good morning', 'Greeting from Triamiz', '2016-12-21 07:57:54', '2016-12-21 07:57:54'),
(12, 'where are you from', 'im from kochi', '2016-12-21 08:02:23', '2016-12-21 08:02:23'),
(13, 'whats your real name', 'my real name is jarvis', '2016-12-21 08:02:54', '2016-12-21 08:02:54'),
(14, 'what you want', 'im here to help you', '2016-12-21 08:03:47', '2016-12-21 08:03:47'),
(15, 'suggest me a good mobile', 'better you should go for iPhone', '2016-12-21 08:04:27', '2016-12-21 08:04:27'),
(16, 'who is your maker', 'My maker is Mr.Vins', '2016-12-21 08:05:23', '2016-12-21 08:05:23'),
(17, 'hi', 'hi', '2016-12-21 08:05:38', '2016-12-21 08:05:38'),
(18, 'What could be your name', 'im jarvis', '2016-12-21 08:16:25', '2016-12-21 08:16:25'),
(21, 'Jarvis initiate', ' Jarvis Initiating', '2017-01-13 18:10:50', '2017-01-13 18:10:50'),
(22, 'Who is wins', ' Vins is my master', '2017-01-14 10:07:59', '2017-01-14 10:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bot`
--
ALTER TABLE `bot`
  ADD PRIMARY KEY (`QusID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bot`
--
ALTER TABLE `bot`
  MODIFY `QusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
