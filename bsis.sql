-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 02:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `bID` int(11) NOT NULL,
  `bDate` date NOT NULL DEFAULT current_timestamp(),
  `bComp` varchar(50) NOT NULL,
  `bLoc` varchar(50) NOT NULL,
  `bPers` varchar(50) NOT NULL,
  `bReason` varchar(50) NOT NULL,
  `bAction` varchar(100) NOT NULL,
  `bAssist` varchar(50) NOT NULL,
  `bStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`bID`, `bDate`, `bComp`, `bLoc`, `bPers`, `bReason`, `bAction`, `bAssist`, `bStatus`) VALUES
(1401, '2022-12-29', 'Jeanherline Santiago', 'Bulacan', 'Suzette Bishop Love Angeles', 'Noise', 'Discussed', 'Josh Caganan', 'Unsolved');

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `cID` int(11) NOT NULL,
  `cNum` varchar(20) NOT NULL,
  `cRFirst` varchar(30) NOT NULL,
  `cRLast` varchar(30) NOT NULL,
  `cFindings` varchar(20) NOT NULL,
  `cPurpose` varchar(20) NOT NULL,
  `cOR` varchar(20) NOT NULL,
  `cAmount` varchar(10) NOT NULL,
  `cStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `logID` int(11) NOT NULL,
  `logName` varchar(50) NOT NULL,
  `logUser` varchar(30) NOT NULL,
  `logPswd` varchar(30) NOT NULL,
  `logType` varchar(20) NOT NULL DEFAULT 'Resident'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`logID`, `logName`, `logUser`, `logPswd`, `logType`) VALUES
(1000, 'Ernesto Santos Roque', 'ernestoroque', 'thenewbarangaysampaloc2018', 'Chairman'),
(1001, 'Hernando Lumaban Santiago', 'hernandosantiago', 'covid192020', 'Secretary'),
(1002, 'Jeanherline Lopez Santiago', 'jiyasantiago', '032903', 'Resident'),
(1003, 'Suzette Bishop Love Del Rosario Angeles', 'suzettebishoplove', '122921', 'Resident');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficials`
--

CREATE TABLE `tblofficials` (
  `oID` int(11) NOT NULL,
  `oPosi` varchar(30) NOT NULL,
  `oName` varchar(50) NOT NULL,
  `oCont` varchar(20) NOT NULL,
  `oAdd` varchar(60) NOT NULL,
  `oTermS` date NOT NULL,
  `oTermE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblofficials`
--

INSERT INTO `tblofficials` (`oID`, `oPosi`, `oName`, `oCont`, `oAdd`, `oTermS`, `oTermE`) VALUES
(1200, 'Punong Barangay', 'Ernesto C. Roque Jr.', '09267845634', 'Purok 3, Sampaloc, San Rafael, Bulacan', '2022-06-30', '2023-10-30'),
(1201, 'Kagawad', 'Rosario R. Dela Rosa', '09943682734', 'Purok 2, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30'),
(1202, 'Kagawad', 'Rene R. Abraham', '09242213632', 'Purok 2, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30'),
(1203, 'Kagawad', 'Proceso C. Roque', '09232134136', 'Purok 4, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30'),
(1204, 'Kagawad', 'Esvetlana H. Tobias', '09364526141', 'Purok 1, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30'),
(1205, 'Kagawad', 'Dexter A. Palopalo', '09253765532', 'Purok 3, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30'),
(1206, 'Kagawad', 'Julieta C. Chico', '09243534768', 'Purok 4, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30'),
(1207, 'SK Chairwoman', 'Romchell T. Cruz', '09573234596', 'Purok 1, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30'),
(1208, 'Secretary', 'Hernando L. Santiago', '09458935741', 'hernandosantiago@yahoo.com', '2018-06-30', '2023-10-30'),
(1209, 'Treasurer', 'Edwin O. Camacho', '09298735461', 'Purok 2, Sampaloc, San Rafael, Bulacan', '2018-06-30', '2023-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `pID` int(11) NOT NULL,
  `pRFirst` varchar(50) NOT NULL,
  `pRLast` varchar(30) NOT NULL,
  `pBName` varchar(50) NOT NULL,
  `pBAdd` varchar(60) NOT NULL,
  `pBType` varchar(20) NOT NULL,
  `pOR` varchar(20) NOT NULL,
  `pAmount` varchar(10) NOT NULL,
  `pStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblresidents`
--

CREATE TABLE `tblresidents` (
  `rID` int(11) NOT NULL,
  `rFirst` varchar(50) NOT NULL,
  `rMid` varchar(30) NOT NULL,
  `rLast` varchar(30) NOT NULL,
  `rAlias` varchar(20) NOT NULL,
  `rBday` date NOT NULL,
  `rBplace` varchar(50) NOT NULL,
  `rAge` varchar(10) NOT NULL,
  `rCivil` varchar(20) NOT NULL,
  `rGender` varchar(20) NOT NULL,
  `rHouse` varchar(10) NOT NULL,
  `rPurok` varchar(10) NOT NULL,
  `rVoter` varchar(20) NOT NULL,
  `rPrecint` varchar(20) NOT NULL,
  `rPhilhealth` varchar(20) NOT NULL,
  `rEmail` varchar(50) NOT NULL,
  `rContact` varchar(20) NOT NULL,
  `rOccup` varchar(30) NOT NULL,
  `rCitizen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblresidents`
--

INSERT INTO `tblresidents` (`rID`, `rFirst`, `rMid`, `rLast`, `rAlias`, `rBday`, `rBplace`, `rAge`, `rCivil`, `rGender`, `rHouse`, `rPurok`, `rVoter`, `rPrecint`, `rPhilhealth`, `rEmail`, `rContact`, `rOccup`, `rCitizen`) VALUES
(1305, 'Jeanherline', 'Lopez', 'Santiago', 'Jea', '2003-03-29', 'San Ildefonso', '19', 'Single', 'Female', '399', '1', 'Registered', '1009B', '21-3233452-034', 'jynerline@gmail.com', '09293010483', 'Student', 'Filipino'),
(1306, 'Suzette Bishop Love', 'Del Rosario', 'Angeles', 'Suzette', '2001-11-12', 'Pampanga', '21', 'Single', 'Female', '418', '5', 'Registered', '329A', '35-453677-754', 'suzettebishoploveangeles@gmail.com', '09654105485', 'Student', 'Filipino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`bID`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `tblofficials`
--
ALTER TABLE `tblofficials`
  ADD PRIMARY KEY (`oID`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `tblresidents`
--
ALTER TABLE `tblresidents`
  ADD PRIMARY KEY (`rID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `bID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1402;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1600;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `tblofficials`
--
ALTER TABLE `tblofficials`
  MODIFY `oID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1210;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1500;

--
-- AUTO_INCREMENT for table `tblresidents`
--
ALTER TABLE `tblresidents`
  MODIFY `rID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1307;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
