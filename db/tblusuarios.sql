-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2022 a las 20:51:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbo.fenrir`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `ID` int(11) NOT NULL,
  `strNombre` varchar(40) NOT NULL,
  `strApellido` varchar(40) NOT NULL,
  `strTipo_Documento` varchar(20) NOT NULL,
  `numDocumento` int(11) NOT NULL,
  `strCorreo` varchar(200) NOT NULL,
  `numId_Rol` int(11) NOT NULL,
  `strPassword` varchar(300) NOT NULL,
  `datFecha_creacion` date NOT NULL DEFAULT current_timestamp(),
  `datFecha_actualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Roles` (`numId_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD CONSTRAINT `Roles` FOREIGN KEY (`numId_Rol`) REFERENCES `tblroles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
