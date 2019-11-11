-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 11 Novembre 2019 à 09:04
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `thecenter`
--

-- --------------------------------------------------------

--
-- Structure de la table `auth`
--

CREATE TABLE `auth` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(25) COLLATE utf8_bin NOT NULL,
  `pass` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `auth`
--

INSERT INTO `auth` (`idUser`, `userName`, `pass`) VALUES
(1, 'root', 'root');

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `siret` int(11) NOT NULL,
  `creattionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `logo` varchar(50) NOT NULL DEFAULT 'defaultCompany'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '(default project)',
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'No description for this project',
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '../public/images/defaultProject.jpg',
  `idCDP` int(11) NOT NULL DEFAULT '1',
  `idteam` int(11) NOT NULL,
  `idAccessList` int(11) NOT NULL,
  `idDoc` int(11) NOT NULL,
  `idTaskList` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `image`, `idCDP`, `idteam`, `idAccessList`, `idDoc`, `idTaskList`) VALUES
(2, '(default project)', 'No description for this project', '../public/images/defaultProject.jpg', 1, 1, 2, 2, 2),
(3, 'TheCenter', 'No description for this project', '../public/images/defaultProject.jpg', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `color` char(6) COLLATE utf8_bin NOT NULL DEFAULT '000000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `color`) VALUES
(1, 'SuperAdmin', 'FF0000'),
(2, 'Admin', 'FF8C00'),
(3, 'SuperDev', '00FF00'),
(4, 'Dev', '00FF22');

-- --------------------------------------------------------

--
-- Structure de la table `roleuser`
--

CREATE TABLE `roleuser` (
  `idUser` int(11) NOT NULL,
  `idRole` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `roleuser`
--

INSERT INTO `roleuser` (`idUser`, `idRole`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `idteam` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`idteam`, `idUser`) VALUES
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `idCDP` int(11) NOT NULL,
  `idTeam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `teams`
--

INSERT INTO `teams` (`id`, `idCDP`, `idTeam`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `first name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` int(20) NOT NULL,
  `phone region` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '+1',
  `country` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'United States of America',
  `language` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'English (United States)',
  `street` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `region code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `last name`, `first name`, `phone`, `phone region`, `country`, `language`, `street`, `city`, `region code`) VALUES
(1, 'Maurin', 'Clément', 647206097, '+33', 'France', 'Français (France)', '5 chemin des deux bouches', 'Badaroux', 48000),
(2, 'Musk', 'Elon', 555485214, '+1', 'United States of America', 'English (United States)', 'Holywood Blvd', 'Los Angeles', 2020),
(3, 'Test', 'Mac', 123123123, '+1', 'United States of America', 'English (United States)', 'ezrezrze', 'rezrzer', 123123);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siret` (`siret`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roleuser`
--
ALTER TABLE `roleuser`
  ADD PRIMARY KEY (`idUser`,`idRole`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idteam`,`idUser`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
