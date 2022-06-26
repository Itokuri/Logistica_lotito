-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2022 a las 05:08:09
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logistica_lotito`
--
CREATE DATABASE IF NOT EXISTS `logistica_lotito` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `logistica_lotito`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen_jujuy`
--

CREATE TABLE `almacen_jujuy` (
  `ID` int(11) NOT NULL,
  `paquetes` int(11) DEFAULT NULL,
  `paquetes_perdidos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almacen_jujuy`
--

INSERT INTO `almacen_jujuy` (`ID`, `paquetes`, `paquetes_perdidos`) VALUES
(0, 456, 454);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen_tierra_del_fuego`
--

CREATE TABLE `almacen_tierra_del_fuego` (
  `ID` int(11) NOT NULL,
  `paquetes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almacen_tierra_del_fuego`
--

INSERT INTO `almacen_tierra_del_fuego` (`ID`, `paquetes`) VALUES
(123, 456);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `numero_de_placa` varchar(200) NOT NULL,
  `paquetes` int(11) DEFAULT NULL,
  `conductor` int(11) DEFAULT NULL,
  `destino` varchar(200) DEFAULT NULL,
  `permiso` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`numero_de_placa`, `paquetes`, `conductor`, `destino`, `permiso`) VALUES
('5555', 456, 455, 'lol', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `legajo` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `DNI` int(11) DEFAULT NULL,
  `licencia` tinyint(1) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`legajo`, `nombre`, `apellido`, `DNI`, `licencia`, `telefono`, `mail`) VALUES
(455, 'Maximo', 'Escobar', 13123, 1, '+542962484816', 'maximojose2002@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `ID` int(11) NOT NULL,
  `Cliente` varchar(200) DEFAULT NULL,
  `Direcciòn` varchar(200) DEFAULT NULL,
  `Descripciòn` varchar(200) DEFAULT NULL,
  `Fragil` tinyint(1) DEFAULT NULL,
  `Fecha_de_compra` date DEFAULT NULL,
  `Fecha_de_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`ID`, `Cliente`, `Direcciòn`, `Descripciòn`, `Fragil`, `Fecha_de_compra`, `Fecha_de_entrega`) VALUES
(456, 'Maximo', '21313', 'Valleja y aguirre', 0, '2022-06-22', '2022-06-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes_perdidos`
--

CREATE TABLE `paquetes_perdidos` (
  `ID` int(11) NOT NULL,
  `paquetes` int(11) DEFAULT NULL,
  `camion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paquetes_perdidos`
--

INSERT INTO `paquetes_perdidos` (`ID`, `paquetes`, `camion`) VALUES
(123, 456, NULL),
(454, 456, '5555');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen_jujuy`
--
ALTER TABLE `almacen_jujuy`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `paquetes` (`paquetes`),
  ADD KEY `paquetes_perdidos` (`paquetes_perdidos`);

--
-- Indices de la tabla `almacen_tierra_del_fuego`
--
ALTER TABLE `almacen_tierra_del_fuego`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `paquetes` (`paquetes`);

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`numero_de_placa`),
  ADD KEY `paquetes` (`paquetes`),
  ADD KEY `conductor` (`conductor`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`legajo`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `paquetes_perdidos`
--
ALTER TABLE `paquetes_perdidos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `paquetes` (`paquetes`),
  ADD KEY `camion` (`camion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacen_jujuy`
--
ALTER TABLE `almacen_jujuy`
  ADD CONSTRAINT `almacen_jujuy_ibfk_1` FOREIGN KEY (`paquetes`) REFERENCES `paquetes` (`ID`),
  ADD CONSTRAINT `almacen_jujuy_ibfk_2` FOREIGN KEY (`paquetes_perdidos`) REFERENCES `paquetes_perdidos` (`ID`);

--
-- Filtros para la tabla `almacen_tierra_del_fuego`
--
ALTER TABLE `almacen_tierra_del_fuego`
  ADD CONSTRAINT `almacen_tierra_del_fuego_ibfk_1` FOREIGN KEY (`paquetes`) REFERENCES `paquetes` (`ID`);

--
-- Filtros para la tabla `camion`
--
ALTER TABLE `camion`
  ADD CONSTRAINT `camion_ibfk_1` FOREIGN KEY (`paquetes`) REFERENCES `paquetes` (`ID`),
  ADD CONSTRAINT `camion_ibfk_2` FOREIGN KEY (`conductor`) REFERENCES `conductor` (`legajo`);

--
-- Filtros para la tabla `paquetes_perdidos`
--
ALTER TABLE `paquetes_perdidos`
  ADD CONSTRAINT `paquetes_perdidos_ibfk_1` FOREIGN KEY (`paquetes`) REFERENCES `paquetes` (`ID`),
  ADD CONSTRAINT `paquetes_perdidos_ibfk_2` FOREIGN KEY (`camion`) REFERENCES `camion` (`numero_de_placa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
