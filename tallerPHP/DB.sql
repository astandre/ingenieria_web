-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2018 a las 00:48:16
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplo3db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `costo` int(4) NOT NULL,
  `cupos` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre`, `costo`, `cupos`) VALUES
(1, 'JavaScript', 50, 100),
(2, 'CSS', 25, 25),
(3, 'HTML', 50, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `taller` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombres`, `apellidos`, `direccion`, `correo`, `cedula`, `telefono`, `fecha_nacimiento`, `tipo`, `curso`, `taller`) VALUES
(1, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '171782', '2300', '2018-04-30', '0', '1', ''),
(2, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '171782', '2300', '2018-04-30', '0', '1', ''),
(3, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '4565', '256', '2018-05-16', '0', '1', '1'),
(4, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '4565', '256', '2018-05-16', '0', '1', '1'),
(5, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '1717836646', '230489', '2018-05-08', '0', '1', '2'),
(6, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '1717836646', '230489', '2018-05-08', '0', '1', '2'),
(7, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '1717836646', '230489', '2018-05-08', '0', '1', '2'),
(8, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '1717836646', '230489', '2018-05-08', '0', '1', '2'),
(9, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '1717836646', '230489', '2018-05-08', '0', '1', '2'),
(27, 'Mark', 'Zucaritas', 'Av. Ivan RIofrio', 'markZucaritas@gmail.com', '1717836646', '230489', '2018-05-08', '0', '1', '2'),
(1093, 'Dieguito', 'Rifrio', 'Av. Las paltas', 'dieguitoRiofrio@gmail.com', '1711783664', '09674856', '2018-05-09', '1', '2', '2'),
(1094, 'David', 'FIguero', 'Av. Ivan RIofrio', 'david@gmail.com', '1717836456', '458792', '2018-05-03', '0', '2', '2'),
(1095, 'Jose', 'Pepe', 'Av las americas', 'jose@gmail.com', '1783614218', '230094', '2018-05-04', '0', '2', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrotaller`
--

CREATE TABLE `registrotaller` (
  `id` int(11) NOT NULL,
  `id_registro` int(6) NOT NULL,
  `id_taller` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrotaller`
--

INSERT INTO `registrotaller` (`id`, `id_registro`, `id_taller`) VALUES
(2, 6, 2),
(3, 6, 3),
(4, 7, 2),
(5, 7, 3),
(6, 8, 2),
(7, 8, 3),
(8, 9, 2),
(9, 9, 3),
(10, 27, 2),
(11, 27, 3),
(12, 1093, 2),
(13, 1094, 2),
(14, 1094, 3),
(15, 1095, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleres`
--

CREATE TABLE `talleres` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `costo` int(4) NOT NULL,
  `cupos` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talleres`
--

INSERT INTO `talleres` (`id`, `codigo`, `nombre`, `costo`, `cupos`) VALUES
(1, '1', 'HTML', 25, 100),
(2, '2', 'CSS', 25, 100),
(3, '3', 'JavaScript', 30, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrotaller`
--
ALTER TABLE `registrotaller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_registro` (`id_registro`),
  ADD KEY `id_taller` (`id_taller`);

--
-- Indices de la tabla `talleres`
--
ALTER TABLE `talleres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1096;

--
-- AUTO_INCREMENT de la tabla `registrotaller`
--
ALTER TABLE `registrotaller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `talleres`
--
ALTER TABLE `talleres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registrotaller`
--
ALTER TABLE `registrotaller`
  ADD CONSTRAINT `registrotaller_ibfk_1` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`),
  ADD CONSTRAINT `registrotaller_ibfk_2` FOREIGN KEY (`id_taller`) REFERENCES `talleres` (`id`),
  ADD CONSTRAINT `registrotaller_ibfk_3` FOREIGN KEY (`id_registro`) REFERENCES `registros` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
