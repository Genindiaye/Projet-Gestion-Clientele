-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-projetfinal.alwaysdata.net
-- Generation Time: Aug 06, 2023 at 01:30 AM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetfinal_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `ID` int(8) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Motdepass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`ID`, `Nom`, `Motdepass`) VALUES
(78432, 'Moustapha Diop', 'Arame09'),
(765980, 'Ibrahima Summah', 'Geni0303');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(6) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sexe` varchar(12) NOT NULL,
  `statut` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`, `adresse`, `telephone`, `email`, `sexe`, `statut`) VALUES
(0, 'Baytir', 'Mamelle', 783036655, 'biggloo045@gmail.com', 'masculin', 'inactif'),
(71100, 'Adama Diarra	', 'Ouakam', 783036655, 'adamadiarra@gmail.com', 'Masculin', 'Actif'),
(90720, 'AKA EVY TRAORE	', 'Fann Residence', 773392202, 'akaevy@gmail.com', 'Masculin', 'Inactif'),
(123456, 'Mouhamadou Rassoul Sow', 'DUNYA', 785352649, 'sowrassoul2004@gmail.com', 'Masculin', 'Inactif'),
(150197, 'Agaicha Dione	', 'Nord foire', 775948375, 'agaicha@gmail.com', 'Feminin', 'Active'),
(180420, 'Saer Ben Cheikh', 'Grand Medine', 764903986, 'saerben@gmail.com', 'Masculin', 'Actif'),
(219635, 'Geneviève Ndiaye', 'Maristes Cité Elisabeth', 781138071, 'genidiaye15@gmail.com', 'Feminin', 'Active'),
(897098, 'Rokhaya Cathy Diop', 'Keur Mbaye Fall', 775917538, 'catybae@gmail.com', 'Feminin', 'Active'),
(897345, 'Tadabel Cissokho', 'Point E	', 780179594, 'beldacissokho@gmail.com', 'Feminin', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
