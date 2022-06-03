-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 mai 2022 à 22:14
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location de voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `userName` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`) VALUES
(1, 'admin1', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `cin` int(15) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `ville` varchar(15) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`cin`, `pseudo`, `tel`, `email`, `ville`, `pwd`) VALUES
(11111111, 'test', '111111111', 'test@gmail.com', 'sousse', 'test1'),
(88996655, 'test2', '8523645', 'test2@gmail.com', 'tunis', 'test2');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `depart` varchar(15) NOT NULL,
  `retour` varchar(15) NOT NULL,
  `dateD` date NOT NULL,
  `heureD` datetime(6) NOT NULL,
  `dateR` date NOT NULL,
  `heureR` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `depart`, `retour`, `dateD`, `heureD`, `dateR`, `heureR`) VALUES
(1, 'sousse', 'gasserine', '2022-04-02', '0000-00-00 00:00:00.000000', '2022-04-23', '0000-00-00 00:00:00.000000'),
(2, 'jemmel', 'sousse', '2022-06-01', '0000-00-00 00:00:00.000000', '2022-06-10', '0000-00-00 00:00:00.000000'),
(3, '', '', '0000-00-00', '0000-00-00 00:00:00.000000', '0000-00-00', '0000-00-00 00:00:00.000000'),
(4, '', '', '0000-00-00', '0000-00-00 00:00:00.000000', '0000-00-00', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(15) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `plaque` varchar(20) NOT NULL,
  `img` varchar(30) NOT NULL DEFAULT 'NA',
  `prix` int(11) NOT NULL,
  `disponibilité` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `plaque`, `img`, `prix`, `disponibilité`) VALUES
(1, 'Hyundal Creta', 'BA2CH2020', 'assets/img/cars/creta.jpg', 1400, 'yes'),
(2, 'BMW 6-Series', 'BA10PA5555', 'assets/img/cars/bmw6.jpg', 5999, 'yes'),
(3, 'Mercedes-Benz E-Clas', 'BA10CH6009', 'assets/img/cars/mcec.png', 5200, 'yes'),
(4, 'Honda Amaze', 'PJ16YX8820', 'assets/img/cars/amaze.png', 2400, 'no'),
(5, 'Land Rover Range Rov', 'GA5KH9669', 'assets/img/cars/rangero.jpg', 4600, 'yes'),
(6, 'MG Hector', 'GA6PA6666', 'assets/img/cars/mghector.jpg', 1400, 'yes'),
(7, 'Honda CR-V', 'TN17MS1997', 'assets/img/cars/hondacr.jpg', 1400, 'yes'),
(8, 'Toyota Fortuner', 'GA08MX1997', 'assets/img/cars/Fortuner.png', 2800, 'yes'),
(42, 'Mahindra ', 'B584H25', 'assets/img/cars/MahindraXUV.jp', 300, 'yes');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `cin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88996656;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
