-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 11 fév. 2023 à 15:11
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `estm`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--
create DATABASE IF NOT EXISTS abdou CHARACTER SET utf8;
CREATE user 'abdou'@'localhost' IDENTIFIED BY 'abdou';
GRANT ALL PRIVILEGES ON test ESTM.* TO 'abdou'@'localhost';
DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motPasse` varchar(15) NOT NULL,
  `profil` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`id`, `nom`, `prenom`, `email`, `motPasse`, `profil`) VALUES
(1, 'issa ', 'Baba Kaou', 'issababa@gmail.com', 'passer', 'x'),
(2, 'ibrahima', 'Balde', 'bajde@gmail.com', 'passer', 'x'),
(3, 'mouhamad ', 'Toure', 'momo@gmail.com', 'PASSER', 'Z'),
(5, 'Evlo', 'Donald', 'donald@gmail', 'donald', 'indetermine'),
(7, 'malick', 'Youssouf ', 'abdourrahmaneyg01@gmail.com', 'donald', 'indetermine'),
(8, 'malick', 'Youssouf ', 'abdourrahmaneyg01@gmail.com', 'donald', 'indetermine'),
(9, 'abdoul', 'Youssouf ', 'abdourrahmaneyg01@gmail.com', 'passer', 'indetermine'),
(10, 'abdoul', 'Youssouf ', 'abdourrahmaneyg01@gmail.com', 'passer', 'indetermine'),
(11, 'abdoul', 'Youssouf ', 'abdourrahmaneyg01@gmail.com', 'passer', 'indetermine');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
