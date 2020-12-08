CREATE DATABASE IF NOT EXISTS `empresa` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;

USE `empresa`;

CREATE TABLE IF NOT EXISTS `empleados` (
  `id` INT unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(50) NOT NULL,
  `hashpass` varchar(255) NOT NULL,
  `email` varchar(25) UNIQUE NOT NULL,
  `genero` varchar(10),
  `pais` varchar(25) NOT NULL,
  `salario` float NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO empleados (nombre,hashpass,email,genero,pais,salario) VALUES 
('JUAN ORTIZ','$2a$10$xmT.Zm9p0waQcrnZtvIihuknO4c.A9gsrvaBTdHpPt9fWfaOzPphG','juan.ortiz@gmail.com','masculino','España',40000),
('GEMA SUAREZ','$2a$10$eMzpRvh2nxdGnMas4GytqOWKRzJqtVYvLKQFD78Rkxd0ZphHLdpn2','gsuarez@hotmail.es','femenino','Portugal',40000),
('LOURDES ANTUNEZ','$2a$10$mLO/Kdc67qc7/Vgnm0XYA.1mlf8qfmF/20E73gt.J5DicnU9V44di','lourdes.antunez@gmail.com','femenino','España',30000);
COMMIT;
