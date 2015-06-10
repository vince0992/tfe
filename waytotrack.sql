-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 09 Juin 2015 à 16:45
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `waytotrack`
--

-- --------------------------------------------------------

--
-- Structure de la table `Events`
--

CREATE TABLE `Events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ville` varchar(50) NOT NULL,
  `date_moment` date NOT NULL,
  `heure` time NOT NULL,
  `payant` varchar(50) NOT NULL,
  `prix` smallint(6) NOT NULL,
  `discipline` varchar(20) NOT NULL,
  `photo_cover` text NOT NULL,
  `createur` varchar(50) NOT NULL,
  `distance` smallint(6) NOT NULL,
  `denivele` mediumint(9) NOT NULL,
  `vmoy` tinyint(4) NOT NULL,
  `duree` time NOT NULL,
  `ravitos` varchar(15) NOT NULL,
  `ravitokm` varchar(30) NOT NULL,
  `douches` varchar(50) NOT NULL,
  `bikewash` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Contenu de la table `Events`
--

INSERT INTO `Events` (`id`, `ville`, `date_moment`, `heure`, `payant`, `prix`, `discipline`, `photo_cover`, `createur`, `distance`, `denivele`, `vmoy`, `duree`, `ravitos`, `ravitokm`, `douches`, `bikewash`, `adresse`, `description`, `photo_description`) VALUES
(85, 'test compil', '2014-12-30', '23:59:00', '', 0, 'Enduro', '143359867910522154_806018982782079_8823648283265069300_n.jpg', '', 7, 77, 77, '22:58:00', '', '', '', '', 'Rue du test 16', 'lol', 'photo_description'),
(86, 'SpontinBeach', '2017-08-07', '04:04:00', '', 0, 'Enduro', '1433780550IMAG0218.jpg', '', 7, 77, 77, '21:57:00', '', '', '', '', 'Rue du test 16', 'Cool', 'photo_description'),
(87, 'Courrière', '2015-06-09', '08:12:00', '', 0, 'Enduro', '1433791159Photo du 74103566-01- à 20.35.jpg', '', 7, 8, 45, '18:50:00', '', '', '', '', 'Sart Mathelet 2C', 'Chouette sortie', 'photo_description'),
(88, 'Yvoir', '2015-07-11', '08:00:00', '', 0, 'Randonnée', '1433793720DSCN1347.JPG', '', 50, 1250, 17, '04:19:00', '', '', '', '', 'Rue du Maka', 'Très beau parcours', 'photo_description'),
(92, 'Namur', '2015-06-09', '15:30:00', 'on', 5, 'Randonnée vtt', '1433845049DSCN1340.JPG', '', 10, 8, 12, '02:30:00', '', '', 'on', 'on', 'Citadelle', 'Roulant', 'photo_description'),
(93, 'Andenne', '2015-05-06', '00:00:00', 'on', 4, 'Randonnée route', '1433853788IMAG2055.jpg', '', 30, 20, 20, '02:30:00', '', '20-45-57', 'on', 'on', 'Rue Bidon', 'BOUEUX', 'photo_description'),
(96, 'Wavre', '2015-07-19', '09:00:00', 'on', 5, 'Randonnée vtt', '1433860079DSC01417.JPG', '', 50, 1340, 18, '04:10:00', '', '15-30', 'on', 'on', 'Rue du centre 18', 'Balade à travers champs', 'photo_description');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `password`, `photo_user`) VALUES
(1, 'Vincent', 'vincent290992@hotmail.com', '0a422a034726e46689c575bbc85a017e', ''),
(2, 'Amandine', 'amandi-ine@hotmail.com', '84b21067a575fe211401f201630d68f8', ''),
(4, 'Vince', 'vincent290992@hotmail.com', '0a422a034726e46689c575bbc85a017e', ''),
(5, 'Voiture', 'voiture', '91300bd07a082533783b9a92ce70a916', ''),
(6, 'Camion', 'Camion', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(8, 'Chili', 'Chili', '2ffc1c0f8555497f891d90a42bd34e84', '');
