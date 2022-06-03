CREATE DATABASE `compras` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) DEFAULT NULL,
  `precio` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 1", 11111.22);
INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 2", 11112.02);
INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 3", 11113.42);
INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 4", 11114.52);
INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 5", 11115.02);
INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 6", 11116);
INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 7", 11117.22);
INSERT INTO catalogo (`producto`, `precio`) VALUES ("Producto 8", 11118.22);

select * from catalogo;