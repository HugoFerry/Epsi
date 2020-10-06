-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 11 sep. 2020 à 07:14
-- Version du serveur :  10.3.17-MariaDB-log
-- Version de PHP : 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tips`
--

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `ID` int(11) NOT NULL,
  `nom_machine` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `tip` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`ID`, `nom_machine`, `tip`) VALUES
(1, 'Lave-vaisselle', 'Si votre lave-vaisselle en est équipé, utilisez la touche éco ! Elle va rallonger le temps de lavage de votre vaisselle mais sera plus économe en électricité. '),
(2, 'Four', 'Lors du préchauffage de votre four, gardez la porte fermée afin de conserver la chaleur dans l’enceinte du four. Laver le régulièrement et diminuer le nombre de fours si vous en avez plusieurs !'),
(3, 'Ordinateur', 'Ni l’économiseur d’écran, ni le fait de laisser l’écran allumé ne vous aideront à économiser de l’énergie ! Donc, éteignez l’ordinateur et tout ce qui est connecté autant que possible pour prolonger leur durée de vie et, bien sûr, économiser de l’énergie !'),
(4, 'Sèche-linge', 'Dans l’idéal, faites sécher votre linge à l’air libre. Si vous ne pouvez pas, essorez bien votre linge avant de le mettre dans le sèche-linge afin de réaliser des économies d’énergie !'),
(5, 'Télévision', 'Si vous possédez plusieurs télévisions, il serait économique pour vous de diminuer le nombre de téléviseurs. De plus, débrancher les écrans est plus économe que simplement les laisser en veille ! En effet, lorsque vous éteignez vos écrans, ils continuent à consommer de l’énergie. Il serait donc préférable de les débrancher à chaque fin d’utilisation.'),
(6, 'Réfrigérateur', 'En ce qui concerne l’entretien de votre appareil, pensez à nettoyer et à dépoussiérer votre grille arrière chaque année. Une fois tous les 3 mois, votre frigo et votre congélateur devront être dégivrés car un système de refroidissement pris dans la glace est plus gourmand en énergie !'),
(7, 'Plaques électriques', 'Préférez des casseroles de la taille de vos plaques pour réduire votre facture d’électricité. Vous pouvez aussi éteindre la plaque quelques minutes (lorsqu’il reste un tiers du temps) avant la fin de la cuisson. Elle restera chaude assez longtemps pour continuer la cuisson de vos aliments même éteinte.'),
(8, 'Lave-linge', 'Privilégiez les cycles \"éco\" ou \"demi-charge\", adaptés aux lavages les plus petits. Si vous le pouvez, attendez que votre lave-linge soit plein avant de laver votre linge pour éviter les lavages à répétition !');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
