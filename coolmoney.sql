-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Ned 21. čec 2019, 16:26
-- Verze serveru: 5.7.26
-- Verze PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `coolmoney`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatel`
--

DROP TABLE IF EXISTS `uzivatel`;
CREATE TABLE IF NOT EXISTS `uzivatel` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jmeno` text COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` text COLLATE utf8_czech_ci NOT NULL,
  `telefon` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `heslo` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatel`
--

INSERT INTO `uzivatel` (`id`, `jmeno`, `prijmeni`, `telefon`, `email`, `heslo`) VALUES
(26, 'Břetislav', 'Král', '732432543', 'bre@ta.cz', 'asdf'),
(27, 'Tamten', 'Hajnej', '843234543', 'tam@haj.ne', 'asdfg'),
(28, 'Tajny', 'Hajny', '843232919', 'tajny@hajny.ca', 'asdf'),
(29, 'Beny', 'Saryk', '843943', 'benysaryk@gmail.com', 'asdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
