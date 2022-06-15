CREATE DATABASE `sanatorio_x`;

CREATE TABLE `medicos_s` (
    `matricula` int(11) NOT NULL,
    `full_name` varchar(255) NOT NULL,
    `dias_consulta` varchar(255) NOT NULL,
    `especialidad` varchar(255) NOT NULL,
    PRIMARY KEY (`matricula`)
);

INSERT INTO `medicos_s`(`matricula`, `full_name`, `especialidad`, `dias_cosulta`) VALUES (1010,'Leonel Messi','Es un capo en todo','Domingo a sabado');
INSERT INTO `medicos_s`(`matricula`, `full_name`, `especialidad`, `dias_cosulta`) VALUES (1111,'Angel Di Maria','Meter goles en finales cuando no se lesiona','Domingo a sabado');
INSERT INTO `medicos_s`(`matricula`, `full_name`, `especialidad`, `dias_cosulta`) VALUES (1515,'Leandro Paredes','Mover la pelota con calidad','Domingo a sabado');
INSERT INTO `medicos_s`(`matricula`, `full_name`, `especialidad`, `dias_cosulta`) VALUES (0101,'Dibu Martinez','Comerse a los que patean los penales','Domingo a sabado');