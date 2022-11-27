-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2022 at 12:03 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cal_calendario`
--

-- --------------------------------------------------------

--
-- Table structure for table `datos`
--

CREATE TABLE `datos` (
  `id` int NOT NULL,
  `fechaHoy` varchar(10) NOT NULL,
  `text1` varchar(400) NOT NULL,
  `text2` varchar(400) NOT NULL,
  `text3` varchar(400) NOT NULL,
  `text4` varchar(400) NOT NULL,
  `text5` varchar(400) NOT NULL,
  `text6` varchar(400) NOT NULL,
  `text7` varchar(400) NOT NULL,
  `text8` varchar(400) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `titulo1` varchar(200) NOT NULL,
  `titulo2` varchar(200) NOT NULL,
  `titulo3` varchar(200) NOT NULL,
  `titulo4` varchar(200) NOT NULL,
  `titulo5` varchar(200) NOT NULL,
  `titulo6` varchar(200) NOT NULL,
  `titulo7` varchar(200) NOT NULL,
  `imagen` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `imagen1` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `imagen2` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `imagen3` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `imagen4` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `imagen5` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `imagen6` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `imagen7` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''''''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datos`
--

INSERT INTO `datos` (`id`, `fechaHoy`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `titulo`, `titulo1`, `titulo2`, `titulo3`, `titulo4`, `titulo5`, `titulo6`, `titulo7`, `imagen`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `imagen6`, `imagen7`) VALUES
(165, '01-11-2022', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H9', 'T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', '../imagenes/Ariete.png', '../imagenes/Ariete.png', '../imagenes/Ariete.png', '../imagenes/Ariete.png', '../imagenes/Ariete.png', '../imagenes/Ariete.png', '../imagenes/Ariete.png', '../imagenes/Ariete.png'),
(166, '09-11-2022', ' prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova pro', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '', '', '', '16° gg lunare', 'Luna in Ariete dalle 08:48', 'Luna s/c', 'Taglio dei capelli', 'Prova', '', '', '', '../imagenes/ALBERO.png', '../imagenes/Luna in Ariete.png', '../imagenes/icone NUOVE9.png', '../imagenes/TAGLIO.png', '../imagenes/', '../imagenes/', '../imagenes/', '../imagenes/'),
(167, '01-01-1970', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../imagenes/', '../imagenes/', '../imagenes/', '../imagenes/', '../imagenes/', '../imagenes/', '../imagenes/', '../imagenes/'),
(168, '10-11-2022', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '', '', '', '10° gg lunare', 'Luna in Gemelli', 'Luna s/c', 'Taglio dei capelli', 'Prova', '', '', '', '../imagenes/GALLO.png', '../imagenes/Luna in Pesci.png', '../imagenes/icone NUOVE9.png', '../imagenes/pollice taglio.png', '../imagenes/', '../imagenes/', '../imagenes/', '../imagenes/'),
(171, '16-11-2022', 'Visibilidad Fase Lunar del 50% desde Hemisferio Sur', '', '', '', '', '', '', '', 'Cuarto Menguante', '', '', '', '', '', '', '', '../imagenes/luna_th_0_5.jpg', '\'\'', '\'\'', '\'\'', '\'\'', '\'\'', '\'\'', '\'\'');

-- --------------------------------------------------------

--
-- Table structure for table `glosario`
--

CREATE TABLE `glosario` (
  `id` int NOT NULL,
  `text1` varchar(100) NOT NULL,
  `text2` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''''''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `glosario`
--

INSERT INTO `glosario` (`id`, `text1`, `text2`, `imagen`) VALUES
(1, 'germano23', 'german 1234\r\nksasdkasd\r\nlksjdlkasd\r\nksjdaskd\r\nksjdksdj\r\nksjdksd\r\nksjdkasd\r\nkjdkasdj\r\nkjdkasdj\r\nkjdka\r\ngerman123\r\ngerman546\r\ngeronimo6546\r\ngracielo1135\r\ngracias \r\n', '../imagenes/icone NUOVE11.png'),
(2, 'Eclissi solare', 'prova prova prova provaprova prova prova provaprova prova prova provaprova prova prova provaprova pr', '../imagenes/icone NUOVE10.png'),
(3, 'Venere in retrogrado', 'il significato prova prova ', '../imagenes/icone NUOVE24.png'),
(4, 'Pianeta in retrogrado', 'prova prova ', '../imagenes/icone NUOVE10.png'),
(5, 'Eclissi lunare', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/icone NUOVE8.png'),
(6, 'Eclissi lunare', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/icone NUOVE8.png'),
(7, 'Sole in bruciatura', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/icone NUOVE6.png'),
(8, 'Cuarto Menguante [Hemisferio Sur]', 'Visibilidad del 50% de la Fase Lunar desde el Hemisferio Sur. ', '../imagenes/luna_th_0_5.jpg'),
(9, 'Plutone in gemelli khbkh', 'Se564654654va prova prova prova prova prova prova prova prova ', '../imagenes/luna_th_0_98.jpg'),
(10, 'Plutone in gemelli', 'SE il pianeta è in gemelli prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/icone NUOVE24.png'),
(11, 'Plutone in gemelli', 'SE il pianeta è in gemelli prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', ''),
(12, 'Plutone in gemelli', ' prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', ''),
(13, 'Plutone in gemelli', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', ''),
(14, 'Mercurio in sagittario', 'prova prova prova prova prova prova prova prova prova prova prova prova vprova prova prova prova prova prova prova prova prova vprova prova prova prova prova prova prova prova prova prova prova prova v', '../imagenes/icone NUOVE6.png'),
(15, 'Mercurio in sagipter', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/icone NUOVE4.png'),
(16, 'Mecurio in sagipter', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/icone NUOVE4.png');

-- --------------------------------------------------------

--
-- Table structure for table `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int NOT NULL,
  `text1` varchar(50) NOT NULL,
  `text2` varchar(50) NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '''''',
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topday`
--

CREATE TABLE `topday` (
  `id` int NOT NULL,
  `text1` varchar(100) NOT NULL,
  `text2` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''''''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topday`
--

INSERT INTO `topday` (`id`, `text1`, `text2`, `imagen`) VALUES
(1, 'titulo', 'prueba de titulo', '../imagenes/Bilancia.png'),
(2, 'cercare un lavoro', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', ''),
(3, 'comprare una casa', 'se devi comprare  una casa prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/CASA.png'),
(4, 'SSS', 'SSSS', '../imagenes/FfeSOFGXEAMVb2h.png'),
(5, 'Iniziare una dieta', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '../imagenes/DIETA.png'),
(6, 'Iniziare uno sport', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '\'\''),
(7, 'Iniziare uno sport', 'prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova prova ', '\'\''),
(8, 'Nueva Casitalla by Gambin', 'Esto es una nuevo párrafo insertado para demostrar que si esta funcionando lo especificado por el archivo orig', '../imagenes/luna_th_0_46.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `utente` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `imagen` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT ''''''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `utente`, `pass`, `mail`, `imagen`) VALUES
(1, 'german', 'german', '123456', 'german@gmail.com', ''),
(10, 'lucass', 'german', '123', 'ganaoiew@jadajs', ''),
(11, 'lucass', 'german', '123', 'ganaoiew@jadajs', ''),
(12, 'Mauro', 'mauro', '123', 'ganaoiew@jadajs', ''),
(13, 'mauro', 'geronimo', '123456', 'njdaj@gmail.com', ''),
(14, 'mauro23', 'geronimo', '123456', 'njdaj@gmail.com', ''),
(15, 'mauro233', 'sadasdasd', '123456', 'nsdjas@kdjnf', ''),
(16, 'mauro2333', '2323', '123', 'jnsdajkdas', ''),
(17, 'mauro', 'mauro', 'mf100179', 'mauiro@mauroferrante.com', ''),
(18, 'lucas', 'lucas', '123123', 'asdasd@sd.com', ''),
(19, 'asdasdasd', 'asdasdasd', '123123', 'asdasd@asdasd.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glosario`
--
ALTER TABLE `glosario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topday`
--
ALTER TABLE `topday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `glosario`
--
ALTER TABLE `glosario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `topday`
--
ALTER TABLE `topday`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
