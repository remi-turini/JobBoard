-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 18 oct. 2020 à 13:36
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jobboard`
--

-- --------------------------------------------------------

--
-- Structure de la table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `companieName` varchar(100) DEFAULT NULL,
  `companieLocalisation` varchar(100) DEFAULT NULL,
  `advertisementsDate` date DEFAULT NULL,
  `postName` varchar(100) DEFAULT NULL,
  `contractType` varchar(100) DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `formation` text DEFAULT NULL,
  `quality` text DEFAULT NULL,
  `workTime` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `salary` text DEFAULT NULL,
  `telework` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `advertisements`
--

INSERT INTO `advertisements` (`id`, `image`, `companieName`, `companieLocalisation`, `advertisementsDate`, `postName`, `contractType`, `mission`, `formation`, `quality`, `workTime`, `experience`, `salary`, `telework`) VALUES
(1, './img/starbucks.jpg', 'Starbucks', 'Aix-en-Provence', '2020-09-23', 'Server', 'CDD', '- Setting up the bar- Welcoming and advising clients- Taking orders- Making bar-related drinks- Ensuring customer comfort- Manage inventories- Maintenance and cleaning of equipment and premises- May be required to serve in the dining room', 'The formation for the post will be over a period of 6 months.', '- Order storage- Use of bar equipment (coffee machine, beer pump...)- Hygiene and food safety rules- Tray/platform carrying technique- Collection procedure- To be able to carry out the orders related to the bar- Realization of a monthly inventory', '1 year renewable (CDD)', 'Server M/F: 1 year (Desired)Restoration: 1 year (Wished)', '1820,00 € (brut) per month', '- No'),
(2, './img/bouygues.png', 'Bouygues', 'Marseille', '2020-10-03', 'Fiber Optic and Copper Technicians', 'CDD', '- Laying of copper or optical cable\r\n\r\n- Fibre optic connection on networks\r\n\r\n- Installation of modem, TV decoder', '- Beginner accepted.\r\n\r\n- Formation provided.', 'Very skillful, precise and fast with his hands and fingers\r\n\r\nAbility to stay focused\r\n\r\nAbsolute rigour', 'CDI', 'Experience in electrical/electronics, public works or construction is a plus', '29 000 € (brut) per year', 'No'),
(3, './img/air-force.jpg', 'Air Force', 'Istres', '2020-10-06', 'Air hostess', 'CDI', 'You welcome passengers and ensure their comfort.You ensure service and safety on board the ', 'The military training takes place during eight weeks at the Centre de Préparation Opérationnelle du Combattant de l\'Armée de l\'Air (CPOCAA) in Orange (Vaucluse).The specialty training continues in Creil for 6 weeks. It includes theoretical instruction in the form of a 6-week integration course at the Creil base and also practical instruction at the Air France Flight Training Base at Roissy and flight training.', 'You have French nationalityYou are less than 30 years old on the date of signing the contract.You have a bachelor\'s degreeYou have successfully passed the selection tests (including medical tests related to the specialty)You have a good level of English', 'Full time (CDI)', 'You are between 16 and 30 years of age and you have at least a grade 3 level.', '32 000 € per year negotiable', 'No'),
(4, './img/McDonald\'s.jpg', 'McDonald\'s', 'Saint-Etienne', '2020-10-14', 'Crew / Catering employee', 'CDD', 'When I first arrived at McDonald\'s, I was warned that I should hang on. And it was! Because you have to be versatile and responsive, that\'s for sure. But the great thing is that I was trained from the start. I joined a close-knit and united team, always there to help me. There is no time to be bored! Between the counter, the dining room and the kitchen, there is something for everyone. The important thing is to be angry, to help customers and, above all, to always keep a smile!', 'Formation possible in work', 'You have excellent interpersonal skills. You adapt to all situations,You are naturally dynamic in what you do.', '24 hours per week', 'No need experience', '10,15 euro per hour', 'No');

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `activitySector` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `headOffice` varchar(100) DEFAULT NULL,
  `management` varchar(255) DEFAULT NULL,
  `workForce` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `activitySector`, `description`, `headOffice`, `management`, `workForce`) VALUES
(1, 'Starbucks', 'American coffee chain', 'Starbucks Corporation is an American coffee chain founded in 1971. Partly franchised, it is the largest chain of its kind in the world, with 32,180 locations in 78 countries.', 'Seattle ( Washington ) United States', 'Kevin Johnson', 346000),
(2, 'Bouygues', 'Telecomunication operator', 'Bouygues Telecom is a French telecommunications operator, a subsidiary of the Bouygues Group created in 1994. It is historically the third of the four French national cell phone operators, after Orange and SFR and before Free mobile.', 'Paris, France', 'Olivier Roussat', 5306),
(3, 'Air Force', 'Air and space army', 'The Air and Space Army is one of the four components of the Armed Forces of the French Republic; the other military components being the Army, the National Navy and the National Gendarmerie. As of July 1, 2019, 40,800 soldiers and 5,200 civilians serve in its ranks2. It totals 170,000 flight hours per year. Its annual budget is 7.5 billion euros in 2020, or 20% of the budget of the Ministry of the Armed Forces.', 'Paris, France', 'Air Force Commander General Philippe Lavigne', 40800),
(4, 'McDonald\'s', 'Fast restauration', 'McDonald\'s Corporation is an American fast food restaurant chain with a worldwide presence, founded by businessman Ray Kroc in 1952 after he bought the rights to a small hamburger chain operated from 1940 by Richard and Maurice McDonald', 'Chicago, Illinois United States', 'Chris Kempczinski, CEO\r\nAndrew J. McKenna, Chairman of the Board\r\nNawfal Trabelsi, President of McDonald\'s France', 210000);

-- --------------------------------------------------------

--
-- Structure de la table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `companieName` varchar(100) DEFAULT NULL,
  `emailSent` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jobapplication`
--

INSERT INTO `jobapplication` (`id`, `firstName`, `lastName`, `email`, `phone`, `companieName`, `emailSent`) VALUES
(2, 'Joseph', 'Cappeli', 'joseph.capelli@monmail.fr', '0784658343', 'Air Force', ''),
(1, 'Marie', 'Costa', 'marie.costa@email.com', '0659438732', 'Starbucks', 'bonjour je veux travailler pour vous !!'),
(3, 'Joseph', 'Cappeli', 'joseph.capelli@monmail.fr', '0784658343', 'Bouygues', ''),
(4, 'remi', 'turini', 'remi.turini@email.com', '', 'Bouygues', ''),
(5, 'remi', 'turini', 'remi.turini@email.com', '', 'Air Force', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `phone`, `password`) VALUES
(1, 'admin', 'admin', 'admin@email.com', '', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'costa', 'marie', 'marie@email.com', '06 82 84 43 78', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'turini', 'remi', 'remi@email.com', '', '098f6bcd4621d373cade4e832627b4f6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `jobapplication`
--
ALTER TABLE `jobapplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
