CREATE DATABASE `hotel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `huesped` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(45) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_finalizacion` date DEFAULT NULL,
  `numero_habitacion` int(11) DEFAULT NULL,
  `procedencia` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222333", "2022-05-13", "2022-05-20", 101, "Rosario", "Lionel", "Messi");
INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222444", "2022-05-13", "2022-05-20", 101, "Rosario", "Di Maria", "Angel");
INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222555", "2022-05-13", "2022-05-20", 101, "Rosario", "Ezequiel", "Lavezzi");
INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222666", "2022-05-13", "2022-05-20", 101, "Buenos Aires", "Carlos", "Tevez");
INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222777", "2022-05-13", "2022-05-20", 101, "Don Torcuato", "Roman", "Riquelme");
INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222888", "2022-05-13", "2022-05-20", 101, "La Plata", "Martin", "Palermo");
INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222999", "2022-05-13", "2022-05-20", 101, "Rosario", "Lionel2", "Messi2");
INSERT INTO `hotel`.`huesped` (`dni`, `fecha_ingreso`, `fecha_finalizacion`, `numero_habitacion`, `procedencia`, `nombre`, `apellido`) 
VALUES ("11222111", "2022-05-13", "2022-05-20", 101, "Rosario", "Lionel3", "Messi3");

select * from huesped;