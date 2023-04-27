-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 06:27 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careathome`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `labid` int(11) NOT NULL,
  `labname` varchar(60) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dateofsrt` datetime NOT NULL,
  `dateodact` datetime NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `labpic` varchar(200) NOT NULL,
  `areaid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`labid`, `labname`, `contactno`, `uname`, `pwd`, `dateofsrt`, `dateodact`, `address`, `email`, `labpic`, `areaid`) VALUES
(1, 'green cross', '9825006017', 'greencross', 'grcr', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'greencrosslab23@gmail.com', 'lab1.jpg', 1),
(2, 'navjivan', '9825006013', 'vidhilabs', 'vid', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'vidhilab123@gmail.com', 'lab3.jpg', 3),
(3, 'red cross', '9825006018', 'redcross', 'red', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'redcross32@gmai.com', 'lab2.jpg', 2),
(4, 'tulsi lab', '9825006017', 'tulsi lab', 'tuli', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'tulsilab34@gmail.com', 'lab4.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`labid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
