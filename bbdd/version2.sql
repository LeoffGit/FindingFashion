CREATE DATABASE IF NOT EXISTS academia2 DEFAULT CHARACTER SET utf8;
USE academia2;

CREATE TABLE IF NOT EXISTS usuarios(
   id_usuario INT NOT NULL,
   email VARCHAR(45) NOT NULL,
   fecha_alta DATE NOT NULL,
   contrasena VARCHAR(45) NOT NULL,
   nombre VARCHAR(45) NOT NULL,
   ciudad_residencia VARCHAR(45) NULL,
  PRIMARY KEY (id_usuario))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS estudiante(
   id_usuario INT NOT NULL,
   id_estudiante INT NOT NULL,
   estudios VARCHAR(45) NULL,
  PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario)
    REFERENCES usuarios (id_usuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS profesor(
   id_usuario INT NOT NULL,
   id_profesor INT NOT NULL,
   especialidad VARCHAR(45) NOT NULL,
   foto  VARCHAR(45) NOT NULL,
   valoracion  DECIMAL NOT NULL,
  PRIMARY KEY (id_usuario),
    FOREIGN KEY (id_usuario)
    REFERENCES usuarios (id_usuario )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS curso(
   id_curso INT NOT NULL,
   id_profesor INT NOT NULL,
   nombre VARCHAR(45) NOT NULL,
   precio DECIMAL(3) NOT NULL,
   duracion DECIMAL(4) NOT NULL,
   lecciones_curso INT NOT NULL,
   valoracion DECIMAL NOT NULL,
  PRIMARY KEY (id_curso),
  FOREIGN KEY (id_profesor)
    REFERENCES profesor (id_profesor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS cursos_en_propiedad(
   id_estudiante INT NOT NULL,
   id_curso INT NOT NULL,
   fecha DATE NOT NULL,
   precio DECIMAL NOT NULL,
  PRIMARY KEY (id_curso, id_estudiante ),
  FOREIGN KEY (id_estudiante )
    REFERENCES estudiante (id_estudiante)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (id_curso)
    REFERENCES curso (id_curso)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS factura(
   id_factura INT NOT NULL,
   id_estudiante INT NOT NULL,
   id_curso INT NOT NULL,
   fecha_compra DATE NOT NULL,
  PRIMARY KEY (id_factura, id_estudiante, id_curso ),
  FOREIGN KEY (id_estudiante, id_curso )
    REFERENCES cursos_en_propiedad (id_estudiante, id_curso )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS pregunta_respuesta(
   id_pregunta INT NOT NULL AUTO_INCREMENT,
   id_estudiante INT NOT NULL,
   id_profesor INT NOT NULL,
   texto_respuesta VARCHAR(45) NOT NULL,
   texto_pregunta VARCHAR(45) NOT NULL,
   fecha_pregunta DATE NOT NULL,
   fecha_respuesta DATE NOT NULL,
  PRIMARY KEY (id_pregunta, id_estudiante, id_profesor),
    FOREIGN KEY (id_estudiante)
    REFERENCES estudiante (id_estudiante)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (id_profesor)
    REFERENCES profesor (id_profesor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS interacciones(
  id_interacciones INT NOT NULL,
  fecha DATETIME NOT NULL,
  texto VARCHAR(45) NOT NULL,
  id_pregunta INT NOT NULL,
  id_estudiante INT NOT NULL,
  id_profesor INT NOT NULL,
  PRIMARY KEY (id_interacciones),
    FOREIGN KEY (id_pregunta, id_estudiante, id_profesor )
    REFERENCES pregunta_respuesta (id_pregunta, id_estudiante, id_profesor)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;