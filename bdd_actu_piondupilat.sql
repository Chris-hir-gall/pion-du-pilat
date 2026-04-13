-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 mars 2026 à 14:20
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_actu_piondupilat`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `actu_id` int(11) NOT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `contenu` varchar(500) DEFAULT NULL,
  `acroche` varchar(200) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`actu_id`, `categorie`, `titre`, `contenu`, `acroche`, `date`) VALUES
(1, 'vie du club', 'test vie du club', 'ceci est un test ', NULL, '2026-03-20 10:06:37'),
(2, 'tournoi interne', 'test tournoi', 'test', NULL, '2026-03-20 10:09:54'),
(3, 'jeunes', 'test jeunes', 'test', NULL, '2026-03-20 10:10:09');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `identifiant` varchar(100) DEFAULT NULL,
  `motdepasse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `nom`, `identifiant`, `motdepasse`) VALUES
(1, 'Chris', 'xardaray', 'vicepresidentduclub');

-- --------------------------------------------------------

--
-- Structure de la table `master`
--

CREATE TABLE `master` (
  `admin_id` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `identifiant` varchar(100) DEFAULT NULL,
  `motdepasse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `master`
--

INSERT INTO `master` (`admin_id`, `nom`, `identifiant`, `motdepasse`) VALUES
(1, 'Christian', 'xardaray', 'Videojuegos31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`actu_id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `actu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `master`
--
ALTER TABLE `master`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
