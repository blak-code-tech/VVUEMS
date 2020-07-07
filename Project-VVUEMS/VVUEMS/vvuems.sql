-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 02:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvuems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(30) NOT NULL,
  `Fname` varchar(32) NOT NULL,
  `Mname` varchar(32) NOT NULL,
  `Lname` varchar(32) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Fname`, `Mname`, `Lname`, `Password`, `Email`, `Phone`) VALUES
('Admin001', 'Eto', 'Moko', 'Timze', 'p@ssword', 'timzeeto@vvuems.com', '0300456213'),
('Admin002', 'Solomon', 'Kweku', 'Atimpoko', 'richG@nst@', 'sk_atimpoko@vvuems.com', '0300456214');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Username` varchar(10) NOT NULL,
  `Fname` varchar(11) NOT NULL,
  `Mname` varchar(11) NOT NULL,
  `Lname` varchar(11) NOT NULL,
  `Passwords` varchar(20) NOT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Username`, `Fname`, `Mname`, `Lname`, `Passwords`, `Phone`, `Email`) VALUES
('langman', 'Damian', 'Kofi', 'Langle', 'kofiMole', '0233456998', 'langman@gmail.com'),
('mic', 'Mike', 'Adam', 'Warren', '1234', '0548933211', 'mikewarren@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(32) NOT NULL,
  `EventID` varchar(32) NOT NULL,
  `Event` text NOT NULL,
  `Num_Guest` int(4) NOT NULL,
  `Chairs` varchar(4) NOT NULL,
  `Sound` varchar(4) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Venue` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Best_Time` varchar(32) NOT NULL,
  `Customer_ID` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `EventID`, `Event`, `Num_Guest`, `Chairs`, `Sound`, `Date`, `Time`, `Venue`, `Description`, `Best_Time`, `Customer_ID`) VALUES
(46, 'E8369063196', 'Sports', 100, 'Yes', 'Yes', '2020-11-19', '12:00:00', 'Park', 'It just a fun games day for my colleges at work', 'Evening', 'mic'),
(48, 'E3727403684', 'Sports', 200, 'Yes', 'Yes', '2020-06-12', '19:00:00', 'Boluwatife Hall', 'We just want to have fun', 'Evening', 'mic'),
(49, 'E8715374847', 'Sports', 500, 'Yes', 'Yes', '2020-06-24', '21:12:00', 'Women Center', 'polish me now', 'Afternoon', 'langman');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `Email`, `Message`) VALUES
(42, 'mikewarren@outlook.com', 'Hey, love the work you are doing and I just want to say thanks alot'),
(54, 'langman@gmail.com', 'let\'s walk can\'t talk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EventID` (`EventID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
