-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23/07/2020 às 07:28
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `libraryreservation`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cadastroem` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `senha`, `cadastroem`) VALUES
(1, 'Felipe', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', '2020-07-09 17:29:43'),
(5, 'fdgdf', 'gdfg', 'bf22a1d0acfca4af517e1417a80e92d1', '2020-07-21 18:56:41');

-- --------------------------------------------------------

--
-- Estrutura para tabela `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `english` text DEFAULT NULL,
  `germany` text DEFAULT NULL,
  `italy` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `languages`
--

INSERT INTO `languages` (`id`, `english`, `germany`, `italy`) VALUES
(1, 'about', 'Über', 'di'),
(2, 'view reservation', 'Reservieren', 'Riserva'),
(3, 'cancel reservation', 'stornieren', 'Annulla'),
(4, 'contact us', 'Kontakt', 'contatto'),
(5, 'library reservation', 'Bibliotheksreservierung', 'prenotazione della biblioteca'),
(6, 'From 3 August 2020 the library of the Kunsthistorisches Institut in Florenz – MPI reopens its doors to registered users, from Monday to Friday, on the basis of online reservation. \r\nIn accordance with the regulations of social distancing, it will be possible to host a maximum of fifty-two people per day, in two slots: from 9 am to 1:15 pm and from 1:45 to 6 pm, with 26 scholars in each slot. In order to allow everyone the opportunity to use the library, please do not book more than four half-day slots per week. \r\nThe details of the regulations are available here (Hyperlink or pdf).', 'Ab 3. August 2020 öffnet die Bibliothek des Kunsthistorischen Instituts in Florenz MPI wieder ihre Türen für registrierte Benutzer, von Montag bis Freitag, und zwar nur nach Online-Reservierung. In Übereinstimmung mit den sozialen Distanzierungsregeln können maximal zweiundfünfzig Personen am Tag Zugang zur Bibliothek erhalten, in zwei slots: am Vormittag 9 bis 13:15 und nachmittags 13:45 bis 18, mit jeweils bis zu 26 Nutzer innen. Um allen die Möglichkeit zu geben, die Bibliothek zu nutzen, buchen Sie bitte nicht mehr als vier Halbtages-Slots pro Woche. ', 'Dal 3 Agosto 2020 la biblioteca del Kunsthistorisches Institut in Florenz MPI riapre le porte ai suoi utenti tesserati, dal lunedì al venerdì. L accesso sarà possibile solo previa prenotazione online. \r\nIn ottemperanza alle norme sul distanziamento sociale, la biblioteca potrà ospitare un numero massimo di cinquantadue persone al giorno, in due slot: uno di mattina, dalle 9 alle 13:15 e uno di pomeriggio dalle 13:45 alle 18h, con l’accesso per 26 studiosi per ciascuno slot. Per consentire a tutti la possibilità di fruizione, si invitano le/i gentili utenti a non prenotare più di quattro slot da mezza giornata.'),
(7, 'University contact details\r\n', 'Kontaktdaten der Universitat', 'Dati di contatto delluniversità'),
(8, 'Mail', 'Mail', 'Posta'),
(9, 'Phone', 'Telefon', 'Telefono'),
(10, 'Cancellation of reservations', 'Stornierung von Reservierungen', 'Annullamento di prenotazioni'),
(11, 'Insert yout KHI Card Number', 'Geben Sie Ihre KHI-Kartennummer ein', 'Inserisci il numero della tua carta KHI'),
(12, 'Cancel Reservation', 'Reservierung stornieren', 'Annulla prenotazione'),
(13, 'Scheduling canceled successfully !!!', 'Planung erfolgreich abgebrochen !!!', 'Pianificazione annullata correttamente !!!'),
(14, 'Date', 'Datum', 'Data'),
(15, 'Period', 'Zeitraum', 'Periodo'),
(16, 'Actions', 'Aktionen', 'Azioni'),
(17, 'Access reservations', 'Zugang zu Reservierungen', 'Accedi alle prenotazioni'),
(18, 'KHI Card Number', 'KHI-Kartennummer', 'Numero della carta KHI'),
(19, 'Cancellation of reservations\r\n', 'Stornierung von Reservierungen', 'Annullamento di prenotazioni'),
(20, 'Your reservation has been successfully registered. You will receive a confirmation email to the address you provided. Thank you!', 'Ihre Reservierung wurde erfolgreich registriert. Sie werden eine Bestätigungs-E-Mail an die von Ihnen angegebene Adresseerhalten.Danke!', 'La sua prenotazione è stata registrata con successo, riceverà una mail di conferma all indirizzo da Lei fornito. Grazie!'),
(21, 'Previous Reservations', 'Vorherige Reservierungen', 'Prenotazioni precedenti');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `periodo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cadastroem` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `reservas`
--

INSERT INTO `reservas` (`id`, `codigo`, `nome`, `sobrenome`, `email`, `data`, `periodo`, `cadastroem`) VALUES
(30, '7', 'Felipe', 'Sergio', 'email@email.com.br', '2020-07-06', 'morning', '2020-07-19'),
(34, '7', 'Felipe', 'Sergio', 'felipe@outlook.com', '2020-07-19', 'afternoon', '2020-07-19'),
(22, '7', 'felipe', 'sergio', 'email@email.com.br', '2020-07-30', 'tarde', '2020-07-09'),
(53, '7', 'Felipe', 'Sergio', '', '2020-07-22', 'morning', '2020-07-21'),
(56, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-21', 'morning', '2020-07-21'),
(39, '10', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(37, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-22', 'afternoon', '2020-07-21'),
(43, '85', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(42, '11', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(41, '10', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(50, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-10', 'afternoon', '2020-07-21'),
(45, '75', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(46, '7', 'Rafael', 'uriarte', '', '2020-07-21', 'morning', '2020-07-21'),
(47, '7', 'Rafael', 'uriarte', '', '2020-07-21', 'afternoon', '2020-07-22'),
(49, '4', NULL, NULL, NULL, NULL, NULL, '2020-07-21'),
(51, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-24', 'afternoon', '2020-07-30'),
(55, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-20', 'morning', '2020-07-25'),
(57, '7', NULL, NULL, NULL, NULL, NULL, '2020-07-21'),
(58, '7', NULL, NULL, NULL, NULL, NULL, '2020-07-21'),
(59, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-25', 'morning', '2020-07-22'),
(60, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-24', 'morning', '2020-07-23'),
(61, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-23', 'morning', '2020-07-24'),
(62, '7', NULL, NULL, NULL, NULL, NULL, '2020-07-23'),
(63, '7', NULL, NULL, NULL, NULL, NULL, '2020-07-23'),
(64, '7', NULL, NULL, NULL, NULL, NULL, '2020-07-23'),
(65, '7', NULL, NULL, NULL, NULL, NULL, '2020-07-23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aceite` int(2) NOT NULL,
  `cadastroem` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `nome`, `sobrenome`, `email`, `aceite`, `cadastroem`) VALUES
(538, '7', 'Felipe', 'Sergio', 'felipe@grudigital.com.br', 1, '2020-07-09');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
