-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Apr 2022 um 15:12
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.1.2

--
-- Datenbank: `wu`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Highscore`
--

CREATE TABLE `Highscore` (
  `Id` int(11) NOT NULL,
  `GameName` varchar(255) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Highscore`
--
ALTER TABLE `Highscore`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Highscore`
--
ALTER TABLE `Highscore`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

