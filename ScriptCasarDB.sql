-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2016 a las 07:11:57
-- Versión del servidor: 5.7.9
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

DROP TABLE IF EXISTS `catalogo`;
CREATE TABLE IF NOT EXISTS `catalogo` (
  `id` bigint(15) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_alta` datetime NOT NULL,
  `urlimagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Galeria` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Nuevo_producto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `Titulo`, `Descripcion`, `Fecha_alta`, `urlimagen`, `Galeria`, `Nuevo_producto`, `Usuario`) VALUES
(1475910038, 'GUARE DE SOTOL', 'CES-015 GUARE DE SOTOL Y PINO TIPO JARRON', '2016-10-08 01:00:41', '1475910038.jpg', 'Cesteria tarahumara', 'Si', 'sergios'),
(1475910200, 'GUARE TRIANGULAR DE PINO', 'CES-003 GUARE TRIANGULAR DE PINO CON TAPA BICOLOR', '2016-10-08 01:03:22', '1475910200.jpg', 'Cesteria tarahumara', 'Si', 'sergios'),
(1475910233, 'OLLAS TARAHUMARAS', 'CONJUNTO DE OLLAS TARAHUMARAS YA DESCRITAS', '2016-10-08 01:03:55', '1475910233.jpg', 'Alfareria tarahumara', 'Si', 'sergios'),
(1475910279, 'COJIN DE MANTA', 'TEX-003 COJIN DE MANTA CON APLICACION DE CUATRO MONITAS TARAHUMARAS', '2016-10-08 01:04:41', '1475910279.jpg', 'Textiles tarahumara', 'Si', 'sergios'),
(1475910342, 'OLLA BLANCA DISENO TRADICIONAL', 'COM-035 OLLA BLANCA DISENO TRADICIONAL CON PINTURA NEGRA Y ROJA 29 X 19 CM. MARY CHAVIRA HERNANDE', '2016-10-08 01:05:44', '1475910342.jpg', 'Olla de mata ortiz comercial', 'Si', 'sergios'),
(1475910387, 'OLLA ESGRAFIADA PINTURA BLANCA Y NEGRA', 'FIN-004 OLLA ESGRAFIADA PINTURA BLANCA Y NEGRA DISENOS TRADICIONALES 32 X 23 CM. JESUS OCTAVIO SILVEIRA SANDOVAL', '2016-10-08 01:06:29', '1475910387.jpg', 'Olla de mata ortiz fina', 'Si', 'sergios'),
(1475910437, 'OLLA DE MATA ORTIZ NEGRA', 'COM-010 OLLA DE MATA ORTIZ NEGRA CON DISENOS TRADICIONALES EN COLOR BLANCO', '2016-10-08 01:07:19', '1475910437.jpg', 'Olla de mata ortiz fina', 'Si', 'sergios'),
(1475910478, 'Olla Mata Ortiz', 'Olla Mata Ortiz 2009', '2016-10-08 01:08:01', '1475910478.jpg', 'GalerÃ­a de cerÃ¡mica de Mata Ortiz', 'Si', 'sergios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios0013`
--

DROP TABLE IF EXISTS `comentarios0013`;
CREATE TABLE IF NOT EXISTS `comentarios0013` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Fecha_de_comentario` date NOT NULL,
  `Nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Mensaje` varchar(700) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios0013`
--

INSERT INTO `comentarios0013` (`id`, `Fecha_de_comentario`, `Nombre`, `Email`, `Mensaje`) VALUES
(4, '2016-10-08', 'dskfjdsk', 'dsfbks@sdjfb.com', 'finality');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emailadmins`
--

DROP TABLE IF EXISTS `emailadmins`;
CREATE TABLE IF NOT EXISTS `emailadmins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `emailadmins`
--

INSERT INTO `emailadmins` (`id`, `Nombre`, `Email`) VALUES
(4, 'Sergio', 'alejandroax@live.com.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

DROP TABLE IF EXISTS `miembros`;
CREATE TABLE IF NOT EXISTS `miembros` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Cargo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Descripcion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `UrlImagen` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `Cargo`, `Descripcion`, `UrlImagen`) VALUES
(116, 'Director', 'Orgulloso director de Casart desde el aÃ±o 2014, contibuyendo al desarrollo de proyectos en Casart.', '1475908244.jpg'),
(117, NULL, NULL, '1475908453.jpg'),
(118, 'Subdirectora', 'Orgullosa director de Casart desde el aÃ±o 2014, contibuyendo al desarrollo de proyectos en Casart.', '1475908488.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `Descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `UrlImagenBig` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `UrlImagenSmall` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `LinkTo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slideshow`
--

INSERT INTO `slideshow` (`id`, `Titulo`, `Descripcion`, `UrlImagenBig`, `UrlImagenSmall`, `LinkTo`) VALUES
(38, 'Artesania Chihuahuense', 'Conoce las bellas artesanÃ­as que se realizan en el estado grande.', '1475904548.jpg', '1475904548B.jpg', 'Cesteria Tarahumara'),
(39, 'Alfareria Tarahumara', 'Chihuahua es pilar en el diseÃ±o y creaciÃ³n de esta bella artesanÃ­a Chihuahuense', '1475908943.jpg', '1475908943B.jpg', 'Alfareria Tarahumara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `USER` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `PW` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `USER` (`USER`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Nombre`, `Apellido`, `USER`, `PW`, `Rol`) VALUES
(62, 'Sergio', 'Paz', 'sergios', 'alex.123', 'Administrador');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
