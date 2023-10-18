-- Active: 1697503185827@@localhost@3306

USE miapp;

USE miapp;

CREATE TABLE
    VENTA(
        ID_VENTA INT NOT NULL AUTO_INCREMENT,
        ID_USUARIO INT NOT NULL,
        FECHA_VENTA DATE NOT NULL,
        CLIENTE VARCHAR(50) NOT NULL,
        IMPORTE INT NOT NULL,
        PRIMARY KEY(ID_VENTA)
    );

CREATE TABLE
    DETALLE_VENTA(
        ID_DETALLE INT NOT NULL AUTO_INCREMENT,
        ID_VENTA INT NOT NULL,
        ID_PRODUCTOS INT NOT NULL,
        CANT INT NOT NULL,
        PRECIO_UNITARIO INT NOT NULL,
        SUB_TOTAL INT NOT NULL,
        PRIMARY KEY(ID_DETALLE)
    );

CREATE TABLE
    PRODUCTOS(
        ID_PRODUCTO INT NOT NULL AUTO_INCREMENT,
        CODIGO_PRODUCTO VARCHAR(20) NOT NULL,
        NOMBRE_PRODUCTO VARCHAR(20) NOT NULL,
        CATEGORIA VARCHAR(20) NOT NULL,
        FECHA_INGRESO DATE NOT NULL,
        PRECIO_COMPRA INT NOT NULL,
        PRECIO_VENTA INT NOT NULL,
        STOCK INT NOT NULL,
        PRIMARY KEY(ID_PRODUCTO)
    );

CREATE TABLE
    USUARIO(
        ID_USUARIO INT NOT NULL AUTO_INCREMENT,
        NOMBRE_USUARIO VARCHAR(30) NOT NULL UNIQUE,
        USUARIO VARCHAR(20) NOT NULL UNIQUE,
        CLAVE VARBINARY(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        PRIMARY KEY(ID_USUARIO)
    );

SELECT * FROM productos;

ALTER TABLE PRODUCTOS AUTO_INCREMENT = 1;

DELETE FROM PRODUCTOS;

INSERT INTO
    PRODUCTOS(
        CODIGO_PRODUCTO,
        NOMBRE_PRODUCTO,
        CATEGORIA,
        FECHA_INGRESO,
        PRECIO_COMPRA,
        PRECIO_VENTA,
        STOCK
    )
VALUES (
        "20231001001",
        "LECHE",
        "ENBASADO",
        "2023-05-09",
        3.00,
        5.00,
        10
    ), (
        "20231001002",
        "LEVADURA",
        "GRANOS SEMILLAS",
        "2023-06-05",
        3.00,
        5.00,
        30
    ), (
        "20231001003",
        "HUEVOS",
        "ENBASADO",
        "2023-08-18",
        1.00,
        5.00,
        100
    ), (
        "20231001004",
        "HARINA",
        "BOLSAS",
        "2023-08-20",
        3.00,
        5.00,
        50
    ), (
        "20231001005",
        "ARROZ",
        "BOLSAS",
        "2023-08-22",
        2.00,
        4.00,
        50
    );

INSERT INTO
    USUARIO(
        NOMBRE_USUARIO,
        USUARIO,
        CLAVE,
        EMAIL
    )
VALUES (
        "admin",
        "admin",
        "12345678",
        "admin@gmail.com"
    );

INSERT INTO
    VENTA(
        ID_USUARIO,
        FECHA_VENTA,
        CLIENTE,
        IMPORTE
    )
VALUES (1, '2023-10-16', "Alipio", 100);

INSERT INTO
    DETALLE_VENTA(
        ID_VENTA,
        ID_PRODUCTOS,
        CANT,
        PRECIO_UNITARIO,
        SUB_TOTAL
    )
VALUES (1, 1, 20, 5, 100);