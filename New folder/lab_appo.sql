-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 06:28 PM
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
-- Table structure for table `lab_appo`
--

CREATE TABLE `lab_appo` (
  `appoid` int(11) NOT NULL,
  `labname` varchar(50) NOT NULL,
  `Appointmentdate` date NOT NULL,
  `Appointmenttime` time NOT NULL,
  `memid` int(11) NOT NULL,
  `Isnew` varchar(3) NOT NULL,
  `labtest_name` varchar(20) NOT NULL,
  `Isconform` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_appo`
--

INSERT INTO `lab_appo` (`appoid`, `labname`, `Appointmentdate`, `Appointmenttime`, `memid`, `Isnew`, `labtest_name`, `Isconform`) VALUES
(1, 'green cross', '2018-12-18', '01:00:00', 10, 'No', '', 'Yes'),
(2, '2', '2018-12-22', '13:00:00', 12, 'Yes', '', 'No'),
(4, 'tulsi lab', '2018-12-25', '10:30:00', 4, 'No', '', 'Yes'),
(5, 'tulsi lab', '2018-12-26', '10:00:00', 9, 'No', '', 'Yes'),
(6, 'red cross', '2018-12-31', '07:00:00', 8, 'Yes', '', 'No'),
(7, 'green cross', '2018-12-29', '09:00:00', 7, 'No', '', 'Yes'),
(8, 'navjivan', '2019-01-01', '09:00:00', 6, 'No', '', 'Yes'),
(11, 'red cross', '2019-02-11', '00:00:00', 11, 'Yes', 'CBC Test (Complete B', 'No'),
(12, 'tulsi lab', '2019-02-18', '10:00:00', 15, 'Yes', 'Triple Marker Test', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_appo`
--
ALTER TABLE `lab_appo`
  ADD PRIMARY KEY (`appoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab_appo`
--
ALTER TABLE `lab_appo`
  MODIFY `appoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
