-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 mars 2020 à 02:36
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cart`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Product1', '1.jpg', 50.00),
(2, 'Product2', '2.jpg', 45.00),
(3, 'Product3', '3.jpg', 55.00),
(5, 'Product5', '4.jpg', 80.00),
(4, 'Product5', '5.jpg', 25.00),
(7, 'Product7', '7.jpg', 55.00),
(8, 'Product8', '8.jpg', 90.00),
(9, 'Product9', '9.jpg', 85.00),
(10, 'Product10', '10.jpg', 60.00),
(11, 'Product11', '11.jpg', 85.00),
(12, 'Product12', '12.jpg', 60.00),
(13, 'Product13', '13.jpg', 85.00),
(14, 'Product14', '14.jpg', 60.00),
(15, 'Product15', '15.jpg', 75.00),
(26, 'Product11', '11.jpg', 85.00),
(27, 'Product12', '12.jpg', 60.00),
(28, 'Product13', '13.jpg', 85.00),
(29, 'Product14', '14.jpg', 60.00),
(30, 'Product15', '15.jpg', 75.00);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product1`
--

CREATE TABLE `tbl_product1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_product1`
--

INSERT INTO `tbl_product1` (`id`, `name`, `image`, `price`) VALUES
(16, 'Product1', '16.jpg', 50.00),
(17, 'Product2', '17.jpg', 45.00),
(18, 'Product3', '18.jpg', 55.00),
(19, 'Product5', '19.jpg', 80.00),
(20, 'Product5', '20.jpg', 25.00),
(21, 'Product6', '21.jpg', 45.00),
(22, 'Product7', '22.jpg', 55.00),
(23, 'Product8', '23.jpg', 90.00),
(24, 'Product9', '24.jpg', 85.00),
(25, 'Product10', '25.jpg', 60.00),
(26, 'Product11', '26.jpg', 85.00),
(27, 'Product12', '27.jpg', 60.00),
(28, 'Product13', '28.jpg', 85.00),
(29, 'Product14', '29.jpg', 60.00),
(30, 'Product15', '30.jpg', 75.00);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_product1`
--
ALTER TABLE `tbl_product1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `tbl_product1`
--
ALTER TABLE `tbl_product1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
