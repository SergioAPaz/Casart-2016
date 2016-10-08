--1.- PARA REALIZAR LA MIGRACION DEL SITIO ES NESESARIO CREAR UNA BASE DE DATOS EN PHPMYADMIN CON EL SCRIPT LATT_NOINFERIORS
--2.- PASAR LAS IMAGENES DE PHPCATALOGO/IMAGENESGALERIA (A MENOS DE QUE SE PLANEE SUBIR NUEVAS IMAGENES Y OMITIR LAS DE LA CARPETA ANTES
      --MENCIONADA, EN ESTE CASO SE DEBE TAMBIEN ELIMINAR LOS REGISTROS EN LA DATABASE QUE HAGAN MENCION A ESTA IMAGENES QUE NO SE IMPORTARAN DENTRO DEL NUEVO SITIO)
--3.-PASAR LAS IMAGES DE IMAGES/MIEMBROS (DEBEN SER SOLO 3 LAS QUE ESTEN DENTRO DE DICHA CARPETA)*/



-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2016 a las 18:44:58
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

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
  `Titulo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Descripcion` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha_alta` datetime DEFAULT NULL,
  `urlimagen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Galeria` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nuevo_producto` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `Titulo`, `Descripcion`, `Fecha_alta`, `urlimagen`, `Galeria`, `Nuevo_producto`, `Usuario`) VALUES
(1459832883, 'fff', 'fff', '2016-04-04 23:08:03', '1466136874.jpg', 'Alfareria tarahumara', 'Si', 'Modificado por q'),
(1459921378, '06067', '0606', '2016-04-05 23:42:58', '1468625609.jpg', 'Cesteria tarahumara', 'Si', 'Modificado por q'),
(1459959699, 'siiii', 'siiii', '2016-04-06 10:21:39', '1459959699.jpg', 'Cesteria tarahumara', 'No', 'Modificado por q'),
(1459989995, 'pruba final', 'final', '2016-04-06 18:46:35', '1459989995.jpg', 'Cesteria tarahumara', 'Si', 'Modificado por q'),
(1459990031, 'prueba final2', 'final', '2016-04-06 18:47:11', '1459990031.jpg', 'Instrumentos musicales', 'Si', 'Modificado por q'),
(1460092598, 'aqui 567', '56', '2016-04-07 23:16:38', '1465075962.jpg', 'Cesteria tarahumara', 'Si', 'Modificado por q'),
(1465440885, '666', 'aa', '2016-06-08 20:54:45', '1465440885.jpg', 'Textiles tarahumara', 'No', 'q'),
(1465620861, 'dsfsdf', 'sdfds-sdfdsfs', '2016-06-10 22:54:25', '1465620861.jpg', 'Articulos varios', 'No', 'q'),
(1465621206, 'GUARE DE SOTOL navojoa3', 'CES-019 GUARE DE SOTOL TIPO FRUTERO ENTRE 27 â€“ 29 cm. DE DIAMETRO', '2016-06-10 23:00:10', '1465621206.jpg', 'Articulos varios', 'Si', 'Modificado por q'),
(1465621319, 'aasfa', 'sddddd', '2016-06-10 23:02:03', '1465621319.jpg', 'Articulos varios', 'No', 'q'),
(1465621375, 'ddddd', 'ddddd', '2016-06-10 23:02:58', '1465621375.jpg', 'Articulos varios', 'No', 'q'),
(1465621514, 'ddddd', 'wwwwwwwww', '2016-06-10 23:05:18', '1465621514.jpg', 'Articulos varios', 'No', 'q'),
(1465621864, 'xsdfd', ' dfkjdffjdbhgdf', '2016-06-10 23:11:08', '1465621864.jpg', 'Instrumentos musicales', 'No', 'q'),
(1465622062, 'GUARE DE PINO vuvyyyyyy', '     CES-002 GUARE DE PINO CUADRADO CON TAPA BICOLOR ', '2016-06-10 23:14:26', '1465622062.jpg', 'Articulos varios', 'No', 'q'),
(1468628273, 'test14 ', '14', '2016-07-15 18:18:00', '1468628273.jpg', 'Olla de mata ortiz fina', 'Si', 'q'),
(1468901366, '777', 'que cosota', '2016-07-18 22:09:35', '1468901366.jpg', 'GalerÃ­a de cerÃ¡mica de Mata Ortiz', 'No', 'q'),
(1468959426, 'arcon', 'arcon', '2016-07-19 14:17:13', '1468959426.jpg', 'Arcones', 'Si', 'q'),
(1469986316, 'probando acentÃ³s jojoa', 'acÃ©nto', '2016-07-31 11:31:56', '1469986316.jpg', 'Cesteria tarahumara', 'No', 'q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios0013`
--

DROP TABLE IF EXISTS `comentarios0013`;
CREATE TABLE IF NOT EXISTS `comentarios0013` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `Fecha_de_comentario` date NOT NULL,
  `Nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mensaje` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios0013`
--

INSERT INTO `comentarios0013` (`id`, `Fecha_de_comentario`, `Nombre`, `Email`, `Mensaje`) VALUES
(112, '2016-06-08', 'Diana Paz', 'dayan3@hotmail.com', 'sjkdnfkjsnkjfs gkjdf kjdfn kjgd.\r\n\r\nputa ma.....'),
(113, '2016-06-08', 'MAyota', 'lola@dsjbfhsd.mx', 'que pedo con lola ya saquenla. jajajajajajajaja'),
(114, '2016-06-08', 'eddy ', 'dakjfds@djskjfbdsk', 'dkjsfnkjdsf hdsfjds tttt'),
(115, '2016-06-08', 'probando ultimate', 'sdkjfndsk@fjnkj', 'dbfdsjbf.'),
(116, '2016-06-08', 'probando2222', 'dakjfds@djskjfbdsk', 'kdsbfhjds'),
(117, '2016-06-08', 'dsfsd prbando 444', 'dsfds@sdlfjsfn4444444', 'dsbfhjdsbf'),
(118, '2016-06-08', 'probando 555', 'dakjfds@djskjfbdsk', 'kjdsbfjsd'),
(119, '2016-06-08', 'probando 7', 'dfklsdf@sdas', 'kjdbfhkjsf'),
(120, '2016-06-08', 'definitivo', 'alejandroax.ap@gmail.com', 'sakjfdskjbfsd hds hjds fdsjf hjdsfb jhdsf bdsjb fhdsjf bdsjbf hdsjb fhjsdb fhjsdbfj sdbfjb dsjf bdsj fjsd fjdsb fj sdj\r\n\r\nSaludos...'),
(121, '2016-06-09', 'test ale ap gmail', 'micorreito@fjndkdf', 'kjsdfjksdnfkj'),
(122, '2016-06-09', 'sdfsdfffffffff', 'fffff@fffff', 'ffff'),
(123, '2016-06-09', 'wwww', 'wwwwww@www', 'wwww'),
(124, '2016-06-09', 'sergio', 'xxxx@xxxx', 'shjdshjdbj shdbjhbd ddddd'),
(125, '2016-06-09', 'cocoa', 'mix@wix.com', 'hola.'),
(126, '2016-06-09', 'yyyy', 'yyy@yy', 'dlknds'),
(127, '2016-06-09', 'aaaaaa', 'aaaaaaaa@aaaax', 'lsdjfsdfsd'),
(128, '2016-06-09', 'test yyyy', 'yyy@yy', 'jjojoa'),
(129, '2016-06-16', 'dsbsfd', 'test@test', 'cocainaaa'),
(130, '2016-07-11', 'test despues de mina', 'minajaja@wfwrfn.com', 'quitame la hora'),
(131, '2016-07-12', 'titan4', 'fsddf@sadflns.com', 'jabfds'),
(132, '2016-07-12', 'ya sin hora despues de titan 4', 'hola@dflnd.com', 'bkjbfds'),
(133, '2016-07-11', 'titan final', 'sakjds@dsj', 'kjabfsd'),
(134, '2016-07-16', 'Cecy ornelas', '6969@cecyhottess.com', 'Hola'),
(135, '2016-07-16', 'cecy', 'chula@dsbfbhds', 'dkhfbdkhs prueba'),
(136, '2016-07-31', 'caÃ¡rro', 'dsfds@sdlfjsfn4444444.com', 'sdfknsdkÃ©kjfkdfd acento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emailadmins`
--

DROP TABLE IF EXISTS `emailadmins`;
CREATE TABLE IF NOT EXISTS `emailadmins` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

DROP TABLE IF EXISTS `miembros`;
CREATE TABLE IF NOT EXISTS `miembros` (
`id` int(5) NOT NULL AUTO_INCREMENT,
  `Cargo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `UrlImagen` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `Cargo`, `Descripcion`, `UrlImagen`) VALUES
(98, 'Elena Alicia GonzÃ¡lez DomÃ­nguez', 'Orgullosa directora de Casart Chihuahua desde el aÃ±o 2012 y ha contribuido al progreso de la casa de las artesanias trayendo a nuevos talentos de las artesanias.', '1469988939.jpg'),
(105, ' dsdf', ' sdfsd', '1469990570.jpg'),
(106, 'Gabriel Arturo Ornelas MarÃ­n', 'Orgulloso subdirector de Casart Chihuahua desde el aÃ±o 2005, ha contribuido al progreso de la casa de las artesanias trayendo a nuevos talentos y promoviendo las artesanias del estado.  ', '1469984553.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Nombre`, `Apellido`, `USER`, `PW`, `Rol`) VALUES
(58, 'fd', 'dfgdf', 'q', 'w', 'Administrador'),
(59, 'marco', 'perez', 'marcouser', 'w', 'Usuario');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
