-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 14 Février 2018 à 01:28
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_photos`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `pseudo` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`pseudo`, `mdp`) VALUES
('admin', 'passer');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `pseudo`, `image`) VALUES
(1, 'kilifa', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `pseudo` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `mdp`, `nom`, `prenom`) VALUES
('kilifa', 'passer', 'Ndiaye', 'Abdoulaye'),
('rema', 'passer', 'Diop', 'Mareme');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`pseudo`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pseudo` (`pseudo`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
