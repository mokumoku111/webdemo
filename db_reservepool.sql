-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 06:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_reservepool`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` int(11) NOT NULL,
  `Member_Fname` varchar(15) NOT NULL,
  `Member_Lname` varchar(15) NOT NULL,
  `Member_PhoneNumber` int(11) DEFAULT NULL,
  `Member_IDCard` int(11) NOT NULL,
  `Member_Age` int(11) DEFAULT NULL,
  `Member_Username` varchar(20) DEFAULT NULL,
  `Member_Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member_type`
--

CREATE TABLE `member_type` (
  `MemType_ID` int(3) NOT NULL,
  `MemType_Name` varchar(15) NOT NULL,
  `MemType_Detail` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `Officer_ID` int(11) NOT NULL,
  `Officer_Fname` varchar(15) NOT NULL,
  `Officer_Lname` varchar(15) NOT NULL,
  `Officer_PhoneNumber` int(11) DEFAULT NULL,
  `Officer_Role` varchar(15) NOT NULL,
  `Officer_StartTime` datetime NOT NULL,
  `Officer_EndTime` datetime NOT NULL,
  `Officer_Username` varchar(20) DEFAULT NULL,
  `Officer_Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poolstatus`
--

CREATE TABLE `poolstatus` (
  `PoolStatus_ID` int(11) NOT NULL,
  `PoolStatus_OpenTime` time NOT NULL,
  `PoolStatus_CloseTime` time NOT NULL,
  `PoolStatus_Status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `Reserve_ID` int(11) NOT NULL,
  `Reserve_Detail` varchar(256) DEFAULT NULL,
  `Reserve_DateReserve` date NOT NULL,
  `Reserve_StartReserve` datetime NOT NULL,
  `Reserve_EndReserve` datetime NOT NULL,
  `Reserve_Status` bit(1) NOT NULL,
  `Member_ID` int(11) NOT NULL,
  `MemType_ID` int(3) NOT NULL,
  `Officer_ID` int(11) NOT NULL,
  `PoolStatus_ID` int(11) NOT NULL,
  `SCharge_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servive_charge`
--

CREATE TABLE `servive_charge` (
  `SCharge_ID` int(11) NOT NULL,
  `SCharge_Price` double DEFAULT NULL,
  `SCharge_Detail` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(15) NOT NULL,
  `Admin_Username` varchar(5) NOT NULL,
  `Admin_Password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `member_type`
--
ALTER TABLE `member_type`
  ADD PRIMARY KEY (`MemType_ID`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`Officer_ID`);

--
-- Indexes for table `poolstatus`
--
ALTER TABLE `poolstatus`
  ADD PRIMARY KEY (`PoolStatus_ID`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`Reserve_ID`),
  ADD KEY `Officer_ID_FK` (`Officer_ID`),
  ADD KEY `Member_ID_FK` (`Member_ID`),
  ADD KEY `PoolStatus_ID_FK` (`PoolStatus_ID`),
  ADD KEY `SCharge_ID_FK` (`SCharge_ID`),
  ADD KEY `MemType_ID_FK` (`MemType_ID`);

--
-- Indexes for table `servive_charge`
--
ALTER TABLE `servive_charge`
  ADD PRIMARY KEY (`SCharge_ID`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `MemType_ID_FK` FOREIGN KEY (`MemType_ID`) REFERENCES `member_type` (`MemType_ID`),
  ADD CONSTRAINT `Member_ID_FK` FOREIGN KEY (`Member_ID`) REFERENCES `member` (`Member_ID`),
  ADD CONSTRAINT `Officer_ID_FK` FOREIGN KEY (`Officer_ID`) REFERENCES `officer` (`Officer_ID`),
  ADD CONSTRAINT `PoolStatus_ID_FK` FOREIGN KEY (`PoolStatus_ID`) REFERENCES `poolstatus` (`PoolStatus_ID`),
  ADD CONSTRAINT `SCharge_ID_FK` FOREIGN KEY (`SCharge_ID`) REFERENCES `servive_charge` (`SCharge_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
