CREATE DATABASE tarea1;

USE tarea1;

CREATE TABLE user (
	iduser INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR (20),
    email VARCHAR(20),
    contraseña VARCHAR(20)
)

CREATE TABLE cliente(
	idcliente INT PRIMARY KEY AUTO_INCREMENT,
    iduser INT,
    nombre VARCHAR(20),
    dni CHAR(8),
    correo VARCHAR(20),
    usuario VARCHAR(20),
    contraseña VARCHAR(20),
    FOREIGN KEY (iduser) REFERENCES user(iduser)
);

CREATE TABLE catalogo(
	idcatalogo INT PRIMARY KEY AUTO_INCREMENT,
    idcliente INT,
    categoria VARCHAR(20),
    descripcion VARCHAR(20),
    FOREIGN KEY (idcliente) REFERENCES cliente(idcliente)
);

CREATE TABLE tienda(
	idtienda INT PRIMARY KEY AUTO_INCREMENT,
    idcatalogo INT,
    idcliente INT,
    productos VARCHAR(20),
    categorias VARCHAR(20),
    sucursales VARCHAR(20),
    FOREIGN KEY (idcliente) REFERENCES cliente(idcliente),
    FOREIGN KEY (idcatalogo) REFERENCES catalogo(idcatalogo)
);