-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 août 2023 à 16:28
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecom_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `username_a` varchar(255) NOT NULL,
  `pass_a` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username_a`, `pass_a`) VALUES
('admin', 'front'),
('user', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `username_c` varchar(255) NOT NULL,
  `pass_c` varchar(255) NOT NULL,
  `banned` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`username_c`, `pass_c`, `banned`) VALUES
('Carl_Jhonson', 'cj123', 0),
('Ghoul', 'Ghoul123', 0),
('Wahbi', 'Wahbi123', 0);

-- --------------------------------------------------------

--
-- Structure de la table `front_products`
--

CREATE TABLE `front_products` (
  `idf_p` int(11) NOT NULL,
  `namef_p` varchar(255) NOT NULL,
  `pricef_p` float NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `front_products`
--

INSERT INTO `front_products` (`idf_p`, `namef_p`, `pricef_p`, `image_url`) VALUES
(1, 'Whey Protein', 30, 'img/featured/n1.jpg'),
(2, 'Serious Mass', 50, 'img/featured/n2.jpg'),
(3, 'Creatine Monohydrate', 20, 'img/featured/n3.jpg'),
(4, 'Testo Boost', 10.99, 'img/featured/4.jpg'),
(5, 'Omega 3', 10, 'img/featured/5.jpg'),
(6, 'L-Carnitine', 30, 'img/featured/6.jpg'),
(7, 'C4 Pre Workout', 15, 'img/featured/7.jpg'),
(8, 'Caseine', 50, 'img/featured/8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_p` int(11) NOT NULL,
  `name_p` varchar(255) NOT NULL,
  `price_p` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_p`, `name_p`, `price_p`) VALUES
(1, 'Whey Protein', 30),
(2, 'Serious Mass', 50),
(3, 'Creatine Monohydrate', 20),
(4, 'Testo Boost', 10.99),
(5, 'Omega 3', 10),
(6, 'L-Carnitine', 30),
(7, 'C4 Pre Workout', 15),
(8, 'Caseine', 50);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_a`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`username_c`);

--
-- Index pour la table `front_products`
--
ALTER TABLE `front_products`
  ADD PRIMARY KEY (`idf_p`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_p`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `front_products`
--
ALTER TABLE `front_products`
  MODIFY `idf_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
