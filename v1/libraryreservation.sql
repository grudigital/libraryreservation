-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jul-2020 às 05:21
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

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
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cadastroem` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `senha`, `cadastroem`) VALUES
(1, 'Felipe', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', '2020-07-09 17:29:43'),
(2, 'admin', 'felipe@grudigital.com.br', 'admin', '2020-07-09 17:40:14'),
(3, 'Rafael Uriarte', 'rafael.uriarte@gmail.com', 'c1013227ec3cd24c6964e4ead05076e3', '2020-07-19 23:51:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
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
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `codigo`, `nome`, `sobrenome`, `email`, `data`, `periodo`, `cadastroem`) VALUES
(35, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-19', 'afternoon', '2020-07-19'),
(30, '7', 'Felipe', 'Sergio', 'email@email.com.br', '2020-07-06', 'morning', '2020-07-19'),
(34, '7', 'Felipe', 'Sergio', 'felipe@outlook.com', '2020-07-19', 'afternoon', '2020-07-19'),
(22, '7', 'felipe', 'sergio', 'email@email.com.br', '2020-07-09', 'tarde', '2020-07-09'),
(39, '10', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(37, '7', 'Felipe', 'Sergio', 'felipesergio@outlook.com', '2020-07-13', 'afternoon', '2020-07-19'),
(43, '85', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(42, '11', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(41, '10', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(44, '7', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(45, '75', NULL, NULL, NULL, NULL, NULL, '2020-07-19'),
(46, '1', 'Rafael', 'uriarte', '', '2020-07-31', 'morning', '2020-07-19'),
(47, '1', 'Rafael', 'uriarte', '', '2020-07-31', 'afternoon', '2020-07-19'),
(48, '1', 'Rafael', 'uriarte', '', '2020-07-30', 'day', '2020-07-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
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
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `nome`, `sobrenome`, `email`, `aceite`, `cadastroem`) VALUES
(538, '7', 'Felipe', 'Sergio', 'felipe@grudigital.com.br', 2, '2020-07-09'),
(541, '1', 'Rafael', 'uriarte', '', 1, '2020-07-19');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=542;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
