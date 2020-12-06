CREATE DATABASE academiatfg;
USE academiatfg;

DROP TABLE IF EXISTS alumno;
CREATE TABLE IF NOT EXISTS alumno (
  id_Estudiante int(11) NOT NULL AUTO_INCREMENT,
  Usuarios_idUsuarios int(45) NOT NULL,
  estudios varchar(45) NOT NULL,
  nombre varchar(45) NOT NULL,
  PRIMARY KEY (id_Estudiante),
  KEY Usuarios_IdUsuarios (Usuarios_idUsuarios)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



INSERT INTO alumno (id_Estudiante, Usuarios_idUsuarios, estudios, nombre) VALUES
(1, 0, 'Pocos', 'pepin'),
(2, 21, 'muchos', 'Carmen Aria'),
(3, 22, 'pocos', 'Leon'),
(4, 23, 'Los mios', 'Yo mismo');





DROP TABLE IF EXISTS comentarios;
CREATE TABLE IF NOT EXISTS comentarios (
  idComentarios int(11) NOT NULL AUTO_INCREMENT,
  curso_idcurso int(11) NOT NULL,
  comentario varchar(45) NOT NULL,
  respuesta varchar(45) NOT NULL DEFAULT '0',
  fecha datetime NOT NULL,
  Usuarios_idUsuarios int(11) NOT NULL,
  PRIMARY KEY (idComentarios,curso_idcurso),
  KEY curso_idcurso (curso_idcurso),
  KEY Usuarios_idUsuarios (Usuarios_idUsuarios)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;




INSERT INTO comentarios (idComentarios, curso_idcurso, comentario, respuesta, fecha, Usuarios_idUsuarios) VALUES
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
(26, 2, ' Hola me gusta este curso', '0', '2020-06-18 05:45:01', 22);


DROP TABLE IF EXISTS curso;
CREATE TABLE IF NOT EXISTS curso (
  idcurso int(11) NOT NULL AUTO_INCREMENT,
  Profesor_Usuarios_idUsuarios int(11) NOT NULL,
  nombre varchar(45) NOT NULL,
  precio decimal(3,0) NOT NULL,
  duracion decimal(4,0) NOT NULL,
  descripcion text NOT NULL,
  foto varchar(45) NOT NULL,
  lecciones int(11) NOT NULL,
  valoracion int(11) NOT NULL,
  PRIMARY KEY (idcurso),
  KEY Profesor_Usuarios_idUsuarios (Profesor_Usuarios_idUsuarios)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


INSERT INTO curso (idcurso, Profesor_Usuarios_idUsuarios, nombre, precio, duracion, descripcion, foto, lecciones, valoracion) VALUES
(1, 1, 'Diseño', '0', '10', 'spkfjbrkgzdoigzfigzlhgbhfzsgzgzduhghozifdgohzghzohgxdoihgxhioghxozrlgr', 'Diseno', 5, 10),
(2, 1, 'Patronaje', '0', '6', 'asdasdasdasdaas', 'Patronaje', 6, 10),
(3, 1, 'Modelaje', '0', '10', 'jdkfgldhkfgldhgjfhgfdghdigkhdghzkhgdkgzdkhlgzkhjkklhgktzhkgdhkgzdkhblghgxkldbklxdkbxkblxblkh', 'Modelaje', 8, 10),
(4, 1, 'Corte y confección', '0', '14', 'kjsgklrgiohdssghjhvrthmiohuohstuvmouoityvgowyitmongiysmiuoziyr yo ieiyvanger y n iungiyn nng', 'CorteYConfeccion', 10, 10);



DROP TABLE IF EXISTS cursos_adquiridos;
CREATE TABLE IF NOT EXISTS cursos_adquiridos (
  Alumno_Usuarios_idUsuarios int(11) NOT NULL,
  curso_idcurso int(11) NOT NULL,
  PRIMARY KEY (Alumno_Usuarios_idUsuarios,curso_idcurso),
  KEY curso_idcurso (curso_idcurso),
  KEY Alumno_Usuarios_idUsuarios (Alumno_Usuarios_idUsuarios)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO cursos_adquiridos (Alumno_Usuarios_idUsuarios, curso_idcurso) VALUES
(1, 1),
(2, 1),
(21, 0),
(21, 1),
(22, 0),
(22, 1),
(22, 2),
(22, 4);


DROP TABLE IF EXISTS factura;
CREATE TABLE IF NOT EXISTS factura (
  fecha_compra datetime NOT NULL,
  precio decimal(3,0) NOT NULL,
  cursos_adquiridos_Alumno_Usuarios_idUsuarios int(11) NOT NULL,
  cursos_adquiridos_curso_idcurso int(11) NOT NULL,
  cursos_adquiridos_curso_Profesor_Usuarios_idUsuarios int(11) NOT NULL,
  KEY cursos_adquiridos_Alumno_Usuarios_idUsuarios (cursos_adquiridos_Alumno_Usuarios_idUsuarios,cursos_adquiridos_curso_idcurso,cursos_adquiridos_curso_Profesor_Usuarios_idUsuarios)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS profesor;
CREATE TABLE IF NOT EXISTS profesor (
  idProfesor int(11) NOT NULL AUTO_INCREMENT,
  Usuarios_idUsuarios int(45) NOT NULL,
  valoracion int(11) NOT NULL,
  foto varchar(45) NOT NULL,
  especialidad varchar(45) NOT NULL,
  nombre varchar(45) NOT NULL,
  PRIMARY KEY (idProfesor),
  KEY Usuarios_IdUsuarios (Usuarios_idUsuarios)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;



INSERT INTO profesor (idProfesor, Usuarios_idUsuarios, valoracion, foto, especialidad, nombre) VALUES
(1, 0, 10, 'foo', 'calipos', 'pepesito');


DROP TABLE IF EXISTS usuarios;
CREATE TABLE IF NOT EXISTS usuarios (
  idUsuarios int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(45) NOT NULL,
  foto varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  contrasena varchar(60) NOT NULL,
  PRIMARY KEY (idUsuarios)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;


INSERT INTO usuarios (idUsuarios, nombre, foto, email, contrasena) VALUES
(1, 'pepesito', 'profesor.png', 'pepe@gmail.com', '$2y$10$Thu/ErUnl7AN8.uxt/1tEeYAmlbNBCSN/InYkg8eGK97NVLXAuN/W'),
(2, 'pepin', 'alumno.png', 'pepin@gmail.com', '$2y$10$iZ7NZU2LxyULqNEk7VRtzebD9X4JGPoLDv6LTSvhYEs7/clO4U1j2'),
(21, 'Carmen Aria', 'alumno.png', 'carmen@gmail.com', '$2y$10$VqCMVDmXPiN75WKOQh2KVOBWYkY46VN1EbYz4wUrBu12Uah8lWHIa'),
(22, 'Leon', 'alumno.png', 'leon@gmail.com', '$2y$10$c17h92WEwKmLa78sLQE5KudU9iI4lpDh5ZihoN8zH.vAFGT2qMpna'),
(23, 'Yo mismo', 'alumno.png', 'yo@gmail.com', '$2y$10$Xwjz0XYUhFWLrjLiKvQWVetp969XcfcVctz.vGN27J6lOUAXDaz3q');
COMMIT;

