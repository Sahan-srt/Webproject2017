-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2017 at 07:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webproject2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `ApprovedRegistration`
--

CREATE TABLE IF NOT EXISTS `ApprovedRegistration` (
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
('950850450V', 'W.M.S.R.Thathsara', 22, 'Sanasuma 18 mile post mapakadawawa', 'srt.sahan@gmail.com', 774807508, 'sahan123', 'p123', 'Jobless', '10602106'),
('950981865V', 'K.Suresh', 22, 'Dompe lol', 'suresh@gmail.com', 771016568, 'suresh123', 'p1234', 'photographer', '000111');

-- --------------------------------------------------------

--
-- Table structure for table `ApprovedReport`
--

CREATE TABLE IF NOT EXISTS `ApprovedReport` (
`RID` int(100) NOT NULL,
  `ReporterID` varchar(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Location` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ApprovedReport`
--

INSERT INTO `ApprovedReport` (`RID`, `ReporterID`, `Type`, `Description`, `Topic`, `Location`) VALUES
(1, '950850450V', 'Fire', 'shop eka gini gatta', 'fire in a building ', 'Pitipana Junction Bus Stop, High Level Road, Homagama, Sri Lanka'),
(2, '950850450V', 'Fire', 'Ginigatta yakooo', 'Fire at NSBM', 'NSBM Bus Stop, High Level Road, Nugegoda, Western Province, Sri Lanka'),
(3, '950981865V', 'Car crash', 'Car eka happuna mahattayo', 'A car has gone crazy ', 'Pitipana Junction Bus Stop, Avissawella Road, Homagama, Western Province, Sri Lanka');

-- --------------------------------------------------------

--
-- Table structure for table `PendingRegistration`
--

CREATE TABLE IF NOT EXISTS `PendingRegistration` (
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

CREATE TABLE IF NOT EXISTS `PendingReport` (
`RID` int(100) NOT NULL,
  `ReporterID` varchar(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Location` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
MODIFY `RID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `PendingReport`
--
ALTER TABLE `PendingReport`
MODIFY `RID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
