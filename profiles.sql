-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Mrz 2020 um 20:07
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `eta`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `profiles`
--

CREATE TABLE `profiles` (
  `Jobcode` varchar(10) COLLATE utf8_bin NOT NULL,
  `Translator` text COLLATE utf8_bin NOT NULL,
  `ID_translator` int(8) NOT NULL,
  `From_english` tinyint(1) NOT NULL,
  `From -german` tinyint(1) NOT NULL,
  `From_hungarian` tinyint(1) NOT NULL,
  `To_english` tinyint(1) NOT NULL,
  `To_german` tinyint(1) NOT NULL,
  `To_hungarian` tinyint(1) NOT NULL,
  `photo` varchar(200) COLLATE utf8_bin NOT NULL,
  `greeting` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `profiles`
--

INSERT INTO `profiles` (`Jobcode`, `Translator`, `ID_translator`, `From_english`, `From -german`, `From_hungarian`, `To_english`, `To_german`, `To_hungarian`, `photo`, `greeting`) VALUES
('', 'Kovács Béla', 1, 0, 1, 1, 0, 1, 1, 'https://piimages.parfumo.de/4/3/5667_4e2c072d3cd5a3654c5621910e735007_custo_man.jpg', 'hweurhwe owhorehorh eioreg haogia regahviohvoyyyyyyyyy yivy hivy iyhvy l llydilh dllydb hdlblad\r\nbela'),
('', 'Tóth Tímea', 2, 1, 1, 1, 1, 1, 1, 'https://caricatoore.com/files/woman-caricature1.jpg', 'FEw rwg perg t R ETEATAEÄTREGV\r\nFFV\r\nDFB\r\n\r\nDB \r\nA\r\nBAD\r\n\r\nDA\r\n A\r\ntIMI'),
('', 'Kiss Kata', 3, 1, 1, 0, 0, 0, 1, 'https://www.koreandrama.org/wp-content/uploads/2018/04/Rich-Man-2.png', 'hwiefhwivhw iwhep hwf rpgwgfydbyl lkl ddf\r\n\r\nKata'),
('', 'Dan Brown', 4, 1, 1, 0, 1, 1, 0, 'http://www.freakingnews.com/pictures/117500/Gorilla-Man-117673.jpg', 'grrrgrgrgwegr rwger wrgwk<s kjgfwkg WF Wg<JVXVB<XFBDALHJ S\r\nG ATH \r\nAREGG A\r\nGR \r\nDan'),
('', 'Jürgen Klein', 5, 1, 0, 0, 0, 1, 0, 'https://images.pexels.com/photos/713520/pexels-photo-713520.jpeg?cs=srgb&dl=landscape-nature-man-713520.jpg&fm=jpg', 'blalalallalallalalal l laled ellerlw  e Jürgen'),
('', 'Juergen Gross', 6, 1, 1, 0, 1, 1, 0, 'https://images.pexels.com/photos/713520/pexels-photo-713520.jpeg?cs=srgb&dl=landscape-nature-man-713520.jpg&fm=jpg', 'hhihi Jürgen G');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`ID_translator`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `profiles`
--
ALTER TABLE `profiles`
  MODIFY `ID_translator` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
