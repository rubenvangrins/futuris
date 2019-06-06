-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 06 jun 2019 om 11:40
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `checklist`
--

INSERT INTO `checklist` (`ID`, `PERSONID`, `TARGET_DATE`, `TARGET_NAME`, `DAYPART`, `COMMENT`, `CHECKED`) VALUES
(1, 1, '2019-05-23', 'Tanden poetsen', 'Ochtend', '', 'ja'),
(2, 1, '2019-05-23', 'Douchen', 'Ochtend', '', 'nee'),
(3, 2, '2019-05-23', 'Douchen', 'Ochtend', '', 'nee'),
(4, 1, '2019-05-23', 'test', '', 'test', 'nee'),
(5, 2, '2019-05-23', 'Nick irriteren', '', '', 'nee'),
(6, 1, '2019-05-09', 'gg', 'NaN', '', 'nee');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hoofdoelen`
--

DROP TABLE IF EXISTS `hoofdoelen`;
CREATE TABLE IF NOT EXISTS `hoofdoelen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERSONID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `INFO` text NOT NULL,
  `TIME` int(11) NOT NULL,
  `PRIO` varchar(50) NOT NULL,
  `TIMESPAN` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `hoofdoelen`
--

INSERT INTO `hoofdoelen` (`ID`, `PERSONID`, `NAME`, `INFO`, `TIME`, `PRIO`, `TIMESPAN`) VALUES
(1, 1, 'Tas inpakken', 'Vergeet niet om voordat je gaat nog je tas in te pakken. Denk hierbij aan je lunch en je laptop inclusief benodigdheden.', 5, '1', 'dagelijks'),
(2, 1, 'Ochtendritueel verbeteren', 'Denk aan het opmaken van je bed en het poetsen van je tanden.', 20, '1', 'dagelijks'),
(5, 1, 'Deur sluiten', 'Vergeet niet om je sleutelbos mee te nemen.', 2, '1', 'dagelijks'),
(6, 1, 'Inschrijven voor dansles', 'Ga eerst op zoek naar de juiste dansschool.', 60, '2', 'eenmalig');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `personen`
--

INSERT INTO `personen` (`ID`, `NAME`, `PICTURE`, `USERNAME`, `PASSWORD`, `ROLE`, `MENTOR_1`, `MENTOR_2`) VALUES
(1, 'Andre van Gijp', '', 'andre@futuris.nl', '123', 'client', 'Willeke van Hout', 'Michiel van Laan'),
(2, 'Willeke van Hout', '', 'willeke@futuris.nl', '123', 'begeleider', '', ''),
(3, 'Alfred van Lieshout', '', 'alfred@futuris.nl', '123', 'client', 'Peter Pijpers', 'Willeke van Hout');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subdoelen`
--

DROP TABLE IF EXISTS `subdoelen`;
CREATE TABLE IF NOT EXISTS `subdoelen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TARGETID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `CHECKED` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `subdoelen`
--

INSERT INTO `subdoelen` (`ID`, `TARGETID`, `NAME`, `CHECKED`) VALUES
(1, 1, 'Lunch', 'ja'),
(2, 1, 'Water', 'ja'),
(3, 1, 'Laptop', 'ja'),
(4, 1, 'Oplader laptop', 'nee'),
(5, 1, 'Muis laptop', 'ja'),
(9, 0, '', 'nee'),
(10, 10, 'hoi', 'ja'),
(12, 10, 'test', 'ja'),
(13, 10, 'bie', 'ja'),
(14, 10, 'test', 'ja'),
(15, 10, 'o', 'nee'),
(16, 2, 'Douchen', 'ja'),
(17, 2, 'Aankleden', 'ja'),
(18, 2, 'Bed opmaken', 'ja'),
(19, 2, 'Tanden poetsen', 'ja'),
(20, 2, 'Haren doen', 'ja'),
(21, 2, 'Deoderant opspuiten', 'ja'),
(22, 5, 'Sleutelbos meenemen', 'ja'),
(23, 5, 'Deur dicht doen', 'ja'),
(24, 5, 'Deur op slot doen', 'ja'),
(25, 5, 'Sleutel uit het slot halen', 'ja'),
(26, 6, 'Zoek op internet naar dansscholen in de regio', 'ja'),
(27, 6, 'Kies een dansschool die je aanspreekt', 'ja'),
(28, 6, 'Zoek naar het telefoonnummer of het email adress', 'nee'),
(29, 6, 'Benader de dansschool voor een proefles', 'nee'),
(30, 6, 'Schrijf je in', 'nee');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
