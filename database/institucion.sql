CREATE DATABASE institucion;
USE institucion;

CREATE TABLE grado (
	idgrado INT PRIMARY KEY AUTO_INCREMENT,
    grado VARCHAR(45),
    seccion VARCHAR(2),
    tutor VARCHAR(75)
);

CREATE TABLE estudiante (
	idestudiante INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(75),
    apellido VARCHAR(55),
    dni INT,
    codigo_est VARCHAR(20),
    idgrado INT,
    FOREIGN KEY (idgrado) REFERENCES grado (idgrado)
);

CREATE TABLE asistencia (
	idasistencia INT PRIMARY KEY,
    inasist_justificada VARCHAR(2),
    inasist_injustificada VARCHAR(2),
    tar_justificada VARCHAR(2),
    idestudiante INT,
    FOREIGN KEY(idestudiante) REFERENCES estudiante(idestudiante)
);