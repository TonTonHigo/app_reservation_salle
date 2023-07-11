-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 juil. 2023 à 10:53
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app_reservation`
--
CREATE DATABASE app_reservation;
USE app_reservation;
-- --------------------------------------------------------

--
-- Structure de la table `demande`
--


CREATE TABLE IF NOT EXISTS `demande` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_entree` date NOT NULL,
  `date_sortie` date NOT NULL,
  `numero_salle` int NOT NULL,
  PRIMARY KEY (`id_demande`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id_demande`, `nom`, `prenom`, `email`, `date_entree`, `date_sortie`, `numero_salle`) VALUES
(11, 'dain', 'hugo', 'hugo@gmail.com', '2023-07-12', '2023-07-13', 1);

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--


CREATE TABLE IF NOT EXISTS `salles` (
  `id_salles` int NOT NULL AUTO_INCREMENT,
  `numero` int NOT NULL,
  `date_entree` date NOT NULL,
  `date_sortie` date NOT NULL,
  `dispo` varchar(20) NOT NULL,
  `id_demande` int NOT NULL,
  PRIMARY KEY (`id_salles`),
  KEY `FK_demande` (`id_demande`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`id_salles`, `numero`, `date_entree`, `date_sortie`, `dispo`, `id_demande`) VALUES
(6, 1, '2023-07-12', '2023-07-13', 'indisponible', 0),
(7, 2, '0000-00-00', '0000-00-00', 'indisponible', 0),
(8, 3, '0000-00-00', '0000-00-00', 'disponible', 0),
(9, 4, '0000-00-00', '0000-00-00', 'disponible', 0),
(10, 5, '0000-00-00', '0000-00-00', 'indisponible', 0),
(11, 6, '0000-00-00', '0000-00-00', 'disponible', 0),
(12, 7, '0000-00-00', '0000-00-00', 'disponible', 0),
(13, 8, '0000-00-00', '0000-00-00', 'disponible', 0),
(14, 9, '0000-00-00', '0000-00-00', 'disponible', 0),
(15, 10, '0000-00-00', '0000-00-00', 'disponible', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
