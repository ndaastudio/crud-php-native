-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 02:09 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `NIM` varchar(255) NOT NULL,
  `WA` varchar(255) NOT NULL,
  `IG` varchar(255) NOT NULL,
  `Hobi` varchar(255) NOT NULL,
  `Dosen_PA` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`ID`, `Nama`, `NIM`, `WA`, `IG`, `Hobi`, `Dosen_PA`) VALUES
(18, 'Aprimivi Manda', '03041182126001', '081379216886', '@nda.04_', 'Playing With Code', '-'),
(20, 'Daren Sulistio', '03041182126027', '08893846965', '@darensulistio', 'Komputer', '-'),
(21, 'M. Mirza Fathur R', '03041282126053', '083178037094', '@ftrboy', 'Gitar dan futsal', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
