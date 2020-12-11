-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-12-2020 a las 17:40:26
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18
CREATE DATABASE IF NOT EXISTS academiatfg;
USE academiatfg;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academiatfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(45) NOT NULL,
  `estudios` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_Estudiante`),
  KEY `Usuarios_IdUsuarios` (`Usuarios_idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_Estudiante`, `Usuarios_idUsuarios`, `estudios`, `nombre`) VALUES
(1, 0, 'Pocos', 'pepin'),
(2, 21, 'muchos', 'Carmen Aria'),
(3, 22, 'pocos', 'Leon'),
(4, 23, 'Los mios', 'Yo mismo'),
(5, 24, '', ''),
(6, 24, '', ''),
(7, 26, 'f', 'ladygaga'),
(8, 26, '', ''),
(9, 28, 'musicales', 'LadyGaga'),
(10, 29, 'durmientes', 'marmota'),
(11, 30, 'GS', 'David'),
(12, 24, '', ''),
(13, 24, '', ''),
(14, 24, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idComentarios` int(11) NOT NULL AUTO_INCREMENT,
  `curso_idcurso` int(11) NOT NULL,
  `comentario` varchar(45) NOT NULL,
  `respuesta` varchar(45) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idComentarios`,`curso_idcurso`),
  KEY `curso_idcurso` (`curso_idcurso`),
  KEY `Usuarios_idUsuarios` (`Usuarios_idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentarios`, `curso_idcurso`, `comentario`, `respuesta`, `fecha`, `Usuarios_idUsuarios`) VALUES
(1, 1, ' Hola soy pepesito', '0', '2020-06-12 21:44:40', 1),
(2, 1, ' Putos', '0', '2020-06-12 21:44:48', 1),
(3, 1, ' ASDASDFIHDGHDSGHSDHJSDFSHDFJHSF', '0', '2020-06-12 21:45:02', 1),
(4, 1, '@pepesito asSs', '3', '2020-06-12 22:03:57', 1),
(5, 1, '@pepesito ASsASs', '3', '2020-06-12 22:04:08', 1),
(6, 1, '@pepesito Tu eres mas puto', '2', '2020-06-12 22:13:23', 1),
(7, 1, '@pepesito Hola', '3', '2020-06-15 21:22:31', 1),
(8, 1, ' Soy pepin', '0', '2020-06-17 01:11:20', 2),
(9, 1, ' Soy pepin', '0', '2020-06-17 01:14:15', 2),
(10, 1, ' sdad', '0', '2020-06-17 01:14:24', 2),
(11, 0, '@pepin Hola pepito', '10', '2020-06-17 01:16:24', 2),
(12, 1, ' Pepazo soy', '0', '2020-06-17 01:24:20', 2),
(13, 0, '@pepin YO MAS', '12', '2020-06-17 01:24:34', 2),
(14, 1, ' Soy pepon', '0', '2020-06-17 01:54:33', 2),
(15, 0, '@pepin Ok', '14', '2020-06-17 01:54:46', 2),
(16, 0, '@pepin Ok', '14', '2020-06-17 01:55:45', 2),
(17, 1, '@pepin Tu madre webon', '14', '2020-06-18 04:05:45', 22),
(18, 1, '@pepin Tu madre webon', '14', '2020-06-18 04:05:56', 22),
(19, 4, ' Soy nuevo por aqui', '0', '2020-06-18 04:24:24', 22),
(20, 4, ' Soy nuevo por aqui', '0', '2020-06-18 04:31:47', 22),
(21, 4, '@Leon Yo tambien', '20', '2020-06-18 05:06:36', 22),
(22, 4, ' Hola2', '0', '2020-06-18 05:13:13', 22),
(23, 4, ' ', '0', '2020-06-18 05:23:14', 22),
(24, 4, ' ', '0', '2020-06-18 05:29:57', 22),
(25, 4, ' ', '0', '2020-06-18 05:32:55', 22),
(26, 2, ' Hola me gusta este curso', '0', '2020-06-18 05:45:01', 22),
(27, 2, ' Si a mi tambien', '0', '2020-12-04 13:08:26', 28),
(28, 2, '@Leon Genial', '26', '2020-12-04 13:31:38', 28),
(29, 3, ' Hola', '0', '2020-12-11 16:05:42', 29),
(30, 3, '@marmota Hola', '29', '2020-12-11 16:05:59', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `Profesor_Usuarios_idUsuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(3,0) NOT NULL,
  `duracion` decimal(4,0) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(45) NOT NULL,
  `lecciones` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  PRIMARY KEY (`idcurso`),
  KEY `Profesor_Usuarios_idUsuarios` (`Profesor_Usuarios_idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `Profesor_Usuarios_idUsuarios`, `nombre`, `precio`, `duracion`, `descripcion`, `foto`, `lecciones`, `valoracion`) VALUES
(1, 1, 'Diseño', '0', '10', 'El curso de Diseño de Moda sigue un hilo conductor progresivo a partir del concepto “diseño”, que permitirá aprender a seleccionar y trabajar el tejido más adecuado para cada diseño.', 'Diseno', 5, 10),
(2, 1, 'Patronaje', '0', '6', 'Si te apasiona el mundo de la moda el ciclo de Patronaje y moda es el apropiado para tí. Controla todo el proceso creativo para poder confeccionar colecciones, desde el diseño de las prendas.', 'Patronaje', 6, 10),
(3, 1, 'Modelaje', '0', '10', 'El modelaje (o moulage) es una técnica de diseño de moda que permite construir la prenda directamente sobre el cuerpo de la persona o sobre un maniquí para posteriormente obtener un patrón.', 'Modelaje', 8, 10),
(4, 1, 'Corte y confección', '0', '14', 'Dentro de la parte de confección, manejarás las diferentes técnicas de puntadas a mano y a máquina y aprenderás los diferentes métodos de corte y colocación del patrón sobre el tejido.', 'CorteYConfeccion', 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_adquiridos`
--

DROP TABLE IF EXISTS `cursos_adquiridos`;
CREATE TABLE IF NOT EXISTS `cursos_adquiridos` (
  `Alumno_Usuarios_idUsuarios` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  PRIMARY KEY (`Alumno_Usuarios_idUsuarios`,`curso_idcurso`),
  KEY `curso_idcurso` (`curso_idcurso`),
  KEY `Alumno_Usuarios_idUsuarios` (`Alumno_Usuarios_idUsuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos_adquiridos`
--

INSERT INTO `cursos_adquiridos` (`Alumno_Usuarios_idUsuarios`, `curso_idcurso`) VALUES
(1, 1),
(2, 1),
(21, 0),
(21, 1),
(22, 0),
(22, 1),
(22, 2),
(22, 4),
(28, 2),
(28, 3),
(29, 0),
(29, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `fecha_compra` datetime NOT NULL,
  `precio` decimal(3,0) NOT NULL,
  `cursos_adquiridos_Alumno_Usuarios_idUsuarios` int(11) NOT NULL,
  `cursos_adquiridos_curso_idcurso` int(11) NOT NULL,
  `cursos_adquiridos_curso_Profesor_Usuarios_idUsuarios` int(11) NOT NULL,
  KEY `cursos_adquiridos_Alumno_Usuarios_idUsuarios` (`cursos_adquiridos_Alumno_Usuarios_idUsuarios`,`cursos_adquiridos_curso_idcurso`,`cursos_adquiridos_curso_Profesor_Usuarios_idUsuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `idProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_idUsuarios` int(45) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idProfesor`),
  KEY `Usuarios_IdUsuarios` (`Usuarios_idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `Usuarios_idUsuarios`, `valoracion`, `foto`, `especialidad`, `nombre`) VALUES
(1, 0, 10, 'foo', 'calipos', 'pepesito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contrasena` varchar(60) NOT NULL,
  PRIMARY KEY (`idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombre`, `foto`, `email`, `contrasena`) VALUES
(1, 'pepesito', 'profesor.png', 'pepe@gmail.com', '$2y$10$Thu/ErUnl7AN8.uxt/1tEeYAmlbNBCSN/InYkg8eGK97NVLXAuN/W'),
(2, 'pepin', 'alumno.png', 'pepin@gmail.com', '$2y$10$iZ7NZU2LxyULqNEk7VRtzebD9X4JGPoLDv6LTSvhYEs7/clO4U1j2'),
(21, 'Carmen Aria', 'alumno.png', 'carmen@gmail.com', '$2y$10$VqCMVDmXPiN75WKOQh2KVOBWYkY46VN1EbYz4wUrBu12Uah8lWHIa'),
(22, 'Leon', 'alumno.png', 'leon@gmail.com', '$2y$10$c17h92WEwKmLa78sLQE5KudU9iI4lpDh5ZihoN8zH.vAFGT2qMpna'),
(23, 'Yo mismo', 'alumno.png', 'yo@gmail.com', '$2y$10$Xwjz0XYUhFWLrjLiKvQWVetp969XcfcVctz.vGN27J6lOUAXDaz3q'),
(24, '', 'alumno.png', '', '$2y$10$cZAMbg..ux46SVi0qfrRlOfJuHkC0hhNNjDLpZjtAyBrpzv3QodZC'),
(25, '', 'alumno.png', '', '$2y$10$GjdesidTN0fbF6cP6WwsPO3Lw4Mz4N3PNz6Uw3UKnAS9eLx9hAyQi'),
(26, 'ladygaga', 'alumno.png', '49144265g', '$2y$10$xaZ/hgHTB79QlZNs2yL8I.Wwa2n0xZvqnwQol8j5e0Op1Vr9sVkGW'),
(27, '', 'alumno.png', '49144265g', '$2y$10$xn0wtWlPk9dgX23nTiHshuKTmQR2u09wfTHN63MqnPNKCO975dy4W'),
(28, 'LadyGaga', 'alumno.png', 'gaga@gaga.com', '$2y$10$iW8D.rg2JLMebjW1PpIYjuDz5WUAXYdbx3gmfw8gVfzjFE1arg8A2'),
(29, 'tejon', 'alumno.png', 'marmota@gmail.com', '$2y$10$tYTsVekndNiFa30yD1Nt9.DrrSmKTkMq6WhlvVUd00goDWf6SsR.e'),
(30, 'David', 'alumno.png', 'davidrojascaballero94@gmail.com', 'e4db848b24'),
(31, '', 'alumno.png', '', '$2y$10$drevITphrmcpxH4hY4ptSud.R6iKiF5pxNeqoeB8pPcjZ0YYiPJ2O'),
(32, '', 'alumno.png', '', '$2y$10$Lp46A1FYrxAfUZX0EQM1Y.H9S9DLTU/29ElKkusakOS0i8Bwj1T5K'),
(33, '', 'alumno.png', '', '$2y$10$OMuNWq.dO5YGjitM1sw/8eoCqPJZHir8cuzgnsrsqJjtTirBPlMyC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
