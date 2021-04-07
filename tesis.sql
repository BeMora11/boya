-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2021 a las 23:02:47
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE `dispositivo` (
  `id_mensaje` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `oxigeno` float DEFAULT NULL,
  `temperatura` float DEFAULT NULL,
  `turbidez` float DEFAULT NULL,
  `dioxido_carbono` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`id_mensaje`, `fecha`, `oxigeno`, `temperatura`, `turbidez`, `dioxido_carbono`) VALUES
(95, '2021-04-05 13:57:37', 25, 34, 7, 12),
(96, '2021-04-05 13:59:17', 23, 22.4, 5.2, 40),
(97, '2021-04-05 17:23:12', 35, 40, 2.2, 45),
(99, '2021-04-05 17:43:43', 56, 32, 4.4, 98),
(100, '2021-04-05 17:45:29', 12, 32, 34, 53),
(101, '2021-04-05 17:46:52', 12, 32, 34, 53),
(102, '2021-04-05 17:48:04', 43, 54, 23, 34),
(103, '2021-04-05 17:52:19', 43, 54, 23, 34),
(104, '2021-04-05 17:53:54', 23, 34, 23, 56),
(105, '2021-04-05 17:55:21', 23, 34, 23, 56),
(106, '2021-04-05 18:01:09', 21, 76, 84, 12),
(107, '2021-04-05 18:02:24', 21, 23, 84, 12),
(108, '2021-04-05 18:02:49', 43, 12, 53, 64),
(109, '2021-04-06 12:05:09', 89, 43, 2.2, 90),
(110, '2021-04-06 12:05:39', 23, 34, 12, 50);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
