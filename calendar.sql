-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Sty 2020, 01:16
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `calendar`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `dzien` int(100) NOT NULL,
  `miesiac` int(100) NOT NULL,
  `rok` int(100) NOT NULL DEFAULT '2019',
  `godzina` time(1) NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `events`
--

INSERT INTO `events` (`id`, `dzien`, `miesiac`, `rok`, `godzina`, `tytul`, `opis`) VALUES
(10675, 2, 1, 2020, '12:21:00.0', 'zajecia', 'jeje'),
(10676, 9, 1, 2020, '12:21:00.0', 'zajecia', 'jeje'),
(10677, 16, 1, 2020, '12:21:00.0', 'zajecia', 'jeje'),
(10678, 23, 1, 2020, '12:21:00.0', 'zajecia', 'jeje'),
(10679, 30, 1, 2020, '12:21:00.0', 'zajecia', 'jeje');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10680;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
