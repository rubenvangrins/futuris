-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 23 mei 2019 om 11:22
-- Serverversie: 5.6.17-log
-- PHP-versie: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futuris`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `checklist`
--

DROP TABLE IF EXISTS `checklist`;
CREATE TABLE IF NOT EXISTS `checklist` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERSONID` int(11) NOT NULL,
  `TARGET_DATE` date NOT NULL,
  `TARGET_NAME` varchar(150) NOT NULL,
  `DAYPART` varchar(50) NOT NULL,
  `COMMENT` varchar(50) NOT NULL,
  `CHECKED` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `checklist`
--

INSERT INTO `checklist` (`ID`, `PERSONID`, `TARGET_DATE`, `TARGET_NAME`, `DAYPART`, `COMMENT`, `CHECKED`) VALUES
(1, 1, '2019-05-23', 'Tanden poetsen', 'Ochtend', '', 'nee'),
(2, 1, '2019-05-23', 'Douchen', 'Ochtend', '', 'nee'),
(3, 2, '2019-05-23', 'Douchen', 'Ochtend', '', 'nee'),
(4, 1, '2019-05-23', 'test', '', 'test', 'nee'),
(5, 2, '2019-05-23', 'Nick irriteren', '', '', 'nee');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personen`
--

DROP TABLE IF EXISTS `personen`;
CREATE TABLE IF NOT EXISTS `personen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `PICTURE` varchar(300) NOT NULL,
  `USERNAME` varchar(150) NOT NULL,
  `PASSWORD` varchar(150) NOT NULL,
  `ROLE` varchar(150) NOT NULL,
  `MENTOR_1` varchar(150) NOT NULL,
  `MENTOR_2` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `personen`
--

INSERT INTO `personen` (`ID`, `NAME`, `PICTURE`, `USERNAME`, `PASSWORD`, `ROLE`, `MENTOR_1`, `MENTOR_2`) VALUES
(1, 'Ruben van Grinsven', '', 'billy', '123', 'client', 'Rick van Gerwen', 'Ahmed Gigi'),
(2, 'Rick van Gerwen', '', 'ries', '234', 'begeleider', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
