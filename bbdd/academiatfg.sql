-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-06-2020 a las 17:52:26
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.18

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
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `id_Estudiante` int(11) NOT NULL,
  `estudios` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Usuarios_idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idComentarios` int(11) NOT NULL AUTO_INCREMENT,
  `curso_idcurso` int(11) NOT NULL,
  `comentario` varchar(45) NOT NULL,
  `respuesta` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idComentarios`,`curso_idcurso`),
  KEY `curso_idcurso` (`curso_idcurso`),
  KEY `Usuarios_idUsuarios` (`Usuarios_idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL,
  `Profesor_Usuarios_idUsuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(3,0) NOT NULL,
  `duracion` decimal(4,0) NOT NULL,
  `lecciones` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `descripcion` int(100) NOT NULL,
  PRIMARY KEY (`idcurso`,`Profesor_Usuarios_idUsuarios`),
  KEY `Profesor_Usuarios_idUsuarios` (`Profesor_Usuarios_idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_adquiridos`
--

DROP TABLE IF EXISTS `cursos_adquiridos`;
CREATE TABLE IF NOT EXISTS `cursos_adquiridos` (
  `Alumno_Usuarios_idUsuarios` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  `curso_Profesor_Usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`Alumno_Usuarios_idUsuarios`,`curso_idcurso`,`curso_Profesor_Usuarios_idUsuarios`),
  KEY `curso_idcurso` (`curso_idcurso`,`curso_Profesor_Usuarios_idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Usuarios_idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Usuarios_idUsuarios`, `idProfesor`, `valoracion`, `foto`, `especialidad`, `nombre`) VALUES
(10, 1, 10, 'tres.png', 'corte', 'Carlos Andres Ospina'),
(20, 2, 10, 'dos.png', 'camisetas', 'Sofia Ospina de San Juan'),
(30, 3, 10, 'cuatro.png', 'tijeras', 'Fabian Ospina San Juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`) VALUES
(10),
(20),
(30);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`curso_idcurso`) REFERENCES `curso` (`idcurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`Profesor_Usuarios_idUsuarios`) REFERENCES `profesor` (`Usuarios_idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cursos_adquiridos`
--
ALTER TABLE `cursos_adquiridos`
  ADD CONSTRAINT `cursos_adquiridos_ibfk_1` FOREIGN KEY (`Alumno_Usuarios_idUsuarios`) REFERENCES `alumno` (`Usuarios_idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cursos_adquiridos_ibfk_2` FOREIGN KEY (`curso_idcurso`,`curso_Profesor_Usuarios_idUsuarios`) REFERENCES `curso` (`idcurso`, `Profesor_Usuarios_idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`cursos_adquiridos_Alumno_Usuarios_idUsuarios`,`cursos_adquiridos_curso_idcurso`,`cursos_adquiridos_curso_Profesor_Usuarios_idUsuarios`) REFERENCES `cursos_adquiridos` (`Alumno_Usuarios_idUsuarios`, `curso_idcurso`, `curso_Profesor_Usuarios_idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
