CREATE DATABASE IF NOT EXISTS academia3 DEFAULT CHARACTER SET utf8;
USE academia3;

CREATE TABLE IF NOT EXISTS estudiante (
  id_estudiante INT NOT NULL,
  nombre VARCHAR(45) NOT NULL,
  fecha_alta DATE NOT NULL,
  ciudad_residencia VARCHAR(45) NOT NULL,
  contrasena VARCHAR(45) NOT NULL,
  estudios VARCHAR(45) NULL,
  id_cursos_comprados INT NOT NULL,
  email VARCHAR(45) NOT NULL,
  login_id_usuario INT NOT NULL,
  PRIMARY KEY (id_estudiante));

CREATE TABLE IF NOT EXISTS profesor (
  id_profesor INT NOT NULL,
  nombreProfesor VARCHAR(45) NOT NULL,
  fecha_alta DATE NOT NULL,
  especialidad VARCHAR(45) NOT NULL,
  contraseña VARCHAR(45) NOT NULL,
  foto VARCHAR(45) NOT NULL,
  valoracion DECIMAL NOT NULL,
  email VARCHAR(45) NOT NULL,
  login_id_usuario INT NOT NULL,
  PRIMARY KEY (id_profesor));

CREATE TABLE IF NOT EXISTS curso (
  id_curso INT NOT NULL,
  id_profesor INT NOT NULL,
  nombre_curso VARCHAR(45) NOT NULL,
  precio DECIMAL(3) NOT NULL,
  duracion DECIMAL(4) NOT NULL,
  lecciones_curso INT NOT NULL,
  valoracion DECIMAL NOT NULL,
  PRIMARY KEY (id_curso),
    FOREIGN KEY (id_profesor),
    REFERENCES profesor (id_profesor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS compras(
  id_estudiante INT NOT NULL,
  id_curso INT NOT NULL,
  fecha DATE NOT NULL,
  precio DECIMAL NOT NULL,
  PRIMARY KEY (id_curso, id_estudiante),
    FOREIGN KEY (id_estudiante),
    REFERENCES estudiante (id_estudiante)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (id_curso),
    REFERENCES curso (id_curso)
	FOREIGN KEY (precio),
    REFERENCES curso (precio)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS factura (
  id_factura INT NOT NULL AUTO_INCREMENT,
  fecha_compra DATE NOT NULL,
  compras_estudiante_id_estudiante INT NOT NULL,
  compras_curso_id_curso INT NOT NULL,
  PRIMARY KEY (id_factura, compras_estudiante_id_estudiante, compras_curso_id_curso),
    FOREIGN KEY (compras_estudiante_id_estudiante, compras_curso_id_curso)
    REFERENCES compras (id_estudiante, id_curso)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS pregunta_respuesta (
  id_pregunta INT NOT NULL AUTO_INCREMENT,
  id_estudiante INT NOT NULL,
  id_profesor INT NOT NULL,
  texto_respuesta VARCHAR(45) NOT NULL,
  texto_pregunta VARCHAR(45) NOT NULL,
  fecha_pregunta DATE NOT NULL,
  fecha_respuesta DATE NOT NULL,
  PRIMARY KEY (pregunta, idEstudiante, idProfesor),
    FOREIGN KEY (idEstudiante)
    REFERENCES estudiante (id_estudiante)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (idProfesor)
    REFERENCES profesor (id_profesor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS interacciones (
  idInteracciones INT NOT NULL,
  fecha DATETIME NOT NULL,
  texto VARCHAR(45) NOT NULL,
  pregunta_respuesta_id INT NOT NULL,
  pregunta_respuesta_idUsuario INT NOT NULL,
  pregunta_respuesta_idProfesor INT NOT NULL,
  PRIMARY KEY (idInteracciones),
    FOREIGN KEY (pregunta_respuesta_id , pregunta_respuesta_idUsuario, pregunta_respuesta_idProfesor)
    REFERENCES pregunta_respuesta (pregunta, idEstudiante, idProfesor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE IF NOT EXISTS rol_admin (
  rol INT NOT NULL,
  id_estudiante INT NOT NULL,
  id_profesor INT NOT NULL,
  PRIMARY KEY (rol),
    FOREIGN KEY (id_estudiante)
    REFERENCES estudiante (id_estudiante)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (id_profesor)
    REFERENCES profesor (id_profesor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);