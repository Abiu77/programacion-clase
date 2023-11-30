CREATE DATABASE tarea1;
USE tarea1;

CREATE TABLE user (
	iduser INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR (20),
    email VARCHAR(20),
    contraseña VARCHAR(20)
);

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

CREATE TABLE modo_pago(
	idmodo_pago INT PRIMARY KEY AUTO_INCREMENT,
    idfactura INT,
    idcliente INT,
    efectivo VARCHAR(20),
    tarjeta VARCHAR(20),
    yape VARCHAR(20)
);

CREATE TABLE factura(
	idfactura INT PRIMARY KEY AUTO_INCREMENT,
    idcliente INT,
    idmodo_pago INT,
    ruc VARCHAR(20),
    DNI CHAR(8),
    numero VARCHAR(20),
    fecha_emision DATE,
    FOREIGN KEY (idcliente) REFERENCES cliente(idcliente),
    FOREIGN KEY (idmodo_pago) REFERENCES modo_pago(idmodo_pago)
);

CREATE TABLE categoria(
	idcategoria INT PRIMARY KEY AUTO_INCREMENT, 
    nombre VARCHAR(50),
    descripcion VARCHAR(100)
);

CREATE TABLE producto(
	idproducto INT PRIMARY KEY AUTO_INCREMENT,
    idcategoria INT,
    nombre VARCHAR(50),
    precio FLOAT,
    stock INT,
    FOREIGN KEY (idcategoria) REFERENCES categoria(idcategoria)
);

CREATE TABLE detalle(
	iddetalle INT PRIMARY KEY AUTO_INCREMENT,
    idfactura INT,
    idproducto INT,
    cantidad INT,
    precio float,
    FOREIGN KEY (idfactura) REFERENCES factura(idfactura),
    FOREIGN KEY (idproducto) REFERENCES producto(idproducto)
);
