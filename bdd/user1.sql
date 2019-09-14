-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 14 sep. 2019 à 07:14
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `remede`
--

-- --------------------------------------------------------

--
-- Structure de la table `user1`
--

DROP TABLE IF EXISTS `user1`;
CREATE TABLE IF NOT EXISTS `user1` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `mail` text NOT NULL,
  `password` longtext NOT NULL,
  `score` int(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user1`
--

INSERT INTO `user1` (`id`, `user`, `mail`, `password`, `score`) VALUES
(1, 'aaa', 'audric.specialiste@outlook.com', '$2y$10$QSDwHymbAAt/tpTViLWIDOKhJbg68Y257q9B2.JG8HueNczQ5x84O', 0),
(2, 'coucoy', 'audric.specialiste@outlook.com', '$2y$10$k8wDqZ0vtAbLOIZ9Fd0fNOHmmkdw9Bl3NyFFXEWfl4yBHX86hdQDC', 0),
(3, 's', 'audric.specialiste@outlook.com', '$2y$10$FVNgztAIDmGD8j/Pf4LLt.ARWO.PrXHcSgsPQjbphrr668KOk7zeW', 0),
(4, 'audric', 'audric.specialiste@outlook.com', '$2y$10$fh0joHGcztjOgevCyqnzEu7TV51disW2T9iH80aLeOmFYHwO1KMhe', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
