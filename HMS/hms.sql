-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 05:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `profile`) VALUES
(1, 'admin', '0987', 'admin.png'),
(2, 'fahad', '1211', 'adminl.jpeg'),
(3, 'admin2', '9990', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(100) NOT NULL,
  `puserid` int(100) NOT NULL,
  `duserid` int(100) NOT NULL,
  `starttime` varchar(100) NOT NULL,
  `endtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `puserid`, `duserid`, `starttime`, `endtime`) VALUES
(1, 8, 3, '11 AM', '12 PM'),
(2, 8, 1, '06 PM', '07 PM'),
(4, 8, 2, '12 PM', '01 PM'),
(5, 8, 4, '03 PM', '04 PM');

-- --------------------------------------------------------

--
-- Table structure for table `docreq`
--

CREATE TABLE `docreq` (
  `id` int(11) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `vhour` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docreq`
--

INSERT INTO `docreq` (`id`, `dname`, `days`, `vhour`, `hname`) VALUES
(3, 'adi', '03', '5pm', 'er'),
(5, 'adi', '05', '5pm', 'er'),
(6, 'ASIF', '01', '3 pm', 'abhospital'),
(7, 'ASIF', '01', '3 pm', 'abhospital'),
(8, 'ASIF', '01', '3 pm', 'abhospital'),
(11, 'NIROB', '03', '5pm', 'abhospital'),
(12, 'ASIF', '02', '6 pm', 'er HOSPITAL'),
(13, 'RAHIM', '04', '6 pm', 'abhospital'),
(14, 'RAHIM', '04', '6 pm', 'abhospital'),
(15, 'gONI', '06', '4AM', '6');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `duserid` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Speciality` varchar(100) NOT NULL,
  `starttime` varchar(100) NOT NULL,
  `endtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`duserid`, `FirstName`, `LastName`, `DOB`, `Gender`, `Email`, `username`, `password`, `Speciality`, `starttime`, `endtime`) VALUES
(1, 'bb', 'bb', '2021-04-06', 'male', 'raymantouid47@outlook.com', 'bb', 'mm', 'Optometrist', '10 AM', '08 PM');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `doctorname` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`doctorname`, `day`, `month`, `year`, `days`, `reason`) VALUES
('sd', '01', '01', ' 2015', '', ''),
('das', '06', '01', ' 2015', '6', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastmame` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `dateofbirth` datetime(6) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phonenumber` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `firstname`, `lastmame`, `username`, `dateofbirth`, `gender`, `email`, `password`, `phonenumber`) VALUES
(1, 'arnab', 'hasan', 'arnab', '0000-00-00 00:00:00.000000', '', 'shadshb@gmail.com', '13973nss', 127234);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_reg` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `firstname`, `lastname`, `gender`, `username`, `email`, `password`, `date_reg`, `profile`) VALUES
(1, 'sam', 'hill', 'male', 'sm', 'sam@email.com', 'sm12', '', ''),
(2, 'jon', 'pat', 'male', 'jon12', 'jon@email.com', 'jon12', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'Criptonin', 'criptoninx@outlook.com', '1211'),
(2, 'hasan ', 'hasanb@gmail.com', '0990'),
(3, 'xebon', 'xebon@gmail.com', '7890');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_send` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `title`, `message`, `username`, `date_send`) VALUES
(1, 'Send Report', 'headache since yesterday', 'sm', '2021-08-18 08:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(100) NOT NULL,
  `puserid` int(100) NOT NULL,
  `duserid` int(100) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `puserid`, `duserid`, `review`) VALUES
(1, 8, 3, 'You are a very good doctor . so helpful . keep it up');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `doctorname` varchar(80) NOT NULL,
  `day` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `Visit` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`doctorname`, `day`, `month`, `year`, `Visit`, `total`) VALUES
('ASIF', '02', '01', '2015', '8-9', '5'),
('NIROB', '01', '01', '2015', '3 pm', '5'),
('fahid', '04', '01', '2015', '6 pm', '2'),
('12345', '06', '07', '2021', '7pm', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `docreq`
--
ALTER TABLE `docreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`username`),
  ADD KEY `duserid` (`duserid`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `docreq`
--
ALTER TABLE `docreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `duserid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
