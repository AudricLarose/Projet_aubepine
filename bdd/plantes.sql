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
-- Structure de la table `plantes`
--

DROP TABLE IF EXISTS `plantes`;
CREATE TABLE IF NOT EXISTS `plantes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `effet_1` text NOT NULL,
  `effet_2` text NOT NULL,
  `effet_3` text NOT NULL,
  `effet_4` text NOT NULL,
  `prepa_1` text NOT NULL,
  `prepa_2` text NOT NULL,
  `prepa_3` text NOT NULL,
  `espece` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plantes`
--

INSERT INTO `plantes` (`id`, `nom`, `effet_1`, `effet_2`, `effet_3`, `effet_4`, `prepa_1`, `prepa_2`, `prepa_3`, `espece`) VALUES
(1, 'Achillée', 'decongestionnante', 'anti inflammatoire', 'cicartrisante', 'astrigente', 'Tisane', '', '', 'Herbacée'),
(2, 'Aigremoine', 'anti inflammatoire', 'Protectire du foie', 'hypotensive', '', 'Tisane', 'Teinte mere', 'huile', 'Herbacée'),
(3, 'Armoise', 'antispasmodique', 'antiseptique urinaire', 'emmenagogue', 'Vermifuge', 'Tisane', '', '', 'Herbacée'),
(4, 'aubepine', 'Cardiotonique ', 'regulatrice de la tension arterielle', 'astrigente', 'calmante', 'Tisane', '', '', 'Arbustes'),
(5, 'bardane', 'depurative puissante', 'stimulant hepatique', 'cicatrisante', 'diuretique', 'Tisane', '', '', 'Herbacée'),
(6, 'bouillon blanc', 'calmant', 'cicatrisant', 'anti-infectieux', '', 'Tisane', 'Teinte mere', '', 'Herbacée'),
(7, 'bourrache', 'diuretique', 'sudorifique', 'antitussive', 'drainante', 'Tisane', '', '', 'Herbacée'),
(8, 'bourse a pasteur', 'Hémostatique', 'astrigente', 'vasoconstricteur', 'cicatrisant', 'Decoction', 'Teinte mere', 'sirop', 'Herbacée'),
(9, 'bruyeres', 'diuretique', 'antiseptique ', 'depuratif', 'sedatif', 'Tisane', '', '', 'Arbrisseaux et aromatiques'),
(10, 'capucine', 'antispasmodique', 'antibacterienne', 'antivirale', 'tonifiant', 'Teinture mere', '', '', 'Herbacée'),
(11, 'chardon marie', 'Hepatoprotecteur', 'tonique veinux', 'hypertenseur', 'antioxydant', 'Decoction', '', '', 'Herbacée'),
(12, 'chicorée', 'aperitive', 'diuretique', 'laxative', 'depurative', 'Tisane', '', '', 'Herbacée'),
(13, 'coquelicot', 'antirides', 'antitussif', 'sedatif', 'adoucissant', 'Tisane', 'Teinte mere', 'sirop', 'Herbacée'),
(14, 'cypres', 'astrigent', 'vasoconstricteur', 'decongestionnant prostatique', 'antitussif', 'Tisane', 'Teinte mere', '', 'Arbres'),
(15, 'eglantier', 'astrigent', 'stimulant ', 'anti-inflammatoire', 'antifatigue', 'Tisane', 'Teinte mere', '', 'Arbustes'),
(16, 'eschscholtzia', 'Hypnotique', 'calmant', 'antistress', 'analgesique', 'Tisane', 'maceration', '', 'Herbacée'),
(17, 'fenouil', 'Digestif', 'diuretique', 'galactogene', '', 'Tisane', 'Teinte mere', '', 'Herbacée'),
(18, 'figuier', 'calmant', 'antitussif', 'cicatrisante', 'verrucide', 'Tisane', 'maceration', '', 'Arbres'),
(19, 'frêne élevé', 'diuretique', 'laxatif', 'antirhumatismal', '', 'Tisane', 'Teinte mere', '', 'Arbres'),
(20, 'genevrier commun', 'diuretique', 'antirhumatismal', 'antiseptique', 'depurative', 'Tisane', 'Teinte mere', 'Vin', 'Arbustes'),
(21, 'laurier noble', 'digestif', 'antirhumatismal', 'anti inflammatoire', 'emmenagogue', 'Tisane', 'Teinte mere', 'huile', 'Arbustes'),
(22, 'lavande', 'antalgique', 'desinfectante', 'antispasmodique', 'antipoux', 'Tisane', 'Teinte mere', 'huile', 'Herbacée'),
(23, 'lierre terrestre', 'pectoral', 'astrigente', 'cicatrisante', 'antiseptique', 'Tisane', 'Teinte mere', 'huile', 'Herbacée'),
(24, 'marrionnier d\'inde', 'anti inflammatoire', 'vasoconstricteur', 'analgesique', 'antitussif', 'macerat', '', '', 'Arbres'),
(25, 'mauves', 'emolliente', 'adoucissante', 'pectoral', 'anti inflammatoire', 'Tisane', '', '', 'Herbacée'),
(26, 'melilot officinal', 'anticoagulant', 'diuretique', 'antispasmodique', 'calmante', 'Tisane', 'Teinte mere', '', 'Herbacée'),
(27, 'melisse officinale', 'Digestif', 'choleretique', 'antispasmodique', 'sedatif', 'Tisane', 'Teinte mere', '', 'Herbacée'),
(28, 'menthes', 'Digestif', 'antispasmodique', 'tonique', 'emolient', 'Tisane', 'Teinte mere', '', 'Herbacée'),
(29, 'millepertuis', 'antidepresseur', 'antiseptique', 'astrigente', 'cicatrisant', 'huile de maceration', '', '', 'Herbacée'),
(30, 'noisetier', 'tonique veineux', 'antihemorragique', 'anti-inflammatoire', 'cicatrisant', 'Poudre', 'Tisane', '', 'Arbustes'),
(31, 'olivier', 'hypotenif', 'hypoglycemisant', 'anticholesterol', '', 'Tisane', '', '', 'Arbres'),
(32, 'origan', 'Digestif', 'antitusif', 'tonique', 'emmenagogue', 'Tisane', '', '', 'Arbrisseaux et aromatiques'),
(33, 'ortie', 'tonique  ', 'diuretique', 'hemostatique', 'depurative', 'Tisane', '', '', 'Herbacée'),
(34, 'paquerette', 'desinfectante', 'antitussive', 'cicatrisante', '', 'Tisane', '', '', 'Herbacée'),
(35, 'pissenlit', 'diuretique', 'draiant', 'digestif', 'depuratif', 'Tisane', '', '', 'Herbacée'),
(36, 'plantain majeur', 'adoucissant', 'astrigente', 'cicatrisante', 'antiallergique', 'sec', 'Teinte mere', '', 'Herbacée'),
(37, 'prele des champs', 'reminerallisante', 'cicatrisant', 'drainant', 'hemostatiqe', 'Poudre ', '', '', 'Herbacée'),
(38, 'primeveres officinale', 'pectoral', 'fludifiant', 'decongestionnant  ', '', 'Tisane ', 'Teinte mere', 'huile', 'Sirop'),
(39, 'reine des prés', 'anti inflammatoire', 'febrifuge', 'anti-infectieux', 'drainante', 'Tisane ', 'Teinte mere', '', 'Herbacée'),
(40, 'romarin', 'cicatrisant', 'astrigente', 'ani-inflammatoire', 'antirhumatinal', 'Tisane ', 'Teinte mere', 'Vin', 'Arbrisseaux et aromatiques'),
(41, 'ronce', 'astrigent', 'antidiarhetique', 'depuratif', 'adoucissant', 'Tisane ', 'Sirop', 'Macerat', 'Arbustes'),
(42, 'saponaire', 'exporante ', 'diuretique', 'depuratif', 'tonique', 'Tisane ', 'Cataplasme', '', 'Herbacée'),
(43, 'sarriette des montagnes', 'antivirale', 'antibacterienne', 'fongicide', 'carminatif', 'Tisane ', 'Vin', '', 'Arbrisseaux et aromatiques'),
(44, 'sauge officinale', 'tonique', 'digestive', 'antiseptique', '', 'Tisane ', 'Teinte mere', 'Vin', 'Arbrisseaux et aromatiques'),
(45, 'serpolet', 'tonique', 'antispasmodique', 'antiseptique des voies respiratoires', 'antitusif', 'Tisane ', '', '', 'Arbrisseaux et aromatiques'),
(46, 'souci officinal', 'adoucissant', 'cicatrisant', 'antiseptique', 'emmenagogue', 'Tisane ', 'Teinte mere', 'huile', 'Herbacée'),
(47, 'sureau boir', 'diuretique', 'sudorifique', 'adoucissant', 'depuratif', 'Teinte mere', 'Vin', '', 'Arbres'),
(48, 'thym commun', 'antiseptique', 'antitussif', 'tonique', 'decontractant musculaire', 'Tisane ', 'Sirop', '', 'Arbrisseaux et aromatiques'),
(49, 'tilleul d\'europe', 'seducif', 'choleretique', 'antispasmodique', 'drainante', 'Tisane ', 'maceration', '', 'Arbres'),
(50, 'verveine officinale', 'Digestif', 'analgesique', 'antirhumatismal', 'aphrodisiaque', 'Tisane ', 'Vin', '', 'Arbres'),
(51, 'vigne rouge', 'tonique veineux', 'astrigente', 'anti-inflammatoire', 'depurative', 'Tisane ', 'Teinte mere', 'Macerat', 'Arbustes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
