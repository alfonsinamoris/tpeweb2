-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2022 a las 16:23:26
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `direccion` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `habitaciones` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `alquiler_venta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`direccion`, `tipo`, `habitaciones`, `precio`, `alquiler_venta`) VALUES
('Cabral 340', 'monoambiente', 0, 18000, 'alquiler'),
('Garibaldi 2000', 'lote', 0, 30000, 'venta'),
('mitre 1230', 'departamento', 2, 50000, 'alquiler'),
('Muniz 1654', 'casa', 3, 65000, 'alquiler'),
('san martin 105', 'departamento', 2, 45000, 'venta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`direccion`),
  ADD KEY `tipo` (`tipo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_propiedad` (`tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
