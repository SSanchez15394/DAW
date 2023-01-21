-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 01-01-2023 a las 15:04:11
-- Versión del servidor: 5.7.34
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `plazasParking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parking`
--

CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `ocupadas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parking`
--

INSERT INTO `parking` (`id`, `marca`, `modelo`, `matricula`, `ocupadas`) VALUES
(3, 'Opel', 'Corsa', '0987ZYX', 3),
(4, 'Volkswagen', 'Polo GTI', '5628JAA', 15),
(5, 'Subaru', '360', '1523DDK', 4),
(8, 'Mercedes', 'AMG', '2171IQI', 17),
(14, 'Kia', 'XCEED', '8282JDJ', 19),
(15, 'Porsche', '911', '6718ANC', 6),
(21, 'Honda', 'Civic', '7392LLL', 8),
(22, 'Seat', 'Leon', '1234ABC', 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
