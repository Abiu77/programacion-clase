CREATE DATABASE institucion;
USE institucion;

CREATE TABLE grado (
	idgrado INT PRIMARY KEY AUTO_INCREMENT,
    grado VARCHAR(45),
    seccion VARCHAR(2),
    tutor VARCHAR(75)
);