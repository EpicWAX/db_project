-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 jan. 2018 à 09:57
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `datagouv`
--

-- --------------------------------------------------------

--
-- Structure de la table `accords`
--

DROP TABLE IF EXISTS `accords`;
CREATE TABLE IF NOT EXISTS `accords` (
  `id` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_food`),
  KEY `FK_accords_id_food` (`id_food`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `accords`
--

INSERT INTO `accords` (`id`, `id_food`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 7),
(33, 7),
(34, 7),
(35, 7),
(36, 7),
(37, 8),
(38, 8),
(39, 8),
(40, 8),
(41, 8),
(42, 9),
(43, 9),
(44, 9),
(45, 9),
(46, 9),
(47, 9),
(48, 10),
(49, 10),
(50, 10),
(51, 10),
(52, 11),
(53, 11),
(54, 11),
(55, 11),
(56, 11),
(57, 12),
(58, 12),
(59, 12),
(60, 12),
(61, 13),
(62, 13),
(63, 14),
(64, 15),
(65, 15),
(66, 15),
(67, 15),
(68, 15),
(69, 16),
(70, 16),
(71, 16),
(72, 17),
(73, 17),
(74, 17),
(75, 17),
(76, 18),
(77, 18),
(78, 19),
(79, 19),
(80, 19),
(81, 20),
(82, 20),
(83, 20),
(84, 21),
(85, 21),
(86, 22),
(87, 22),
(88, 22),
(89, 23),
(90, 23),
(91, 23),
(92, 24),
(93, 24),
(94, 25),
(95, 26),
(96, 26),
(97, 26),
(98, 27),
(99, 27),
(100, 27),
(101, 28),
(102, 28),
(103, 29),
(104, 29),
(105, 29),
(106, 29),
(107, 30),
(108, 30),
(109, 30);

-- --------------------------------------------------------

--
-- Structure de la table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `food_type` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `ingredients` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_type`, `ingredients`) VALUES
(1, 'Ris de veau à la maréchale', NULL, NULL),
(2, 'Coq au vin', NULL, NULL),
(3, 'Pizza', NULL, NULL),
(4, 'Pissaladière', NULL, NULL),
(5, 'Rôti de Veau', NULL, NULL),
(6, 'Rôti de Boeuf', NULL, NULL),
(7, 'Baeckeoffe', NULL, NULL),
(8, 'Oeuf sur le plat', NULL, NULL),
(9, '  Fondue savoyarde', NULL, NULL),
(10, 'Tarte aux Poires', NULL, NULL),
(11, 'Saint-Jacques et Foie gras poêlés', NULL, NULL),
(12, 'Sole meunière', NULL, NULL),
(13, 'Gigot d\'Agneau', NULL, NULL),
(14, 'Homard grillé au Beurre blanc', NULL, NULL),
(15, 'Maquereaux au Vin blanc', NULL, NULL),
(16, 'Lapin au cidre', NULL, NULL),
(17, 'Civet de Lapin', NULL, NULL),
(18, ' Foie gras aux Raisins', NULL, NULL),
(19, 'Tarte aux Abricots et Amandes', NULL, NULL),
(20, 'Cuisses de Poulet au Coca-Cola', NULL, NULL),
(21, 'Cailles au Raisins et Girolles', NULL, NULL),
(22, 'Bouquets (Crevettes roses)', NULL, NULL),
(23, 'Magret de Canard poêlé à l\'Ananas', NULL, NULL),
(24, 'Choucroute alsacienne', NULL, NULL),
(25, 'Huitres claires', NULL, NULL),
(26, 'Avocat au Crabe', NULL, NULL),
(27, 'Tarte Ratatouille aux Lardons', NULL, NULL),
(28, 'Poire au Chocolat et Amandes', NULL, NULL),
(29, 'Turbot grillé aux Asperges', NULL, NULL),
(30, 'Plateau de Fromages', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `wines`
--

DROP TABLE IF EXISTS `wines`;
CREATE TABLE IF NOT EXISTS `wines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wine_name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `wine_type` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `region` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `wines`
--

INSERT INTO `wines` (`id`, `wine_name`, `wine_type`, `region`) VALUES
(1, 'Chablis', NULL, NULL),
(2, 'Côte de Nuits', NULL, NULL),
(3, 'Mâcon', NULL, NULL),
(4, 'Bourgogne rouge', NULL, NULL),
(5, 'Côte de Beaune', NULL, NULL),
(6, 'Gevrey Chambertin', NULL, NULL),
(7, 'Chambertin', NULL, NULL),
(8, 'Coteaux Varois', NULL, NULL),
(9, 'Bardolino', NULL, NULL),
(10, ' Chiaretto', NULL, NULL),
(11, 'Chianti', NULL, NULL),
(12, 'Lambrusco', NULL, NULL),
(13, 'Listel', NULL, NULL),
(14, 'Blancs', NULL, NULL),
(15, ' Rosés', NULL, NULL),
(16, ' Côtes de Provence', NULL, NULL),
(17, ' Beaumes de Venise', NULL, NULL),
(18, 'Côtes de Castillon', NULL, NULL),
(19, ' Côtes de Bourg', NULL, NULL),
(20, 'Beaujolais', NULL, NULL),
(21, 'Savigny les Beaune', NULL, NULL),
(22, 'Vosne Romanée', NULL, NULL),
(23, 'Morgon', NULL, NULL),
(24, 'Côte du Rhône', NULL, NULL),
(25, ' Aloxe Corton', NULL, NULL),
(26, 'Pauillac', NULL, NULL),
(27, 'Châteauneuf du Pape', NULL, NULL),
(28, 'Santenay', NULL, NULL),
(29, 'Pommard', NULL, NULL),
(30, 'Saint-Emilion', NULL, NULL),
(31, ' Mercurey', NULL, NULL),
(32, 'Riesling', NULL, NULL),
(33, 'Pinot gris', NULL, NULL),
(34, 'Pinot Noir d\'Alsace', NULL, NULL),
(35, 'Gewurztraminer', NULL, NULL),
(36, 'Saint-Amour', NULL, NULL),
(37, 'Côtes du Rhône', NULL, NULL),
(38, 'Côtes du Roussillon Village', NULL, NULL),
(39, 'Collioure', NULL, NULL),
(40, 'Coteaux du Languedoc', NULL, NULL),
(41, ' Vins rosés', NULL, NULL),
(42, ' Roussette', NULL, NULL),
(43, 'Chignin', NULL, NULL),
(44, 'Mondeuse', NULL, NULL),
(45, 'Abymes', NULL, NULL),
(46, 'Apremont', NULL, NULL),
(47, ' Vins d Alsace', NULL, NULL),
(48, 'Champagne', NULL, NULL),
(49, 'Loupiac', NULL, NULL),
(50, 'Vouvray', NULL, NULL),
(51, 'Asti', NULL, NULL),
(52, ' Muscat', NULL, NULL),
(53, 'Pessac Léognan blanc', NULL, NULL),
(54, 'Châteauneuf du Pape blanc', NULL, NULL),
(55, 'Sauternes', NULL, NULL),
(56, ' Liebfraumilch', NULL, NULL),
(57, 'Pouilly Fuissé', NULL, NULL),
(58, 'Cheverny', NULL, NULL),
(59, 'Ménetou Salon', NULL, NULL),
(60, 'Meursault', NULL, NULL),
(61, ' Pessac Léognan', NULL, NULL),
(62, 'Gigondas', NULL, NULL),
(63, 'Muscat sec', NULL, NULL),
(64, ' Touraine', NULL, NULL),
(65, 'Saumur', NULL, NULL),
(66, 'Muscadet sur lie', NULL, NULL),
(67, 'Sauvignon', NULL, NULL),
(68, ' Gros Plant', NULL, NULL),
(69, 'Saumur-Champigny', NULL, NULL),
(70, ' Touraine rouge', NULL, NULL),
(71, 'Cidre brut', NULL, NULL),
(72, 'Côtes du Roussillon', NULL, NULL),
(73, 'Juliénas', NULL, NULL),
(74, 'Chinon', NULL, NULL),
(75, 'Côtes de Beaune', NULL, NULL),
(76, 'Gewurztraminer Vendanges tardives', NULL, NULL),
(77, 'Fronton', NULL, NULL),
(78, 'Muscat d\'Alsace', NULL, NULL),
(79, 'Champagne rosé', NULL, NULL),
(80, 'Asti spumante', NULL, NULL),
(81, 'Bergerac', NULL, NULL),
(82, 'Madiran', NULL, NULL),
(83, 'Cahors', NULL, NULL),
(84, 'Crozes Hermitage', NULL, NULL),
(85, 'Moulin à vent', NULL, NULL),
(86, 'Saumur blanc', NULL, NULL),
(87, 'Entre-deux-mers', NULL, NULL),
(88, 'Touraine Sauvignon', NULL, NULL),
(89, 'Picpoul de pinet', NULL, NULL),
(90, ' Côtes de Nuit', NULL, NULL),
(91, 'Rosé de Provence', NULL, NULL),
(92, ' Sylvaner', NULL, NULL),
(93, ' Pinot', NULL, NULL),
(94, 'Edelzwicker', NULL, NULL),
(95, 'Listel blanc', NULL, NULL),
(96, ' Pinot blanc d\'Alsace', NULL, NULL),
(97, 'Viognier', NULL, NULL),
(98, ' Rosés de Provence', NULL, NULL),
(99, 'Coteaux d\'Aix', NULL, NULL),
(100, 'Chinon rosé', NULL, NULL),
(101, ' Montbazillac', NULL, NULL),
(102, ' Poiré', NULL, NULL),
(103, 'cheverny', NULL, NULL),
(104, 'saumur-champigny', NULL, NULL),
(105, 'condrieu', NULL, NULL),
(106, 'meursault', NULL, NULL),
(107, 'Bourgogne', NULL, NULL),
(108, 'Beaune', NULL, NULL),
(109, ' Beaujolais village', NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accords`
--
ALTER TABLE `accords`
  ADD CONSTRAINT `FK_accords_id` FOREIGN KEY (`id`) REFERENCES `wines` (`id`),
  ADD CONSTRAINT `FK_accords_id_food` FOREIGN KEY (`id_food`) REFERENCES `food` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
