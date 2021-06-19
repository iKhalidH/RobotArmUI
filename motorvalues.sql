-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 06:01 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartmethods`
--

-- --------------------------------------------------------

--
-- Table structure for table `motorvalues`
--

CREATE TABLE `motorvalues` (
  `ID` int(11) NOT NULL,
  `motorRange1` int(3) NOT NULL,
  `motorRange2` int(3) NOT NULL,
  `motorRange3` int(3) NOT NULL,
  `motorRange4` int(3) NOT NULL,
  `motorRange5` int(3) NOT NULL,
  `motorRange6` int(3) NOT NULL,
  `motorSwitch` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motorvalues`
--

INSERT INTO `motorvalues` (`ID`, `motorRange1`, `motorRange2`, `motorRange3`, `motorRange4`, `motorRange5`, `motorRange6`, `motorSwitch`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0),
(3, 90, 90, 90, 90, 90, 90, 0),
(4, 90, 90, 90, 90, 90, 90, 0),
(5, 90, 90, 90, 90, 90, 90, 0),
(6, 54, 90, 90, 90, 90, 90, 0),
(7, 90, 90, 90, 90, 90, 90, 0),
(8, 90, 90, 90, 90, 90, 84, 0),
(9, 90, 90, 90, 90, 90, 90, 0),
(10, 90, 90, 90, 90, 90, 90, 1),
(11, 90, 90, 90, 90, 90, 90, 0),
(12, 53, 146, 34, 135, 140, 48, 0),
(13, 90, 90, 83, 90, 90, 90, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motorvalues`
--
ALTER TABLE `motorvalues`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motorvalues`
--
ALTER TABLE `motorvalues`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
