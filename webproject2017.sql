-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2017 at 09:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `ApprovedRegistration`
--

CREATE TABLE `ApprovedRegistration` (
  `NIC` varchar(10) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `JobTitle` varchar(150) NOT NULL,
  `EmployeeId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ApprovedRegistration`
--

INSERT INTO `ApprovedRegistration` (`NIC`, `FullName`, `Age`, `Address`, `Email`, `Telephone`, `UserName`, `Password`, `JobTitle`, `EmployeeId`) VALUES
('458679812V', 'Zimba', 0, 'no way', 'zimba@gmail.com', 0, 'zimba123', 'p123', 'yet to come', '1265'),
('950850450V', 'W.M.S.R.Thathsara', 22, 'Sanasuma 18 mile post mapakadawawa', 'srt.sahan@gmail.com', 774807508, 'sahan123', 'p123', 'Jobless', '10602106');

-- --------------------------------------------------------

--
-- Table structure for table `ApprovedReport`
--

CREATE TABLE `ApprovedReport` (
  `RID` int(100) NOT NULL,
  `ReporterID` varchar(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Location` varchar(150) NOT NULL,
  `Rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ApprovedReport`
--

INSERT INTO `ApprovedReport` (`RID`, `ReporterID`, `Type`, `Description`, `Topic`, `Location`, `Rating`) VALUES
(1, '458679812V', 'Fire', 'gini gatta', 'Fire at townhall', 'Town Hall, Colombo, Western Province, Sri Lanka', 4),
(2, '950850450V', 'Floods', 'More floods', 'Flooding in Kottawa', 'Kottawa Town, Pannipitiya, Western Province, Sri Lanka', 2),
(4, '458679812V', 'Gas_leak', 'sdsds', 'Gas leak at Havilock City', 'Havelock City, Colombo, Western Province, Sri Lanka', 2),
(5, '950850450V', 'Fire', 'sdsdsd', 'fire ', 'homagama town bus stand', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `NIC` int(10) NOT NULL,
  `Message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Messages`
--

INSERT INTO `Messages` (`NIC`, `Message`) VALUES
(950850450, 'your post has been rejected.Please contact or re submit.');

-- --------------------------------------------------------

--
-- Table structure for table `PendingRegistration`
--

CREATE TABLE `PendingRegistration` (
  `NIC` varchar(10) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `JobTitle` varchar(150) NOT NULL,
  `EmployeeId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PendingReport`
--

CREATE TABLE `PendingReport` (
  `RID` int(100) NOT NULL,
  `ReporterID` varchar(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ApprovedRegistration`
--
ALTER TABLE `ApprovedRegistration`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `ApprovedReport`
--
ALTER TABLE `ApprovedReport`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `PendingRegistration`
--
ALTER TABLE `PendingRegistration`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `PendingReport`
--
ALTER TABLE `PendingReport`
  ADD PRIMARY KEY (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ApprovedReport`
--
ALTER TABLE `ApprovedReport`
  MODIFY `RID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `PendingReport`
--
ALTER TABLE `PendingReport`
  MODIFY `RID` int(100) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
