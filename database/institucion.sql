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

CREATE TABLE conclucion_descriptiva(
	idconclucion_descriptiva INT PRIMARY KEY,
  idestudiante INT,
  idpersona INT,
  descripcion VARCHAR(85),
  periodo VARCHAR(45),
  FOREIGN KEY (idestudiante) REFERENCES estudiante (idestudiante)
);

CREATE TABLE notas_periodo(
	idperiodo INT,
  nota_periodo1 VARCHAR(45),
  nota_periodo2 VARCHAR(45),
  nota_periodo3 VARCHAR(45),
  nota_periodo4 VARCHAR(45),
  promedio_anual VARCHAR(45)
);

CREATE TABLE curso(
	idcurso INT PRIMARY KEY AUTO_INCREMENT,
  nombre_curso VARCHAR(45)
);

CREATE TABLE notas(
	idnotas INT PRIMARY KEY AUTO_INCREMENT,
  idestudiante INT,
  idcurso INT,
  nota1 DECIMAL,
  nota2 DECIMAL,
  nota3 DECIMAL,
  nota4 DECIMAL,
  promedio DECIMAL,
  idperiodo INT,
  FOREIGN KEY (idestudiante) REFERENCES estudiante (idestudiante),
  FOREIGN KEY (idcurso) REFERENCES curso (idcurso),
  FOREIGN KEY (idperiodo) REFERENCES notas_periodo(idperiodo)
);

CREATE TABLE tipo_usuario(
	idtipo_usuario INT PRIMARY KEY AUTO_INCREMENT,
  tipo VARCHAR(10)
 );

CREATE TABLE personal (
	idpersonal INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(55),
  apellidos VARCHAR(75),
  usuario VARCHAR(10),
  clave VARCHAR(8),
  idtipo_usuario INT,
  id_curso INT,
  FOREIGN KEY (idtipo_usuario) REFERENCES tipo_usuario(idtipo_usuario),
  FOREIGN KEY (id_curso) REFERENCES curso (idcurso)
);