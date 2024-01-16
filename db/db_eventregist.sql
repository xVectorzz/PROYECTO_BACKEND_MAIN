-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2024 a las 08:59:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_eventregist`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galardonados`
--

CREATE TABLE `galardonados` (
  `curp` char(18) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `prize` varchar(100) NOT NULL,
  `date_asistence` datetime NOT NULL,
  `place` varchar(200) NOT NULL,
  `have_condition` tinyint(1) DEFAULT NULL,
  `is_asisting` tinyint(1) DEFAULT NULL,
  `company` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galardonados`
--

INSERT INTO `galardonados` (`curp`, `name`, `last_name`, `prize`, `date_asistence`, `place`, `have_condition`, `is_asisting`, `company`) VALUES
('SALE021020HMCNYDA8', 'EDUARDO SAMUEL', 'SANCHEZ LEYVA', 'SOBRESALIENTE', '2024-01-18 10:00:00', 'ESCOM IPN, Unidad Profesional Adolfo López Mateos, Av. Juan de Dios Bátiz, Nueva Industrial Vallejo, Gustavo A. Madero, 07320, CDMX.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `invited_by_curp` char(18) NOT NULL,
  `have_condition` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galardonados`
--
ALTER TABLE `galardonados`
  ADD PRIMARY KEY (`curp`),
  ADD UNIQUE KEY `curp` (`curp`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invited_by_curp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
