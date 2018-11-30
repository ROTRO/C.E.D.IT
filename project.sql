-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2018 at 09:45 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `consulter_ress`
--

DROP TABLE IF EXISTS `consulter_ress`;
CREATE TABLE IF NOT EXISTS `consulter_ress` (
  `code_ress` int(8) NOT NULL,
  `etud` int(8) NOT NULL,
  `date` int(50) NOT NULL,
  PRIMARY KEY (`code_ress`,`etud`,`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `code_dde` int(8) NOT NULL,
  `type_dde` varchar(50) NOT NULL,
  `etudient` int(8) NOT NULL,
  `examen` int(8) NOT NULL,
  PRIMARY KEY (`code_dde`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `cin` int(8) NOT NULL,
  `num_s` int(8) NOT NULL,
  `fname_s` varchar(50) NOT NULL,
  `lname_s` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel_s` int(8) NOT NULL,
  `login_s` varchar(50) NOT NULL,
  `pw_s` varchar(50) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `cin` int(8) NOT NULL,
  `num_s` int(8) NOT NULL,
  `fname_s` varchar(50) NOT NULL,
  `lname_s` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel_s` int(8) NOT NULL,
  `login_s` varchar(50) NOT NULL,
  `pw_s` varchar(50) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `code_exam` int(11) NOT NULL,
  `nom_exam` int(11) NOT NULL,
  `date_exam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `code_group` int(8) NOT NULL,
  `nom_group` varchar(50) NOT NULL,
  `ens` int(8) NOT NULL,
  PRIMARY KEY (`code_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passer_test`
--

DROP TABLE IF EXISTS `passer_test`;
CREATE TABLE IF NOT EXISTS `passer_test` (
  `code_test` int(8) NOT NULL,
  `etud` int(8) NOT NULL,
  `date_test` varchar(50) NOT NULL,
  `score` double NOT NULL,
  PRIMARY KEY (`code_test`,`etud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teste`
--

DROP TABLE IF EXISTS `teste`;
CREATE TABLE IF NOT EXISTS `teste` (
  `code_test` int(8) NOT NULL,
  `nom_test` varchar(50) NOT NULL,
  `code_group` int(8) NOT NULL,
  `ens` int(8) NOT NULL,
  PRIMARY KEY (`code_test`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
