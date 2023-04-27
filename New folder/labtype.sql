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
-- Table structure for table `labtype`
--

CREATE TABLE `labtype` (
  `labtest_id` int(11) NOT NULL,
  `labtest_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labtype`
--

INSERT INTO `labtype` (`labtest_id`, `labtest_name`) VALUES
(1, 'T3 T4 TSH'),
(2, 'Serum B12'),
(3, 'CBC Test (Complete B'),
(4, ' Lipid Profile'),
(5, 'TSH Test'),
(6, 'Triple Marker Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labtype`
--
ALTER TABLE `labtype`
  ADD PRIMARY KEY (`labtest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labtype`
--
ALTER TABLE `labtype`
  MODIFY `labtest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
