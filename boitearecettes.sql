-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 23, 2020 at 12:12 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boitearecettes`
--

-- --------------------------------------------------------

--
-- Table structure for table `recettes`
--

CREATE TABLE `recettes` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `steps` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recettes`
--

INSERT INTO `recettes` (`id`, `author`, `title`, `ingredients`, `steps`, `image_url`) VALUES
(1, 'thomas', 'Pancakes', '1 oeuf; 1 cuillère à soupe de sucre blanc; 1 cuillère à soupe d\'huile ou de beurre fondu, 150 g de farine; 1 bonne cuillère à café de levure; 200 ml de lait', 'Battre grossièrement l\'oeuf et le sucre dans un saladier.; Y rajouter le beurre fondu ou l\'huile.; Mélanger à part la farine et la levure, puis en mélanger la moitié avec la préparation.; Délayer progressivement avec le lait tout en rajoutant l\'autre moitié de farine petit à petit (cela évitera de créer des grumeaux).; Aucun temps de repos n\'est nécessaire, si ce n\'est juste le temps de faire chauffer votre poêle à feu moyen.; A l\'aide d\'une petite louche ou d\'une grosse cuillère à sauce, déposer des \"ronds\" dans la poêle.; Lorsque les bulles apparaissent et éclatent, retourner les pancakes et ne pas les laisser plus d\'une min sur l\'autre face.', 'https://picsum.photos/200/300'),
(9, 'thomas', 'Pancakes 2', '1 oeuf; 1 cuillère à soupe de sucre blanc; 1 cuillère à soupe d\'huile ou de beurre fondu, 150 g de farine; 1 bonne cuillère à café de levure; 200 ml de lait', 'Battre grossièrement l\'oeuf et le sucre dans un saladier.; Y rajouter le beurre fondu ou l\'huile.; Mélanger à part la farine et la levure, puis en mélanger la moitié avec la préparation.; Délayer progressivement avec le lait tout en rajoutant l\'autre moitié de farine petit à petit (cela évitera de créer des grumeaux).; Aucun temps de repos n\'est nécessaire, si ce n\'est juste le temps de faire chauffer votre poêle à feu moyen.; A l\'aide d\'une petite louche ou d\'une grosse cuillère à sauce, déposer des \"ronds\" dans la poêle.; Lorsque les bulles apparaissent et éclatent, retourner les pancakes et ne pas les laisser plus d\'une min sur l\'autre face.', 'https://picsum.photos/200/300'),
(10, 'thomas', 'fsqdfqsd', 'fqsdf', 'qsdfsd', 'https://picsum.photos/200/300'),
(12, 'thomas', 'fsqdfqsd', 'fqsdf', 'qsdfsd', 'https://picsum.photos/200/300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
