-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2019 at 08:22 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcarproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(108) NOT NULL,
  `model` varchar(108) NOT NULL,
  `type` varchar(108) NOT NULL,
  `tankCapacity` varchar(108) NOT NULL,
  `gasConsumption` varchar(108) NOT NULL,
  `color` varchar(108) NOT NULL,
  `numberofPassenger` int(11) NOT NULL,
  `rentPrice` double NOT NULL,
  `image` text,
  `description` text,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ID`, `brand`, `model`, `type`, `tankCapacity`, `gasConsumption`, `color`, `numberofPassenger`, `rentPrice`, `image`, `description`, `status`) VALUES
(7, 'Porsche', 'Cayan Sick', 'Sports', '10', '10', '#000000', 2, 150, 'image/car20_1555951566.jpg', 'Nice car dude', 1),
(2, 'BMW', 'M4', 'Sports', '690', '20', '#093f87', 5, 100, 'image/bmw.jpg', 'Sports car', 1),
(3, 'Honda', 'Type R', 'Sedan', '100', '35', '#870909', 5, 70, 'image/honda.jpg', 'Great price!', 1),
(6, 'Tesla', 'M3', 'Electric', '40', '40', '#000000', 5, 130, 'image/tesla_1556112195.jpg', '', 1),
(8, 'Mercedez', 'Benz', 'Class S`', '10', '10', '#000000', 5, 120, 'image/car6_1555951637.jpg', '', 0),
(9, 'Suburu', 'Roadster', 'Sports', '15', '15', '#0000FF', 5, 100, 'image/car17_1556110584.jpg', 'Good for off roading!', 0),
(10, 'Audi', 'r8', 'Sports', '2', '200', '3399FF', 2, 180, 'image/car8_1555951850.jpg', '', 0),
(11, 'Volkwagon', 'Prestige', 'Normal', '20', '20', '#0000FF', 6, 65, 'image/car10_1556109988.jpg', '', 1),
(12, 'Tesla', 'Future', 'Electric', '100', '50', '#C0C0C0', 5, 100, 'image/car1_1556134444.jpg', 'Energy Efficient', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `dateofBirth` date NOT NULL,
  `phone` varchar(200) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customerDriverLicence` varchar(20) NOT NULL,
  `creditCard` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `username`, `password`, `fullName`, `dateofBirth`, `phone`, `customerEmail`, `address`, `customerDriverLicence`, `creditCard`) VALUES
(1, 'johnlo', 'cbff98184193fb964111f2662c38fe0d', 'Jonathan Amparo', '1994-04-16', '514-514-5144', 'jonathanamparo2@Live.com', '738 Rue Paul', '1231231231', '123123123123'),
(8, 'jonny7', '', 'jonny7 jonny7', '1999-06-02', '777777777', 'something7@email.com', '777 sunshine alley way', '7777777', '7777777'),
(7, 'joejoe', 'cbff98184193fb964111f2662c38fe0d', 'joejoejoe joejoejoe', '1999-06-04', '5665456544', 'somethingf@email.com', '123 address', '34854389734', '493903093949'),
(4, 'edited', '', 'edit edited', '1998-06-30', '55555555555', 'edited@live.com', 'edited 123 Streeet', '99999999999999', '99999999999999'),
(6, '123', 'cbff98184193fb964111f2662c38fe0d', '123 123', '1999-06-02', '897897879', '8977989@live.com', '879789', '879789', '789987');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `username`, `password`, `fullName`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator Access', 'jonathanamparo2@live.com.com', 1, 1),
(2, 'employee', 'cbff98184193fb964111f2662c38fe0d', 'Employee Access', 'employee@gmail.com', 2, 1),
(6, 'george', 'c3284d0f94606de1fd2af172aba15bf3', 'George Boursiquot', 'georgeB@gmail.com', 2, 1),
(7, 'NewGuy123', '1b409ff2c26e83e0c4f2fce69a4742fb', 'Sarah Doyon', 'Sarah@live.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `returnID` int(11) NOT NULL,
  `charge` double NOT NULL,
  `additionalCharge` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`ID`, `returnID`, `charge`, `additionalCharge`) VALUES
(1, 1, 200, 100),
(2, 2, 350, 0),
(3, 3, 450, 200),
(4, 3, 210, 50),
(5, 3, 210, 50),
(6, 3, 210, 50),
(7, 6, 210, 0),
(8, 6, 210, 0),
(9, 6, 210, 0),
(10, 6, 210, 0),
(11, 6, 210, 0),
(12, 6, 210, 0),
(13, 6, 210, 0),
(14, 6, 210, 0),
(15, 6, 210, 0),
(16, 15, 150, 20),
(17, 16, 250, 0),
(18, 17, 200, 25),
(19, 18, 300, 444);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `level`, `valid`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(2, 'employee', 'cbff98184193fb964111f2662c38fe0d', 2, 1),
(3, 'johnlo', 'cbff98184193fb964111f2662c38fe0d', 3, 1),
(15, 'NewGuy123', 'cbff98184193fb964111f2662c38fe0d', 2, 0),
(9, 'joe', 'cbff98184193fb964111f2662c38fe0d', 2, 1),
(8, '123', 'cbff98184193fb964111f2662c38fe0d', 3, 1),
(11, '12', 'cbff98184193fb964111f2662c38fe0d', 2, 1),
(14, 'george', 'cbff98184193fb964111f2662c38fe0d', 2, 1),
(12, 'joejoe', 'cbff98184193fb964111f2662c38fe0d', 3, 1),
(13, 'jonny', 'cbff98184193fb964111f2662c38fe0d', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

DROP TABLE IF EXISTS `rentals`;
CREATE TABLE IF NOT EXISTS `rentals` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `carID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `dateStart` datetime NOT NULL,
  `dateEnd` datetime NOT NULL,
  `price` double NOT NULL,
  `tosAccepted` tinyint(1) DEFAULT NULL,
  `cancelled` tinyint(1) DEFAULT NULL,
  `inspected` tinyint(1) DEFAULT NULL,
  `notes` text NOT NULL,
  `returnn` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`ID`, `carID`, `customerID`, `dateStart`, `dateEnd`, `price`, `tosAccepted`, `cancelled`, `inspected`, `notes`, `returnn`) VALUES
(1, 3, 2, '2019-03-25 05:15:00', '2019-03-26 11:00:00', 300, 1, 0, 0, '', 1),
(2, 3, 2, '2019-04-01 06:00:00', '2019-04-03 07:00:00', 350, 1, 1, 0, '', 1),
(3, 3, 1, '2019-05-01 14:32:00', '2019-05-08 20:00:00', 210, 1, 1, 0, 'Wanted to extend rental!', 1),
(4, 3, 1, '2019-05-01 14:32:00', '2019-06-08 20:00:00', 210, 1, 0, 0, 'Wanted to extend rental!', 1),
(5, 7, 6, '2019-04-23 14:16:00', '2019-04-25 00:16:00', 150, 1, 1, 0, 'Thanks for the car buddy!', 1),
(6, 2, 7, '2019-04-24 15:40:00', '2019-04-26 15:40:00', 200, 1, 0, 0, 'numero3', 1),
(7, 7, 1, '2019-04-23 17:00:00', '2019-04-26 13:10:00', 300, 1, 0, 0, '444', 1),
(8, 6, 7, '2019-04-25 17:42:00', '2019-04-27 15:44:00', 250, 1, 0, 0, '5555', 1),
(9, 6, 1, '2019-04-24 12:41:00', '2019-07-30 12:41:00', 6000, 1, 0, 0, 'needs for 3 months!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `carID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `dateStart` datetime NOT NULL,
  `dateEnd` datetime NOT NULL,
  `price` double NOT NULL,
  `tosAccepted` tinyint(1) DEFAULT NULL,
  `notes` text,
  `rented` tinyint(1) NOT NULL,
  `cancel` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ID`, `carID`, `customerID`, `dateStart`, `dateEnd`, `price`, `tosAccepted`, `notes`, `rented`, `cancel`) VALUES
(1, 3, 2, '2019-03-25 05:15:00', '2019-03-26 11:00:00', 392, 1, '', 1, 0),
(2, 3, 2, '2019-04-01 06:00:00', '2019-04-03 07:00:00', 392, 1, '', 1, 0),
(3, 3, 1, '2019-05-01 14:32:00', '2019-05-02 19:32:00', 70, 1, '', 1, 0),
(4, 6, 1, '2019-04-24 12:41:00', '2019-04-30 12:41:00', 594, 1, '', 1, 0),
(5, 6, 1, '2019-04-23 12:42:00', '2019-04-30 12:42:00', 693, 1, '', 0, 0),
(6, 6, 1, '2019-04-24 12:41:00', '2019-04-30 12:41:00', 594, 1, '', 0, 0),
(7, 8, 1, '2019-04-22 13:00:00', '2019-04-25 12:58:00', 240, 1, '', 0, 0),
(8, 6, 1, '2019-04-23 13:08:00', '2019-04-24 13:08:00', 99, 1, '', 0, 0),
(9, 6, 1, '2019-04-23 13:08:00', '2019-04-24 13:08:00', 99, 1, '', 0, 0),
(10, 6, 1, '2019-04-23 13:08:00', '2019-04-24 13:08:00', 99, 1, '', 0, 0),
(11, 7, 1, '2019-04-23 17:00:00', '2019-04-26 13:10:00', 300, 1, '', 1, 0),
(12, 7, 6, '2019-04-23 14:16:00', '2019-04-25 00:16:00', 150, 1, 'Thanks for the car buddy!', 1, 0),
(13, 2, 7, '2019-04-24 15:40:00', '2019-04-26 15:40:00', 200, 1, '', 1, 0),
(14, 6, 7, '2019-04-25 17:42:00', '2019-04-27 15:44:00', 130, 1, '', 1, 0),
(15, 9, 7, '2019-04-25 15:46:00', '2019-04-26 15:46:00', 100, 1, '', 0, 0),
(16, 12, 7, '2019-04-24 15:46:00', '2019-04-25 15:46:00', 100, 1, '', 0, 0),
(17, 10, 7, '2019-04-23 15:47:00', '2019-04-25 15:47:00', 360, 1, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `returnrentals`
--

DROP TABLE IF EXISTS `returnrentals`;
CREATE TABLE IF NOT EXISTS `returnrentals` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rentalID` int(11) NOT NULL,
  `returnDate` datetime NOT NULL,
  `inspected` tinyint(1) NOT NULL,
  `damage` tinyint(1) NOT NULL,
  `notes` text,
  `gasLevel` double NOT NULL,
  `mileage` double DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnrentals`
--

INSERT INTO `returnrentals` (`ID`, `rentalID`, `returnDate`, `inspected`, `damage`, `notes`, `gasLevel`, `mileage`) VALUES
(1, 1, '2019-03-26 11:00:00', 0, 1, '', 50, 25000),
(2, 2, '2019-04-03 07:00:00', 0, 0, '', 45, 25250),
(3, 4, '2019-06-08 20:00:00', 0, 0, 'Wanted to extend rental!', 50, 1150),
(4, 4, '2019-06-08 20:00:00', 0, 0, 'Wanted to extend rental!', 50, 1150),
(5, 4, '2019-06-08 20:00:00', 0, 0, 'Wanted to extend rental!', 50, 1150),
(6, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(7, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(8, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(9, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(10, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(11, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(12, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(13, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(14, 3, '2019-05-08 20:00:00', 0, 0, 'Wanted to extend rental!', 0, 0),
(15, 5, '2019-04-25 00:16:00', 0, 0, 'Thanks for the car buddy!', 50, 1234),
(16, 8, '2019-04-27 15:44:00', 0, 0, '5555', 20, 505050),
(17, 6, '2019-04-26 15:40:00', 0, 0, 'numero3', 25, 1666),
(18, 7, '2019-04-26 13:10:00', 0, 0, '444', 444, 444);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
