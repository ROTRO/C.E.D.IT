-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 26 nov. 2018 à 21:50
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `questions`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `CA` int(11) NOT NULL AUTO_INCREMENT,
  `Answers` varchar(200) NOT NULL,
  `CC` int(11) NOT NULL,
  `Vrai` varchar(1) NOT NULL,
  PRIMARY KEY (`CA`),
  KEY `CC` (`CC`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`CA`, `Answers`, `CC`, `Vrai`) VALUES
(1, 'Hyper Text Markup Language', 1, 'V'),
(2, 'Home Tool Markup Language', 1, 'F'),
(3, 'Hyperling and text Markup Language', 1, 'F'),
(4, 'Hard Text Marking Language', 1, 'F'),
(5, 'Hyper Text Markup Language', 1, 'V'),
(6, 'Home Tool Markup Language', 1, 'F'),
(7, 'Hyperling and text Markup Language', 1, 'F'),
(8, 'Hard Text Marking Language', 1, 'F');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `CQ` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(200) NOT NULL,
  PRIMARY KEY (`CQ`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`CQ`, `Question`) VALUES
(1, 'What does HTML stand For ?'),
(2, 'What does HTML stand For ?');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`CC`) REFERENCES `questions` (`CQ`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
