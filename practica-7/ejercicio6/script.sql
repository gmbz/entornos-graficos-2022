CREATE DATABASE `base2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `codigoCurso` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno1', 1, "alumno1@gmail.com");
INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno2', 1, "alumno2@gmail.com");
INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno3', 1, "alumno3@gmail.com");
INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno4', 2, "alumno4@gmail.com");
INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno5', 2, "alumno5@gmail.com");
INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno6', 3, "alumno6@gmail.com");
INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno7', 3, "alumno7@gmail.com");
INSERT INTO `alumnos` (`nombre`, `codigoCurso`, `email`) VALUES ('Alumno8', 3, "alumno8@gmail.com");

select * from alumnos;

