-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 jan. 2021 à 10:27
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `astrakey`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id_games` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_genre` int NOT NULL,
  `price` int NOT NULL,
  `cle` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id_games`),
  KEY `id_genre` (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id_games`, `name`, `id_genre`, `price`, `cle`, `description`, `img`) VALUES
(1, 'Call of Duty: Black Ops Cold War', 1, 59, 'muRLcc7x7WWK26Sn54x6', 'Alors que Call of Duty : Black Ops 4 était un jeu de tir multijoueur, le cinquième volet de la sous-série COD de Treyarch comportera un volet solo complémentaire. Achetez Call of Duty: Black Ops Cold War Green Gift pour assister et pour participer aux évé', 'https://www.casimages.com/i/210104112259160849.jpg.html'),
(2, 'Minecraft', 2, 20, 'e96DYg24rb8mVs96zCNC', 'Minecraft est un jeu vidéo de type « bac à sable » développé par le Suédois Markus Persson, alias Notch, puis par la société Mojang Studios. Il s\'agit d\'un univers composé de voxels et généré aléatoirement, qui intègre un système d\'artisanat axé sur l\'exp', 'https://www.casimages.com/i/210104112917770357.jpg.html'),
(3, '\r\nDark Souls: Remastered', 3, 15, 'm5FjZL7a6sgY4x38Xg2G', 'Le joueur incarne un humain maudit par la Marque Sombre le rendant mort-vivant, et évolue à Lordran dans un monde médiéval-fantastique à la troisième personne. Le jeu se concentre sur la maîtrise du gameplay et l\'utilisation des compétences, armes, armure', 'https://www.casimages.com/i/21010411322167597.jpg.html');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(1, 'FPS'),
(2, 'open world'),
(3, 'RPG');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `id_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
