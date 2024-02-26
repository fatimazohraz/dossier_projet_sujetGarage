
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 fev. 2024 
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- création de Base de données : `garaveVparrot`


-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'essence'),
(2, 'diesel'),
(3, 'électric');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `kilometers` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `category_id`, `title`, `description`, `price`, `kilometers`,`year`, `image`) VALUES
(1, 1, 'KIA STONIC','KIA STONIC en parfait état intérieur et extérieur. 2ème main. controle tecnique fait en juin . Garantie constructeur 7 ans. Extérieur blanc, intérieur noir, Boîte manuelle , aide au démarrage en côté, arrêt et redémarrage auto du moteur, contrôle dynamique de la stabilité, capteur de luminosité, capteur de pluie, régulateur de vitesse, rétroviseurs rabattables électriquement, volume du coffre 352 à 1155 litres.', '16000€','37000km','2013', 'voiture1.1.jpg'),
(2, 2, 'SUZUKI 4x4','SUZUKI GRAND VITARA 3 PORTES 4X4 VITESSES COURTES, 1.9L, ANNEE 2012 (05/2012) 54400 KM , contole tecnique a jour, VENDUE AVEC: 4 Roues neige , Les 2 sièges, ceintures, accessoires pour repasser en 4 places (Frais réduits car la version de base est une VP 4 places).', '12000€','54400km', '2019', 'voiture2.2.jpg'),
(3, 1, 'BMW X3 ','Modell xLine, Argent glacier métallisé, Pack Rétroviseurs intérieurs et extérieurs, Boiseries fines, Feux antibrouillard à LED, Cuir Canberra Beige,Services de lecteurs connectés Réparation incluse 3 ans/100 000 km, Toit panoramique en verre, Lumières LED, Assistant de stationnement, Anse avec boiseries fines.', '15000€','22000km', '2021', 'voiture3-1.jpg'),
(4, 1,' ford fiesta','Première main, Super état, Utilisation autoroute en majorité, entretien selon préconisation constructeur chez Ford principalement(factures).Disque et plaquettes avant 2000 km, Amortisseur avant 10 000 km, Vidange boîte de vitesse, 4 pneus neige,Tel Bluetooth, régulateur de vitesse, clim auto, prise USB ,2 prise 12 volts ets', '8950€','98900km', '2014', 'voiture4-1.jpg'),
(5, 3, 'TESLA ','MODEL 3 Grande autonomie Long Range transmission intégrale 4 roues motrices en très bon état , Autopilot capacité de conduite entièrement autonome , intérieur en Noir Premium , Jantes Aero 18 ,Véhicule visible sur rendez vous.', '31000€','95927km', '2020', 'voiture5-1.jpg'),
(6, 1, 'mini Cooper ', 'Cooper s 192ch, 3 portes, Pack connecté navigation, Jantes 17, Chrome Line int et ext, Très propre, Version jcw extérieur, Peinture énigmatique black métallisée, Pavillon intérieur noir, Aileron jcw, Pneus premium Neufs, Vidange janvier 2024, Freins neufs octobre 2023, Liquide de frein octobre 2023.', '23500€','57000km','2019', 'voiture6-1.jpg'),
(7, 1, 'Opel Corsa', 'Très belle voiture acheter en 2019 dans une concessionnaire à rousseau chambourcy, Je vends la voiture car je me suis installé en Italie.Très peu utilisé, 2ème propriétaire elle est comme neuf.', '9000€','80000km','2017', 'voiture7.1.jpg'),
(8, 2, 'voiture BMW','Description voiture BMW, on tres bonne état ,Distribution faite à 123000km ,Révision complète ok tous filtres 4 pneu neuf, Bluetooth Kit main libre, Câble auxiliaire.', '12500€','124500km', '2012', 'voiture8.1.jpg'),
(9, 2, 'peugeot 208', 'VEND PEUGEOT 208 1.5 BLUEHDI 100 S&S ACTIVE BUSINESS 5 P PRIX ARGUS +-9500 EUROS MISE EN VENTE 7500 EUROS car petit accrochage coté droit sinon TRES BONNE AFFAIRE PRIX A DEBATTRE', '7500€','14200km','2017', 'voiture9.2.jpg'),
(10, 1,'cabriolet', 'Très belle voiture, MÉGANE 1 CABRIOLET PHASE 2, Dynamique, 78400 km, mise en circulation : 19/04/2000, essence, manuelle, 7CV, puissances 110ch, gris clair métal, capote bleu marine, jantes alu, climatisation, radio commande au volant, sellerie : cuir/tissus/gris/bleue, vitres électriques, 4 places, direction assistée, deuxième main.Contrôle technique fait.', '5500€','78400km','2000', 'voiture10.1.jpg'),
(11, 2, 'peugeot 3008','Boîte auto, Voiture avec mode sport toute option sauf toit ouvrant, Voiture non fumeur très propre et très bien entretenue.Filtre à habitacle, filtre à huile, filtre à air changé avec factures, Moteur comme neuf.', '18300€','149000km', '2019', 'voiture11.1.jpg'),
(12, 1,'peugeot','Voiture du personnel Peugeot à l état neuf , teinte métallisée Gris Artense ,rétroviseur interieur photosensible Visio Park 1. Carrosserie impeccable, pas de tache intérieure, capote électrique en bon état fonctionne parfaitement, voiture suivie par mécanicien Renault.', '26000€','2500km', '2013', 'voiture12.1.jpg');



-