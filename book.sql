-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 06 oct. 2022 à 10:38
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `masterlib`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id_book` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `quantity` int DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `price` int DEFAULT NULL,
  `cover` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id_book`, `title`, `quantity`, `genre`, `author`, `price`, `cover`) VALUES
(1, 'Un autre monde', 1, 'science-fiction', 'Maxime Chattam', 20, 'book_cover/blabla.jpg'),
(2, 'Harry Potter', 1, 'science-fiction', 'J.K.Rowling', 20, ''),
(5, 'Tintin et le voyage sur la lune', 1, 'thriller', 'George Rémi', 8, ''),
(4, 'L\'étranger', 1, 'thriller', 'Albert Camus', 15, ''),
(15, 'la belle et la bête', 1, 'romantique', 'disney', 8, ''),
(18, 'Vendredi où la vie sauvage', 1, 'science-fiction', 'Michel Tounier', 12, '6336a7d9d87b51664526297robinson.jpg'),
(24, 'Blood Family', 1, 'science-fiction', 'Anne Fine', 15, '6336b43cd272a1664529468Bloodfamily.jpg'),
(30, 'le labyrinthe', 1, 'science-fiction', 'James Dashner', 20, '6336b664b01441664530020labyrinthe.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
