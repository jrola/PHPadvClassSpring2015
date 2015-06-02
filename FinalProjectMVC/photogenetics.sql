-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 07:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `ImageName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `images`
--

TRUNCATE TABLE `images`;
--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImageID`, `ImageSize`, `Directory`, `ImageName`) VALUES
(53, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(54, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(55, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(56, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(57, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(58, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(59, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(60, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(61, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(62, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(63, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(64, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(65, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(66, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(67, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(68, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(69, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(70, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(71, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(72, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(73, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(74, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(75, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(76, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(77, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(78, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(79, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(80, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(81, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(82, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(83, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(84, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(85, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(86, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(87, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(88, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c'),
(89, '11531', 'C:/Users/Chris2Wavey/Desktop/xampp/htdocs/PHPadvClassSpring2015/FinalProjectMVC/site/mvc/models/dao/thomasnunez92@gmail.com/76cb93c07913576a1678dc71b19ecb744a53ca0c.png', '76cb93c07913576a1678dc71b19ecb744a53ca0c');

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
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `login`:
--   `UserID`
--       `user` -> `UserID`
--

--
-- Truncate table before insert `login`
--

TRUNCATE TABLE `login`;
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
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
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
-- Truncate table before insert `userimages`
--

TRUNCATE TABLE `userimages`;
--
-- Dumping data for table `userimages`
--

INSERT INTO `userimages` (`ImageID`, `UserID`) VALUES
(53, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1);

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
MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `LoginID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;