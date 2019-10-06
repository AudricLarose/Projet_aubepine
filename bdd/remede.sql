-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 05 oct. 2019 à 19:15
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
-- Structure de la table `effet`
--

DROP TABLE IF EXISTS `effet`;
CREATE TABLE IF NOT EXISTS `effet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_plante` int(11) NOT NULL,
  `effet` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `effet`
--

INSERT INTO `effet` (`id`, `id_plante`, `effet`) VALUES
(1, 1, 'decongestionnante'),
(2, 1, 'anti-inflammatoire'),
(3, 1, 'cicatrisante'),
(4, 1, 'astrigente'),
(5, 2, 'anti-inflammatoire'),
(6, 2, 'protecteur du foie'),
(7, 2, 'hypotensive'),
(8, 3, 'antispasmodique'),
(9, 3, 'antiseptique urinaire'),
(10, 3, 'emmenagogue'),
(11, 3, 'vermifuge'),
(12, 4, 'cardiotonique'),
(13, 4, 'regulatrice tension'),
(14, 4, 'astrigente'),
(15, 4, 'calmante'),
(16, 5, 'depurative'),
(17, 5, 'stimulante hepatique'),
(18, 5, 'cicatrisante'),
(19, 5, 'diuretique'),
(20, 6, 'calmante'),
(21, 6, 'cicatrisante'),
(22, 6, 'anti-infectueux'),
(23, 9, 'diuretique'),
(24, 9, 'antiseptique'),
(25, 9, 'depurative'),
(26, 9, 'sedative'),
(27, 10, 'antispasmodique'),
(28, 10, 'antibacterienne'),
(29, 10, 'antivirale'),
(30, 10, 'tonifiante'),
(31, 11, 'hepatoprotecteur'),
(32, 11, 'tonique veineux'),
(33, 11, 'hypertenseur'),
(34, 11, 'antioxydante'),
(35, 12, 'aperitive'),
(36, 12, 'diuretique'),
(37, 12, 'laxative'),
(38, 12, 'depurative'),
(39, 13, 'antiride'),
(40, 13, 'antitussive'),
(41, 13, 'sedative'),
(42, 13, 'adoucissante'),
(43, 14, 'astrigente'),
(44, 14, 'vasoconstricteur'),
(45, 14, 'decongestionnante'),
(46, 14, 'antitussif'),
(47, 15, 'astrigente'),
(48, 15, 'stimulante'),
(49, 15, 'anti-inflammatoire'),
(50, 15, 'antifatigue'),
(51, 16, 'hypnotique'),
(52, 16, 'calmante'),
(53, 16, 'antistress'),
(54, 16, 'analgesique'),
(55, 20, 'diuretique'),
(56, 20, 'antirhumatismal'),
(57, 20, 'antiseptique'),
(58, 20, 'depurative'),
(59, 21, 'digestive'),
(60, 21, 'antirhumatismal'),
(61, 21, 'anti-inflammatoire'),
(62, 21, 'emmenagogue'),
(63, 22, 'antalgique'),
(64, 22, 'desinfectante'),
(65, 22, 'antispasmodique'),
(66, 22, 'antipoux'),
(67, 23, 'pectoral'),
(68, 23, 'astrigente'),
(69, 23, 'cicatrisante'),
(70, 23, 'antiseptique'),
(71, 24, 'anti-inflammatoire'),
(72, 24, 'vasoconstricteur'),
(73, 24, 'analgesique'),
(74, 24, 'antitussif'),
(75, 25, 'emolliente'),
(76, 25, 'adoucissante'),
(77, 25, 'pectoral'),
(78, 25, 'anti-inflammatoire'),
(79, 26, 'anticoagulante'),
(80, 26, 'diuretique'),
(81, 26, 'antispasmodique'),
(82, 26, 'calmante'),
(83, 27, 'digestive'),
(84, 27, 'choleretique'),
(85, 27, 'antispasmodique'),
(86, 27, 'sedative'),
(87, 28, 'digestive'),
(88, 28, 'antispasmodique'),
(89, 28, 'tonique veineux'),
(90, 28, 'emolliente'),
(91, 29, 'antidepresseur'),
(92, 29, 'antiseptique'),
(93, 29, 'astrigente'),
(94, 29, 'cicatrisante'),
(95, 30, 'tonique veineux'),
(96, 30, 'antihemorragique'),
(97, 30, 'anti-inflammatoire'),
(98, 30, 'cicatrisante'),
(99, 31, 'hypotensive'),
(100, 31, 'hypoglycemisant'),
(101, 31, 'anticholesterol'),
(102, 32, 'digestive'),
(103, 32, 'antitussive'),
(104, 32, 'tonique veineux'),
(105, 32, 'emmenagogue'),
(106, 33, 'tonique'),
(107, 33, 'diuretique'),
(108, 33, 'hemostatique'),
(109, 33, 'depurative'),
(110, 34, 'desinfectante'),
(111, 34, 'antitussive'),
(112, 34, 'cicatrisante'),
(113, 35, 'diuretique'),
(114, 35, 'drainante'),
(115, 35, 'digestive'),
(116, 35, 'depurative'),
(117, 36, 'adoucissante'),
(118, 36, 'astrigente'),
(119, 36, 'cicatrisante'),
(120, 36, 'antiallergique'),
(121, 37, 'reminerallisante'),
(122, 37, 'cicatrisante'),
(123, 37, 'drainante'),
(124, 37, 'hemostatique'),
(125, 38, 'pectoral'),
(126, 38, 'fludifante'),
(127, 38, 'decongestionnante'),
(128, 39, 'anti-inflammatoire'),
(129, 39, 'febrifuge'),
(130, 39, 'anti-infectueux'),
(131, 39, 'drainante'),
(132, 40, 'cicatrisante'),
(133, 40, 'astrigente'),
(134, 40, 'anti-inflammatoire'),
(135, 40, 'antirhumatismal'),
(136, 41, 'astrigente'),
(137, 41, 'antidiarhetique'),
(138, 41, 'depurative'),
(139, 41, 'adoucissante'),
(140, 42, 'exporante'),
(141, 42, 'diuretique'),
(142, 42, 'depurative'),
(143, 42, 'tonique'),
(144, 43, 'antivirale'),
(145, 43, 'antibacterienne'),
(146, 43, 'fongicide'),
(147, 43, 'carminatif'),
(148, 44, 'tonique'),
(149, 44, 'antispasmodique'),
(150, 44, 'antiseptique');

-- --------------------------------------------------------

--
-- Structure de la table `plantes`
--

DROP TABLE IF EXISTS `plantes`;
CREATE TABLE IF NOT EXISTS `plantes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `effet` text,
  `prepa` text,
  `espece` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plantes`
--

INSERT INTO `plantes` (`id`, `nom`, `effet`, `prepa`, `espece`) VALUES
(1, 'Achillée', 'Decongestionnante, Anti-inflammatoire, Cicatrisante, Astrigente, Tisane', 'Tisane', 'Herbacée'),
(2, 'Aigremoine', 'anti inflammatoiren protection du foie, Hypotensive', 'Tisane, Teinte mere, Huile', 'Herbacée'),
(3, 'Armoise', 'antispasmodique, Antiseptique Urinisaire', 'Tisane', 'Herbacée'),
(4, 'aubepine', 'Cardiotonique , Regulatrice de la tension Arterielle, Astrigente, Calmante', 'Tisane', 'Arbustes'),
(5, 'bardane', 'depurative puissante, Stimulant Hepatique, Cicatrisante, Diuretique', 'Tisane', 'Herbacée'),
(6, 'bouillon blanc', 'calmant, Cicatrisant, Anti-infectueux', 'Tisane, Teinte mere', 'Herbacée'),
(7, 'bourrache', 'diuretique, Sudirifique, Antitusive, Drainante', 'Tisane', 'Herbacée'),
(8, 'bourse a pasteur', 'Hémostatique, Astrigente; Vasocontricteur, Cicatrisant', 'Decoction, Teinte mere , Sirop', 'Herbacée'),
(9, 'bruyeres', 'diuretique, Depuratif, Sedatif', 'Tisane', 'Arbrisseaux et aromatiques'),
(10, 'capucine', 'Antispasmodique, Antibacterienne, Antiviriale, Tonifiant', 'Teinture mere', 'Herbacée'),
(11, 'chardon marie', 'Hepatoprotecteur, TOnique veineux, Hpertenseur, Antioxydant', 'Decoction', 'Herbacée'),
(12, 'chicorée', 'Aperitive, Diuretique , Laxatique', 'Tisane', 'Herbacée'),
(13, 'coquelicot', 'Antirides, Antitussif, Sedatif, Adoucissant', 'Tisane, Teinte mere, Sirop', 'Herbacée'),
(14, 'cypres', 'Astrigente, Vasoconstrique, Decongestionnant prostatique, Antitussif', 'Tisane,Teinte mere', 'Arbres'),
(15, 'eglantier', 'Astrigent, Stimulant, ANti-inflammatoire, Antifatigue', 'Tisane, Teinte mere', 'Arbustes'),
(16, 'eschscholtzia', 'Hypnotique, Calmant, Antistress, Analgesique', 'Tisane, Macerat', 'Herbacée'),
(17, 'fenouil', 'Digestif, Diuretique, Galactogene', 'Tisane, Teinte mere', 'Herbacée'),
(18, 'figuier', 'Calmant, Antitussif, Cicatrisant, Verrucide', 'Tisane, Macerat', 'Arbres'),
(19, 'frêne élevé', 'Diuretique, Laxatif, Antirhumatismal', 'Tisane, Teinte mere', 'Arbres'),
(20, 'genevrier commun', 'Diuretique, Antirhumatismal, Antiseptique, Depurative', 'Tisane, Teinte mere, Vin', 'Arbustes'),
(21, 'laurier noble', 'Digestif, Antirhumatismal,Anti-inflammatoire, Emmenagogue', 'Tisane, Teinte mere, Huile', 'Arbustes'),
(22, 'lavande', 'Antalgique, Desinfectante, Antispasmodique, Antipoux', 'Tisane, Teinte mere, Huile', 'Herbacée'),
(23, 'lierre terrestre', 'Pectoral, Astrigente, Cicatrisante, Antiseptique', 'Tisane, Teinte mere, Huile', 'Herbacée'),
(24, 'marrionnier', 'Anti-inflammatoire, Vasoconstricteur, Analgesique, Antitussif', 'macerat', 'Arbres'),
(25, 'mauves', 'Emolliente, Adoucissante, Pectoral , Anti-Inflammatoire', 'Tisane', 'Herbacée'),
(26, 'melilot officinal', 'Anticoagulant, Diuretique, Antispasmodique, Calmant', 'Tisane, Teinte mere', 'Herbacée'),
(27, 'melisse officinale', 'Digestif, Choleretique, Antispasmodique, Sedatif', 'Tisane, Teinte mere', 'Herbacée'),
(28, 'menthes', 'Digestif, Antispasmoque, Tonique, Emolient', 'Tisane, Teinte mere', 'Herbacée'),
(29, 'millepertuis', 'Antidepresseur, Antideptique, Astrigente, Cicatrisant', 'huile de maceration', 'Herbacée'),
(30, 'noisetier', 'Tonique veineux, Antihemrragique, Anti-inflammatoire, Cicatrisant', 'Poudre, Tisane', 'Arbustes'),
(31, 'olivier', 'Hypotenif, Hypoglycémisant, Anticholesterol', 'Tisane', 'Arbres'),
(32, 'origan', 'Digestif, Antitusif, Tonique, Emmenagogue', 'Tisane', 'Arbrisseaux et aromatiques'),
(33, 'ortie', 'Tonique, Diuretique, Hemostatique, Deprutative  ', 'Tisane', 'Herbacée'),
(34, 'paquerette', 'Desinfectante, Antitussive, CIcatrisante', 'Tisane', 'Herbacée'),
(35, 'pissenlit', 'Diuretique, Drainant, Digestif, Depuratif', 'Tisane', 'Herbacée'),
(36, 'plantain majeur', 'Adoucissant, Astrigentte, Cicatrisante, Anti-allergique', 'Sec ou Teinte mere', 'Herbacée'),
(37, 'prele des champs', 'Reminerallisante, CIcatrisante , Drainante, Hemostatique', 'Poudre ', 'Herbacée'),
(38, 'primeveres officinale', 'Pectoral, Fludifiant, Decongestionnant', 'Tisane , Teinte mere, Huile', 'Sirop'),
(39, 'reine des prés', 'Anti inflammatoire, Fegrifue, Anti-infectueux, Drainante', 'Tisane , Teinte mere', 'Herbacée'),
(40, 'romarin', 'Cicatrisant, Astrigente, Anti-inflammatoire, Antirhumatinal', 'Tisane , Teinte mere, Vin', 'Arbrisseaux et aromatiques'),
(41, 'ronce', 'Astrigente, Antidiarhetique, Depurif, Adoussissante', 'Tisane , Sirop, Macerat', 'Arbustes'),
(42, 'saponaire', 'Exporante , Diuretique, Depurative, Tonique', 'Tisane , Cataplasme', 'Herbacée'),
(43, 'sarriette des montagnes', 'Antivirale, Antibacterienne, Fongicide, Carminatif', 'Tisane , Vin', 'Arbrisseaux et aromatiques'),
(44, 'sauge officinale', 'Tonique, Digestive, Antiseptique', 'Tisane , Teinte mere, Vin', 'Arbrisseaux et aromatiques'),
(45, 'serpolet', 'Tonique, Antispasmodique, ANtiseptique des voies respiratoires, Antitusif', 'Tisane ', 'Arbrisseaux et aromatiques'),
(46, 'souci officinal', 'Adoucissant, Cicatrisant, Antiseptique, Emmenagogue', 'Tisane , Teinte mere, Huile', 'Herbacée'),
(47, 'sureau noir', 'Diuretique, Sudorifique, Adoucissant, Depurative', 'Teinte mere, Vin', 'Arbres'),
(48, 'thym commun', 'Antiseptique, Antitussif, TOnique, Decontractant musculaire', 'Tisane , Sirop', 'Arbrisseaux et aromatiques'),
(49, 'tilleul ', 'Seducive, Choleretique, Antispasmodique, Drainante', 'Tisane , Macerat', 'Arbres'),
(50, 'verveine officinale', 'Digestif, Analgesique, Antirhumatismal, Aphrodisiaque', 'Tisane , Vin', 'Arbres'),
(51, 'vigne rouge', 'Tonique veineux, Astrigente, Anti-inflammatoire, Depurative', 'Tisane, Teinte mere, Macerat', 'Arbustes');

-- --------------------------------------------------------

--
-- Structure de la table `prepa`
--

DROP TABLE IF EXISTS `prepa`;
CREATE TABLE IF NOT EXISTS `prepa` (
  `id` int(2) DEFAULT NULL,
  `id_plante` int(2) DEFAULT NULL,
  `prepa` varchar(19) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prepa`
--

INSERT INTO `prepa` (`id`, `id_plante`, `prepa`) VALUES
(1, 1, 'tisane'),
(2, 2, 'tisane'),
(3, 2, 'teinte mere'),
(4, 2, 'huile'),
(5, 3, 'tisane'),
(6, 4, 'tisane'),
(7, 5, 'tisane'),
(8, 6, 'tisane'),
(9, 6, 'teinte mere'),
(10, 7, 'tisane'),
(11, 8, 'decoction'),
(12, 8, 'teinte mere'),
(13, 8, 'sirop'),
(14, 9, 'tisane'),
(15, 10, 'teinte mere'),
(16, 11, 'decoction'),
(17, 12, 'tisane'),
(18, 13, 'tisane'),
(19, 13, 'teinte mere'),
(20, 13, 'sirop'),
(21, 14, 'tisane'),
(22, 14, 'teinte mere'),
(23, 15, 'tisane'),
(24, 15, 'teinte mere'),
(25, 16, 'tisane'),
(26, 16, 'ùacreation'),
(27, 17, 'tisane'),
(28, 17, 'teinte mere'),
(29, 20, 'tisane'),
(30, 20, 'teinte mere'),
(31, 20, 'vin'),
(32, 21, 'tisane'),
(33, 21, 'teinte mere'),
(34, 21, 'huile'),
(35, 22, 'tisane'),
(36, 22, 'teinte mere'),
(37, 22, 'huile'),
(38, 23, 'tisane'),
(39, 23, 'teinte mere'),
(40, 23, 'huile'),
(41, 24, 'macerat'),
(42, 25, 'tisane'),
(43, 26, 'tisane'),
(44, 26, 'teinte mere'),
(45, 27, 'tisane'),
(46, 27, 'teinte mere'),
(47, 28, 'tisane'),
(48, 28, 'teinte mere'),
(49, 29, 'huile de maceration'),
(50, 30, 'poudre'),
(51, 30, 'tisane'),
(52, 31, 'tisane'),
(53, 32, 'tisane'),
(54, 33, 'tisane'),
(55, 34, 'tisane'),
(56, 35, 'tisane'),
(57, 36, 'sec'),
(58, 36, 'teinte mere'),
(59, 37, 'poudre'),
(60, 38, 'tisane'),
(61, 38, 'teinte mere'),
(62, 38, 'huile'),
(63, 39, 'tisane'),
(64, 39, 'teinte mere'),
(65, 40, 'tisane'),
(66, 40, 'teinte mere'),
(67, 40, 'vin'),
(68, 41, 'tisane'),
(69, 41, 'sirop'),
(70, 41, 'macerat'),
(71, 42, 'tisane'),
(72, 42, 'cataplasme'),
(73, 43, 'tisane'),
(74, 43, 'vin'),
(75, 44, 'tisane'),
(76, 44, 'teinte mere'),
(77, 44, 'vin'),
(78, 45, 'tisane'),
(79, 46, 'tisane'),
(80, 46, 'teinte mere'),
(81, 46, 'huile'),
(82, 47, 'teinte mere'),
(83, 47, 'vin'),
(84, 48, 'tisane'),
(85, 48, 'sirop'),
(86, 49, 'tisane'),
(87, 49, 'macerat'),
(88, 50, 'tisane'),
(89, 50, 'vin'),
(90, 51, 'tisane'),
(91, 51, 'teinte mere'),
(92, 51, 'macerat');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `mail` text NOT NULL,
  `password` longtext NOT NULL,
  `score` int(200) DEFAULT NULL,
  `img` tinytext,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user`, `mail`, `password`, `score`, `img`, `date`) VALUES
(1, 'Aaa', 'minimal.specialiste@outlook.com', '$2y$10$QSDwHymbAAt/tpTViLWIDOKhJbg68Y257q9B2.JG8HueNczQ5x84O', 100, '0', '2019-09-30 22:00:00'),
(2, 'Coucoy', 'raj.specialiste@outlook.com', '$2y$10$k8wDqZ0vtAbLOIZ9Fd0fNOHmmkdw9Bl3NyFFXEWfl4yBHX86hdQDC', 0, '0', '2019-10-05 19:01:02'),
(3, 'Skully', 'corine.specialiste@outlook.com', '$2y$10$FVNgztAIDmGD8j/Pf4LLt.ARWO.PrXHcSgsPQjbphrr668KOk7zeW', 0, '0', '2019-10-05 19:06:05'),
(5, 'Mickael', 'mickael.specialiste@outlook.com', '$2y$10$pAt90ZuVxT.Ra7DFsHiTteg4GgaDBgczK31/39TZV1dag91Q7Cz8K', 0, '0', '2019-10-05 19:06:05'),
(6, 'Forteroche', 'roche.specialiste@outlook.com', '$2y$10$G4Yzr/vyikFiEUGQl6AmRuyeBnwbjR0VYsdirDPS7ugxUhne.hWqi', 0, '0', '2019-10-05 19:06:05'),
(7, 'Noumea', 'noums.specialiste@outlook.com', '$2y$10$NEpGrZngvC3DBAZJ3VzUOOgLtun7loix1Ou0M2qsM1H3X3dR9U236', 0, '0', '2019-10-05 19:06:05'),
(8, 'Shelter', 'shelter.specialiste@outlook.com', '$2y$10$qsplVm0/4gS7JuDawkGiUuzsMIAJHl1StqA9O4kb9Xrgkv46.jVAK', 0, '0', '2019-10-05 19:06:05'),
(9, 'Charline', 'chat.specialiste@outlook.com', '$2y$10$oHtSz1IoblH1v6eNpqqS6O498jCEBMt2fLDRuhCFMkdZvY.u9dF7a', 0, '5d7f38bc01fa08.59128803.jpg', '2019-10-05 19:06:05'),
(13, 'mick', 'audric.speciasliste@outlook.com', '$2y$10$4RsTtYkct88b.L73F6oT/.D6qDIIpLKsuAOkXo966qyxlQigofaBG', 0, '', '2019-10-05 19:06:05'),
(18, 'agnesl', 'lorroase@ouze.com', '$2y$10$rZRBSrWiuD8X89E6CM1ec.y7Rd7CiELQdeBa/Zk96NXGofnGQnhSq', 0, '0', '2019-10-05 19:06:05'),
(29, 'Audric', 'audric.specialiste@outlook.com', '$2y$10$FriYLqPMXgCOaycMbOf8KO3HcimbUwbvtSi5oAKYLobpC0G.yx1Jq', 16600, '5d925535dcf6c1.24515738.jpg', '2019-10-05 19:06:05'),
(61, 'forterocheaz', 'audric.speazcialiste@outlook.com', '$2y$10$Jb1aA7WtSjA12Wfr4svaAO2QuPR8PLIyA6WowgarVgss0ZAhtfTx6', 0, '5d96e064196a77.42941279.png', '2019-10-05 19:06:05'),
(57, 'auaadric', 'aaaaaaa@kijj.com', '$2y$10$LKkd5DxSJxo.6PQjqa71VusQuslcPtrUUHlTkQVvyMNwxpX7htd0W', 0, '0', '2019-10-05 19:06:05'),
(58, 'audricsss', 'audric.spsssecialiste@outlook.com', '$2y$10$r2a.ot909AINKi8Uy1OdPuoLA0H.wADawonPZzR/yaMLJjn9XALaK', 0, '0', '2019-10-05 19:06:05'),
(55, 'audricqq', 'audric.speqqcialiste@outlook.com', '$2y$10$BTIle2rHshK0hFXUQyokAeK5i8QduTFr.BMHg1s/lMrNqKiV09.Km', 0, '0', '2019-10-05 19:06:05'),
(59, 'SSS', 'la@ouze.com', '$2y$10$yXu7JliryfAoGGpUWXRp.e.J6/eKXsUH97fJDFAkDphqcLHKs4eeG', 0, '0', '2019-10-05 19:06:05'),
(60, 'Landry', 'landry@gmail.com', '$2y$10$GoXmlx7QvuzhaQq7WVzs7uyGm/RGgjz2jXbSPRdANrG2vBkkmoJ4q', 0, '0', '2019-10-05 19:06:05'),
(62, 'Lilian', 'lilian@gmail.com', '$2y$10$f2ecAEl76xD17pQyWuducuFDOwxqRAdA.YAea859034OGuqQNoIbu', 300, '0', '2019-10-05 19:06:05'),
(63, 'christophe', 'audric.spelilicialiste@outlook.com', '$2y$10$JO2e/hz.2NnoGbNAKSAWo.cWFr7XXj0eAg6Yv6yHoKNWhPu9w/HhK', 300, '5d974c1ae99d20.41796959.jpg', '2019-10-05 19:06:05'),
(64, 'Claude', 'audric.forterocher@outlook.com', '$2y$10$6FFKfAG15D3pTqvKwSLmdezOPnDvQi3SqVGGHZAG9Y7lRW5n.ZfLS', 400, '5d98503ac56099.55318769.png', '2019-10-05 19:06:05'),
(65, 'fortezzzroche', 'qzaze@zeoize.com', '$2y$10$PEdyHfkqit/Wfl7E3NIm7.WvLR.O4Vzole4QXS1yTfAoSgBHkjoyq', 0, '0', '2019-10-05 19:09:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
