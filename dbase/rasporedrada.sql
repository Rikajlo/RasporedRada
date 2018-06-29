-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 03:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rasporedrada`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `ID_Admin` int(11) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE IF NOT EXISTS `buses` (
  `ID_Bus` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Broken` tinyint(1) NOT NULL,
  `Reserved` tinyint(1) NOT NULL,
  `Photo_Link_Bus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`ID_Bus`, `Type`, `Description`, `Broken`, `Reserved`, `Photo_Link_Bus`) VALUES
(71, 'GRADSKI SOLO', 'Gradski solo, žuti man.', 0, 0, NULL),
(72, 'GRADSKI SOLO', 'Beli mercedes benz. Gradski solo.', 0, 0, NULL),
(70, 'GRADSKI SOLO', 'Gradski beli solo ikarbus', 0, 0, NULL),
(202, 'GRADSKI SOLO', 'Gradski solo. Plavi ikarbus.', 0, 0, NULL),
(108, 'GRADSKI ZGLOBNI', 'Zglobni plavi gradski novi.', 0, 0, NULL),
(94, 'GRADSKI ZGLOBNI', 'Gradski Zglobni stari plavi', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `ID_Driver` int(11) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(11) NOT NULL,
  `Password` varchar(55) DEFAULT NULL,
  `Digital_Tachograph` tinyint(1) DEFAULT NULL,
  `Area` int(11) DEFAULT NULL,
  `Bus_Own` int(11) DEFAULT NULL,
  `Photo_Link_Driver` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`ID_Driver`, `First_Name`, `Last_Name`, `Password`, `Digital_Tachograph`, `Area`, `Bus_Own`, `Photo_Link_Driver`) VALUES
(0, 'Nema', 'Nema', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `published`
--

CREATE TABLE IF NOT EXISTS `published` (
  `Date` date NOT NULL,
  `Published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `ID_Tour` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `Total_Time` time NOT NULL,
  `Type_Tour` int(11) NOT NULL,
  `Type_Day` int(11) NOT NULL,
  `Photo_Link_Tour` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`ID_Tour`, `Name`, `Description`, `Start_Time`, `End_Time`, `Total_Time`, `Type_Tour`, `Type_Day`, `Photo_Link_Tour`) VALUES
(10113, '1/I', '1/I Linija 1 prepodne', '04:50:00', '09:00:00', '04:10:00', 3, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workplan`
--

CREATE TABLE IF NOT EXISTS `workplan` (
  `ID_Work` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Tour` int(11) NOT NULL,
  `ID_Driver` int(11) NOT NULL,
  `ID_Bus1` int(11) DEFAULT NULL,
  `ID_Bus2` int(11) DEFAULT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `Total_Time` time NOT NULL,
  PRIMARY KEY (`ID_Work`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
