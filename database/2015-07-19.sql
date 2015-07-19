-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 19. čec 2015, 18:09
-- Verze serveru: 5.6.15-log
-- Verze PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `goldlife`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `category` varchar(50) COLLATE utf8_bin NOT NULL,
  `day` varchar(50) COLLATE utf8_bin NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `where` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `info` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=28 ;

--
-- Vypisuji data pro tabulku `activities`
--

INSERT INTO `activities` (`id`, `name`, `category`, `day`, `time_start`, `time_end`, `where`, `info`) VALUES
(2, 'Swimming B', 'Kids', 'Monday', '15:30:00', '16:00:00', 'Pyramida P6', 'kratke info ohledne Swimming B'),
(3, 'Swimming B', 'Kids', 'Monday', '16:00:00', '16:45:00', 'Pyramida, P6', 'kratke info o plavani'),
(4, 'Swimming B', 'Kids', 'Monday', '16:30:00', '17:00:00', 'Pyramida, P6', 'nejake info o plavani'),
(5, 'Track and Field', 'Kids', 'Monday', '16:30:00', '18:00:00', 'Nebusice', 'nejake info'),
(6, 'Swimming A', 'Kids', 'Tuesday', '07:00:00', '07:45:00', NULL, 'info'),
(7, 'Track and Field', 'Kids', 'Tuesday', '16:00:00', '17:30:00', 'Nebusice', 'info'),
(8, 'Swimming A', 'Kids', 'Friday', '07:00:00', '07:45:00', NULL, 'info'),
(9, 'Swimming B', 'Kids', 'Thursday', '15:45:00', '16:30:00', 'Roztoky', 'info'),
(10, 'Swimming B', 'Kids', 'Thursday', '16:00:00', '16:45:00', 'Roztoky', 'info'),
(11, 'Swimming B', 'Kids', 'Friday', '15:30:00', '16:00:00', 'Roztoky', 'info'),
(12, 'Swimming B', 'Kids', 'Friday', '16:00:00', '16:30:00', 'Roztoky', 'info'),
(14, 'Track and Field', 'Kids', 'Thursday', '16:00:00', '17:30:00', 'Nebusice', 'info'),
(15, 'Track and Field', 'Kids', 'Thursday', '16:30:00', '18:00:00', 'Nebusice', 'info'),
(16, 'Gymnastics A & B', 'Kids', 'Tuesday', '16:15:00', '17:45:00', 'SKH', 'info'),
(17, 'Gymnastics A & B', 'Kids', 'Wednesday', '16:15:00', '17:45:00', 'SKH', 'info'),
(18, 'Gymnastics A & B', 'Kids', 'Friday', '16:15:00', '17:45:00', 'SKH', 'info'),
(19, 'Ballet B', 'Adults', 'Tuesday', '19:30:00', '20:30:00', 'Mala Strana', 'info'),
(20, 'Salsa B', 'Adults', 'Wednesday', '19:30:00', '20:30:00', 'Mala Strana', 'info'),
(21, 'Flamenco B', 'Adults', 'Thursday', '19:30:00', '20:30:00', 'Mala Strana', 'info'),
(22, 'Pre-ballet (3-4)', 'Kids', 'Saturday', '10:00:00', '10:45:00', 'Mala Strana', 'info'),
(23, 'Ballet (6-8)', 'Kids', 'Saturday', '11:00:00', '11:45:00', 'Mala Strana', 'info'),
(24, 'Dance your language', 'Kids', 'Saturday', '13:30:00', '24:30:00', 'Mala Strana', 'info'),
(25, 'Gymnastics I & II', 'Kids', 'Sunday', '10:00:00', '12:30:00', 'SKH', 'info'),
(27, 'In-door Climbing B', 'Kids', 'Wednesday', '16:00:00', '17:30:00', 'Holesovice', 'info\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
