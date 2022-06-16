-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2022 at 06:20 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `euphoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE IF NOT EXISTS `airline` (
  `company` varchar(30) NOT NULL,
  `ticket_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`company`, `ticket_price`) VALUES
('Singapore Airlines', 200),
('Emirates', 250),
('Qatar Airways', 250),
('Cathay Pacific Airways', 200),
('Virgin Atlantic Airways', 220),
('Thai Airways International', 230);

-- --------------------------------------------------------

--
-- Table structure for table `booked_trips`
--

CREATE TABLE IF NOT EXISTS `booked_trips` (
  `trip_id` varchar(5) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `package` varchar(10) NOT NULL,
  `hotel` varchar(20) NOT NULL,
  `rooms` int(11) NOT NULL,
  `departure` varchar(15) NOT NULL,
  `arrival` varchar(15) NOT NULL,
  `flight` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`trip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_trips`
--

INSERT INTO `booked_trips` (`trip_id`, `user_id`, `country`, `destination`, `package`, `hotel`, `rooms`, `departure`, `arrival`, `flight`, `price`) VALUES
('3502', '516', 'UAE', 'Spain, Europe', 'friends', 'Gran Hotel', 2, '2022-02-04', '2022-02-23', 'Emirates', 690),
('4787', '516', 'Pakistan', 'Torronto, Canada', 'family', 'Shangri-La', 3, '2022-02-05', '2022-03-03', 'Emirates', 460),
('5397', '516', 'Pakistan', 'New York, USA', 'family', 'Double Tree', 3, '2022-02-04', '2022-02-06', 'Thai Airways Interna', 300),
('7600', '516', 'Pakistan', 'Seoul, South Korea', 'friends', 'Signiel Seoul', 2, '2022-02-01', '2022-02-05', 'Emirates', 500);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `hotel_Id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hot_num` int(11) NOT NULL,
  `hot_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`hotel_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_Id`, `hot_num`, `hot_Name`, `price`, `location`) VALUES
('id_101', 1, 'The Langham', 220, 'New York, USA'),
('id_102', 2, 'Hotel Edison', 320, 'New York, USA'),
('id_103', 3, 'Double Tree', 300, 'New York, USA'),
('id_111', 1, 'Signiel Seoul', 250, 'Seoul, South Korea'),
('id_222', 2, 'Escape Hotel', 320, 'Seoul, South Korea'),
('id_333', 3, 'Lotte Hotel', 450, 'Seoul, South Korea'),
('id_444', 1, 'Mandarin Oriental', 240, 'Paris, France'),
('id_555', 2, 'Hotel Les Deux', 370, 'Paris, France'),
('id_666', 3, 'Four Seasons', 520, 'Paris, France'),
('id_777', 1, 'SKYE', 280, 'Sydney, Australia'),
('id_888', 2, 'Hyatt Regency', 390, 'Sydney, Australia'),
('id_893', 1, 'Hotel Miramar', 320, 'Spain, Europe'),
('id_894', 2, 'Gran Hotel', 440, 'Spain, Europe'),
('id_895', 3, 'Maria Christina', 560, 'Spain, Europe'),
('id_896', 1, 'Shangri-La', 210, 'Torronto, Canada'),
('id_897', 2, 'Bisha Hotel', 320, 'Torronto, Canada'),
('id_898', 3, 'The Hazelton Hotel', 600, 'Torronto, Canada'),
('id_999', 3, 'Sofitel Sydney', 520, 'Sydney, Australia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` tinytext NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `password`, `address`, `birthday`, `gender`) VALUES
('516', 'anum.aamir236@gmail.com', 'Anum Aamir', 'Dell1234', 'Sialkot, Pakistan', '2000-06-23', 'Female');
