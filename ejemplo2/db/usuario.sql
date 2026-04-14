-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-04-2026 a las 20:57:44
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `nombre`, `apellido`) VALUES
(1, 'alumnofet', '$2y$10$4B1ohJ7EDRjwtHPQ8WByk.g2QXkOpiZZnDX51H9DqCgIyfC2gCETi', 'Alumnos de la Facultad', 'Estudios Tecnológicos'),
(2, 'alumnopiletcdb', '$$2y$10$WIiMWevoDleb7xuYGm/ax.Ap2nKQNY7Shm.kyW9jpG5WVvCsRRjvO', 'Alumnos PILET', 'Colegio Don Bosco'),
(3, 'alumnopiletitr', '$2y$10$yGERd4U.uMLgtlREHWMP/O1ErXNfRh75HTBEWbCWYJGLfpNts40ru', 'Alumnos PILET', 'Instituto Técnico Ricaldone'),
(4, 'lis', '$2y$10$ovPYQQ5V3dGU/uxxn2pDcuf0jmWfDfLd569i4mf3pyfyhmgzMTO4.', 'Lenguajes Interpretados', 'Facultad de Estudios Tecnológicos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
