CREATE DATABASE `prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `buscador` (
  `cancion` varchar(45) NOT NULL,
  PRIMARY KEY (`cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO buscador(cancion) VALUES ("Cancion1");
INSERT INTO buscador(cancion) VALUES ("Cancion2");
INSERT INTO buscador(cancion) VALUES ("Cancion3");
INSERT INTO buscador(cancion) VALUES ("Cancion4");
INSERT INTO buscador(cancion) VALUES ("Cancion5");
INSERT INTO buscador(cancion) VALUES ("Cancion6");
INSERT INTO buscador(cancion) VALUES ("Cancion7");
INSERT INTO buscador(cancion) VALUES ("Cancion8");
INSERT INTO buscador(cancion) VALUES ("Cancion9");
INSERT INTO buscador(cancion) VALUES ("Cancion10");

select * from buscador;


