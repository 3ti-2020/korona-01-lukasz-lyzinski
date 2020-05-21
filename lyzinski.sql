-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Maj 2020, 14:23
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `lyzinski`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela1`
--

CREATE TABLE `tabela1` (
  `Id` int(11) NOT NULL,
  `Straszne` text NOT NULL,
  `Straszniejsze` text NOT NULL,
  `Najstraszniejsze` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tabela1`
--

INSERT INTO `tabela1` (`Id`, `Straszne`, `Straszniejsze`, `Najstraszniejsze`) VALUES
(1, 'Sasquatch', 'Jaskiniowy potwór', 'Godzilla');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela2`
--

CREATE TABLE `tabela2` (
  `Id` int(11) NOT NULL,
  `Straszne` text NOT NULL,
  `Straszniejsze` text NOT NULL,
  `Najstraszniejsze` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tabela2`
--

INSERT INTO `tabela2` (`Id`, `Straszne`, `Straszniejsze`, `Najstraszniejsze`) VALUES
(1, 'Sasquatch', 'Jaskiniowy potwór', 'Godzilla');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
