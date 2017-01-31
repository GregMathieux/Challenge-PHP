-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Janvier 2017 à 09:13
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Challenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `Amis`
--

CREATE TABLE `Amis` (
  `id` int(11) NOT NULL,
  `pseudo_principal` varchar(100) NOT NULL,
  `Prénom` varchar(100) NOT NULL,
  `Img_de_Profil` varchar(200) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Jeux` int(11) NOT NULL,
  `Date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ChallengePhp`
--

CREATE TABLE `ChallengePhp` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ChallengePhp`
--

INSERT INTO `ChallengePhp` (`id`, `pseudo`, `password`) VALUES
(1, 'Adminphp', 'Adminkiffeur');

-- --------------------------------------------------------

--
-- Structure de la table `Colorpicker`
--

CREATE TABLE `Colorpicker` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `navbar` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `bouton` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Colorpicker`
--

INSERT INTO `Colorpicker` (`id`, `titre`, `navbar`, `url`, `bouton`) VALUES
(1, 'rgba(0, 0, 0,1)', 'rgba(0,0,0,1)', 'rgba(180, 180, 180,1)', 'rgba(50, 50, 50,1)');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Amis`
--
ALTER TABLE `Amis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ChallengePhp`
--
ALTER TABLE `ChallengePhp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Colorpicker`
--
ALTER TABLE `Colorpicker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Amis`
--
ALTER TABLE `Amis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ChallengePhp`
--
ALTER TABLE `ChallengePhp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Colorpicker`
--
ALTER TABLE `Colorpicker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
