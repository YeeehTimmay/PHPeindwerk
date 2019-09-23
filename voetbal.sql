-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 sep 2019 om 08:03
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voetbal`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inschrijving20192020`
--

CREATE TABLE `inschrijving20192020` (
  `naam` varchar(30) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `ploeg` varchar(30) NOT NULL,
  `wedstrijdkledij` tinyint(1) NOT NULL,
  `trainingspak` tinyint(1) NOT NULL,
  `bal` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `prijzen`
--

CREATE TABLE `prijzen` (
  `item` varchar(30) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
