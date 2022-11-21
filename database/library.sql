-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 21 nov. 2022 à 17:25
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
(5, 'yasser', '2022-12-02', 'a.erray@student.youcode.ma', '202cb962ac59075b964b07152d234b70', '0000-00-00'),
(6, 'fatima', '2022-11-17', 'fatima@gmail.com', '86371b07e7e8a1c5b814eddaf9808359', '0000-00-00'),
(7, 'abdellah', '2022-11-24', 'abdellah@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00');

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
  `author` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `state`, `dateCreate`, `price`, `adminID`, `quntity`, `LanguagID`, `categoryID`, `author`, `image`) VALUES
(3, '$title', '$state', '0000-00-00', '0', NULL, NULL, 'ar', NULL, '$author', NULL),
(8, 'yasser', 'yasser', '2022-11-22', '12', 5, 444, 'en', 7, 'yasser', NULL),
(10, 'ee', 'ee', '2022-11-25', '12', 3, 123, 'ar', 12, 'ee', NULL),
(25, '$title', '$state', '0000-00-00', '12', 3, 1444, 'ar', 5, '$author', '$newImageName'),
(29, 'iBjI5W6EFS', 'aX6eHx25jq', '2022-10-28', '911827', 7, 30000, 'zh', 12, 'g7KBxPDk0g', 'IMG-637b6134700f68.78925447.jpg'),
(30, 'DexTVVQNRa', 'NsCfiVwJN7', '2022-10-28', '726484', 7, 601854, 'zh', 12, 'viJ6osPGAh', 'IMG-637b80599aa855.93763485.png'),
(31, 'sc2RQ5zSdX', 'zs4O0TYfir', '2022-10-28', '888749', 4, 645132, 'zh', 12, 'mNSzzVtLER', 'IMG-637b9ad9a067c0.66531828.jpg'),
(32, 'qZa2WlzevZ', 'r7FXQl6YO7', '2022-10-28', '915268', 4, 930700, 'zh', 12, 'DEbYWynDKW', 'IMG-637b9ae2cf8b22.59537451.jpg'),
(33, 'aQpVR85kcP', '3xMnKqqlsK', '2022-10-28', '757547', 4, 266993, 'zh', 12, 'VHbsUMszL8', 'IMG-637b9aecb9ee34.14135746.jpg'),
(34, 'sLxDQTQGsq', 'HbegFMtEyV', '2022-10-28', '475532', 4, 619932, 'zh', 12, 'PCW5UFufbD', 'IMG-637b9d08aea523.02093844.jpg'),
(35, 'n8laSeuT4j', 'HgbwHmYurD', '2022-10-28', '987876', 4, 668273, 'zh', 12, 'CDK08fUTnY', 'IMG-637b9d59cfdd41.05495808.jpg'),
(36, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9d9f5c5f37.81696184.png'),
(37, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9e0d34e620.66774032.png'),
(38, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9f37722877.96405509.png'),
(39, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9f48d3d2b7.32841395.png'),
(40, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9f58bc8850.82655582.png'),
(41, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9f64949d40.29394111.png'),
(42, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9f83eea631.83163411.png'),
(43, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9f9d693c14.03097283.png'),
(44, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9fb0967c57.50517731.png'),
(45, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9fc48b36a0.59702833.png'),
(46, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9fdd2a6cf1.28585199.png'),
(47, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637b9fed353ef1.95944826.png'),
(48, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637ba00a0dafa6.76634256.png'),
(49, 'dlBMQ3287Y', 'wCbRFmWDMR', '2022-10-28', '712622', 4, 640656, 'zh', 12, 'A5jM8rtaWq', 'IMG-637ba0339c7747.04964592.png');

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
  `dateSell` datetime DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sell`
--

INSERT INTO `sell` (`id`, `bookID`, `dateSell`, `quantity`) VALUES
(2, 29, '2022-11-21 00:00:00', 2),
(3, 29, '2022-11-21 00:00:00', 58);

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
  ADD KEY `sell_ibfk_1` (`bookID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `sell_ibfk_1` FOREIGN KEY (`bookID`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
