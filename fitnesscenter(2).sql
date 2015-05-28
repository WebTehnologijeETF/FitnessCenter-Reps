-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 10:46 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fitnesscenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `Id` int(11) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tekst` varchar(100) NOT NULL,
  `Novost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`Id`, `Vrijeme`, `Autor`, `Email`, `Tekst`, `Novost`) VALUES
(2, '2015-05-22 00:00:00', 'ghh', 'ghhdh', 'hhfghg', 1),
(16, '2015-05-28 22:32:37', 'fhf', 'fhh', 'ffh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`username`, `password`, `id`) VALUES
('user1', 'pass1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `novost`
--

CREATE TABLE IF NOT EXISTS `novost` (
  `Id` int(11) NOT NULL,
  `Vrijeme` datetime NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Naslov` varchar(50) NOT NULL,
  `Url` varchar(100) NOT NULL,
  `Sazetak` varchar(250) NOT NULL,
  `Sadrzaj` varchar(500) NOT NULL,
  `Count` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  KEY `Id_2` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `novost`
--

INSERT INTO `novost` (`Id`, `Vrijeme`, `Autor`, `Naslov`, `Url`, `Sazetak`, `Sadrzaj`, `Count`) VALUES
(1, '2015-05-01 00:00:00', 'gh', 'gf', 'gf', 'gf', 'gf', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
