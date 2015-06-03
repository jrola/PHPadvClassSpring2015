-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 03:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photogenetics`
--
CREATE DATABASE IF NOT EXISTS `photogenetics` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `photogenetics`;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
`ImageID` int(11) NOT NULL,
  `ImageSize` varchar(15) NOT NULL,
  `Directory` varchar(1000) NOT NULL,
  `ImageName` varchar(50) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `Delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImageID`, `ImageSize`, `Directory`, `ImageName`, `Comment`, `Delete`) VALUES
(109, '11531', 'img/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c', '', 0),
(118, '234175', 'img/thomasnunez92@gmail.com/660126d3fff20b31ff0be41f808ec71709dfa23f.png', '660126d3fff20b31ff0be41f808ec71709dfa23f', 'fdafdsafsdfsa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
`LoginID` int(11) unsigned NOT NULL,
  `UserID` int(11) unsigned DEFAULT NULL,
  `Password` varchar(60) NOT NULL,
  `Successful` int(11) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LoginID`, `UserID`, `Password`, `Successful`, `DateTime`) VALUES
(134, 1, '$2y$10$NTgHcyapeVkcwyyEqyUHyuzyJ8y7SPHm7pKqxg2l0VBpCPpeXTuj.', 1, '2015-05-31 22:39:20'),
(156, 12, '$2y$10$.AiZhiwgYzA1xcBxsohHEecmTkRtyYL.H9onxGBCNliAF1W2f2l2i', 1, '2015-05-31 22:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`UserID` int(11) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Zip` int(5) NOT NULL,
  `Delete` bit(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Address`, `City`, `State`, `Zip`, `Delete`, `Email`, `Password`) VALUES
(1, 'Katherine', 'Tejeda', '230 Dexter street D203', 'Providence', 'Rhode Island', 2907, b'0', 'thomasnunez92@gmail.com', '$2y$10$/3sSibvIhz.B6ZiOBB/NfOzJw4jYMBp4r5IDYacU3OJwwWbJ4yxhq'),
(12, 'Katherine', 'Tejeda', '230 Dexter street D203', 'Providence', 'Rhode Island', 2907, b'0', 'tejeda863@gmail.com', '$2y$10$RCtdrW.AixnaHCF4eJpnv.DjgZmNXFIWMG45w5iloXY0pWhMPej1y'),
(15, 'tom', 'Rodriguez', '1 benedict', 'Boston', 'CALIFORNIA', 2909, b'0', 'thomasnunez@gmail.com', '$2y$10$wzrxbe.TQA47fpivxaDwBuS8SltnUzCdX607mKux.I1/C0Rt3o6je'),
(16, 'Katherine', 'Tejeda', '230 Dexter street D203', 'Providence', 'Rhode Island', 2907, b'0', 'thomas.nunez92@gmail.com', '$2y$10$QbBaijUxGHBTX0vr/qAD4epWdR4R3TGqnanlbqGmdXj9g/.TOtMIO');

-- --------------------------------------------------------

--
-- Table structure for table `userimages`
--

DROP TABLE IF EXISTS `userimages`;
CREATE TABLE IF NOT EXISTS `userimages` (
  `ImageID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userimages`
--

INSERT INTO `userimages` (`ImageID`, `UserID`) VALUES
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`ImageID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`LoginID`), ADD UNIQUE KEY `LoginID` (`LoginID`), ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `userimages`
--
ALTER TABLE `userimages`
 ADD PRIMARY KEY (`ImageID`), ADD UNIQUE KEY `UserID` (`ImageID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `LoginID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
