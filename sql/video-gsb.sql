-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 06 Mars 2016 à 15:06
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `video-gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `libelle`) VALUES
(1, 'irm'),
(2, 'materiels_lourds'),
(3, 'materiel_medical_domicile'),
(4, 'nettoyant');

-- --------------------------------------------------------

--
-- Structure de la table `type_utilisateur`
--

DROP TABLE IF EXISTS `type_utilisateur`;
CREATE TABLE IF NOT EXISTS `type_utilisateur` (
  `id_type_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` text NOT NULL,
  PRIMARY KEY (`id_type_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_utilisateur`
--

INSERT INTO `type_utilisateur` (`id_type_utilisateur`, `libelle`) VALUES
(1, 'administrateur'),
(2, 'super_utilisateur'),
(3, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_utilisateur` int(11) DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `prenom` varchar(35) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_de_naissance` date DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `id_type_utilisateur` (`id_type_utilisateur`),
  KEY `id_type_utilisateur_2` (`id_type_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `id_type_utilisateur`, `login`, `prenom`, `nom`, `password`, `email`, `date_de_naissance`) VALUES
(42, 1, 'louis', 'louis', 'bordes', '329ebdecdbfee008e9e727557b6b639907d786dd', 'louis@gmail.com', '1994-08-20'),
(43, 2, 'lea', 'lea', 'clem', '329ebdecdbfee008e9e727557b6b639907d786dd', 'lea@gmail.com', '1995-08-28'),
(44, 3, 'mathias', 'mathias', 'dieudo', '329ebdecdbfee008e9e727557b6b639907d786dd', 'mathias@gmail.com', '1991-09-27'),
(45, 3, 'XkioA', 'Roberto', 'Haiun', '329ebdecdbfee008e9e727557b6b639907d786dd', 'roberto@gmail.com', '1990-05-04'),
(46, NULL, 'GeorgeAze', 'George', 'Aze', '329ebdecdbfee008e9e727557b6b639907d786dd', 'george.aze@gmail.com', '1997-06-21');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `id_genre` int(11) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `titre` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `video` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `id_genre` (`id_genre`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id_video`, `id_genre`, `id_utilisateur`, `titre`, `description`, `video`, `date`) VALUES
(77, NULL, NULL, 'test 1', 'test 2 : blablabla', 'materiel-medical-drap-dexamen.mp4', '2016-03-06'),
(78, NULL, NULL, 'test 1', 'test 2 : blablabla', 'materiel-medical-drap-dexamen.mp4', '2016-03-06'),
(79, NULL, NULL, 'test 1', 'test 2 : blablabla', 'materiel-medical-drap-dexamen.mp4', '2016-03-06'),
(80, NULL, NULL, 'test 1', 'test 2 : blablabla', 'video_remise_materiel_medical.mp4', '2016-03-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
