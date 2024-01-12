-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 11 jan. 2024 à 00:11
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `draft_shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `createdAt`, `updatedAt`) VALUES
(1, 'Vêtements', 'Catégorie pour les vêtements', '2024-01-10 23:53:23', '2024-01-10 23:53:23'),
(2, 'Meubles', 'Catégorie pour les meubles', '2024-01-10 23:54:21', '2024-01-10 23:54:21'),
(3, 'Informatique', 'Catégorie pour les produits informatiques', '2024-01-10 23:55:59', '2024-01-10 23:55:59'),
(4, 'Jouets', 'Catégorie pour les jouets', '2024-01-10 23:56:20', '2024-01-10 23:56:20');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photos` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `photos`, `price`, `description`, `quantity`, `createdAt`, `updatedAt`, `category_id`) VALUES
(5, 'Laptop', 'laptop1.jpg,laptop2.jpg', 1200, 'Ordinateur portable rapide', 15, '2024-01-10 23:57:46', '2024-01-10 23:57:46', 1),
(6, 'Smartphone', 'phone1.jpg,phone2.jpg', 800, 'Smartphone dernier cri', 20, '2024-01-10 23:58:06', '2024-01-10 23:58:06', 2),
(7, 'Casque audio', 'headphone1.jpg,headphone2.jpg', 150, 'Casque audio sans fil', 30, '2024-01-10 23:58:35', '2024-01-10 23:58:35', NULL),
(8, 'Appareil photo', 'camera1.jpg,camera2.jpg', 700, 'Appareil photo haute résolution', 10, '2024-01-10 23:59:17', '2024-01-10 23:59:17', 1),
(9, 'Imprimante', 'printer1.jpg,printer2.jpg', 300, 'Imprimante multifonction', 25, '2024-01-11 00:00:34', '2024-01-11 00:00:34', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
