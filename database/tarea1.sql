CREATE DATABASE tarea1;

USE tarea1;

CREATE TABLE user (
	iduser INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR (20),
    email VARCHAR(20),
    contraseña VARCHAR(20)
)