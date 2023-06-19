-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-06-2023 a las 03:33:16
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emjphp`
--
CREATE DATABASE IF NOT EXISTS `emjphp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `emjphp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `codigoAlumno` int NOT NULL AUTO_INCREMENT,
  `nombreAlumno` varchar(60) NOT NULL,
  `apellidoAlumno` varchar(60) NOT NULL,
  `cursoAlumno` varchar(60) NOT NULL,
  `promedioAlumno` varchar(50) NOT NULL,
  `comentarioAlumno` varchar(100) NOT NULL,
  PRIMARY KEY (`codigoAlumno`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`codigoAlumno`, `nombreAlumno`, `apellidoAlumno`, `cursoAlumno`, `promedioAlumno`, `comentarioAlumno`) VALUES
(1, 'YOAN FELIPE', 'SEGURA VILLAMARIN', '11-A', '45', 'MUY BUEN ESTUDIANTE EL MEJOR DE TODOS'),
(2, 'FELIPE', 'VILLAMARIN', '10-A', '46', 'Buen estudiante'),
(4, 'camilo', 'sanchez', '8-a', '36', 'regular'),
(5, 'camilo', 'sanchez', '8-a', '36', 'regular'),
(6, 'camilo andress', 'gonzaless', '8-b', '28', 'buen estudiantes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
