CREATE DATABASE registrar;

SELECT * FROM usuarios;

DROP TABLE usuarios;

CREATE TABLE usuarios(
  id_usuarios INT AUTO_INCREMENT,
  cod_usu VARCHAR(20) COMMENT 'codigo generado por un trigger',
  username VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(30) NOT NULL COMMENT 'contraseña del usuario',
  telefono VARCHAR(20) NOT NULL,
  PRIMARY KEY(id_usuarios)
);

DELIMITER |
DROP TRIGGER IF EXISTS tabla_usuarios;
CREATE TRIGGER tabla_usuarios
  BEFORE INSERT
  ON usuarios
  FOR EACH ROW
BEGIN
  DECLARE next_id INT;
  DECLARE COD VARCHAR(20);
  SET next_id = (SELECT count(*) + 1 FROM usuarios);
  IF (next_id < 10) THEN
    SET COD = CONCAT('ERPODO0', next_id);
  ELSE
    IF (next_id < 100) THEN
  	  SET COD = CONCAT('ERPODO01-', next_id);
    END IF;
  END IF;
  SET NEW.cod_usu = COD;
END
|
DELIMITER ;