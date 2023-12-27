DELIMITER //
CREATE PROCEDURE InsertarPaciente(
    IN p_nombre VARCHAR(50),
    IN p_apellido VARCHAR(50),
    IN p_fecha_nacimiento DATE,
    IN p_genero ENUM('Masculino', 'Femenino'),
    IN p_direccion VARCHAR(100),
    IN p_telefono VARCHAR(15),
    IN p_correo_electronico VARCHAR(50)
)
BEGIN
    INSERT INTO Paciente (nombre, apellido, fecha_nacimiento, genero, direccion, telefono, correo_electronico)
    VALUES (p_nombre, p_apellido, p_fecha_nacimiento, p_genero, p_direccion, p_telefono, p_correo_electronico);
END //
DELIMITER ;

CALL InsertarPaciente('Pablo', 'Condori', '2000-01-01', 'Masculino', 'Av. la cultura', '976 754 313', 'pablito7@email.com');


-- Este procedimiento almacenado se llama InsertarPaciente y toma parámetros correspondientes a las columnas de la tabla Paciente. 
