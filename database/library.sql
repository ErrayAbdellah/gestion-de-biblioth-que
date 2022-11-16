-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 16 nov. 2022 à 17:28
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastName` varchar(250) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pasword` varchar(255) DEFAULT NULL,
  `dateAdmin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastName`, `email`, `pasword`, `dateAdmin`) VALUES
(1, 'abo', '2022-11-24', 'abb noor', 'accc9105df5383111407fd5b41255e23', '0000-00-00'),
(3, 'abo', '2022-11-24', 'abb noor@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00'),
(4, 'abdellah', '2022-11-01', 'rray.abdellah@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00'),
(5, 'yasser', '2022-12-02', 'a.erray@student.youcode.ma', '202cb962ac59075b964b07152d234b70', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `dateCreate` date DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `adminID` int(11) DEFAULT NULL,
  `quntity` int(11) DEFAULT NULL,
  `LanguagID` varchar(255) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `state`, `dateCreate`, `price`, `adminID`, `quntity`, `LanguagID`, `categoryID`, `author`) VALUES
(3, '$title', '$state', '0000-00-00', '0', NULL, NULL, 'ar', NULL, '$author'),
(6, 'aaa', 'aaa', '2022-11-18', '12', 4, 1222, 'zh', 11, 'aaaa'),
(7, 'jjj', 'jjj', '2022-11-26', '12', 4, 13344, 'en', 4, 'jjj'),
(8, 'yasser', 'yasser', '2022-11-22', '12', 5, 444, 'en', 7, 'yasser');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Adventure stories'),
(2, 'Autobiography and memoir'),
(3, 'Biography'),
(4, 'Classics'),
(5, 'Crime'),
(6, 'Essays'),
(7, 'Fairy tales, fables, and folk tales'),
(8, 'Fantasy'),
(9, 'Historical fiction'),
(10, 'Horror'),
(11, 'Humour and satire'),
(12, 'Literary fiction'),
(13, 'Mystery'),
(14, 'Poetry'),
(15, 'Plays'),
(16, 'Romance'),
(17, 'Science fiction'),
(18, 'Self-help'),
(19, 'Short stories'),
(20, 'Thrillers'),
(21, 'War'),
(22, 'Women’s fiction'),
(23, 'Young adult'),
(24, 'other');

-- --------------------------------------------------------

--
-- Structure de la table `languag`
--

CREATE TABLE `languag` (
  `id` varchar(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `languag`
--

INSERT INTO `languag` (`id`, `name`) VALUES
('ar', 'Arabic - العربية'),
('bn', 'Bengali - বাংলা'),
('en', 'English'),
('es', 'Spanish - español'),
('fr', 'france'),
('hi', 'Hindi - हिन्दी'),
('ja', 'Japanese - 日本語'),
('pa', 'Punjabi - ਪੰਜਾਬੀ'),
('pt', 'Portuguese - português'),
('ru', 'Russian - русский'),
('zh', 'Chinese - 中文');

-- --------------------------------------------------------

--
-- Structure de la table `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `bookID` int(11) DEFAULT NULL,
  `dateSell` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminID` (`adminID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `LanguagID` (`LanguagID`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `languag`
--
ALTER TABLE `languag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookID` (`bookID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`adminID`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `books_ibfk_4` FOREIGN KEY (`LanguagID`) REFERENCES `languag` (`id`);

--
-- Contraintes pour la table `sell`
--
ALTER TABLE `sell`
  ADD CONSTRAINT `sell_ibfk_1` FOREIGN KEY (`bookID`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
