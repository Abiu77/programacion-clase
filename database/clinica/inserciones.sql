-- Inserciones en la tabla Paciente
INSERT INTO Paciente (nombre, apellido, fecha_nacimiento, genero, direccion, telefono, correo_electronico)
VALUES
('Juan', 'Pérez', '1990-05-15', 'Masculino', 'Calle 123, Ciudad', '123-456-7890', 'juan.perez@email.com'),
('Ana', 'Gómez', '1985-08-22', 'Femenino', 'Av. Principal 456, Ciudad', '456-789-0123', 'ana.gomez@email.com'),
('Luis', 'Martínez', '1988-03-10', 'Masculino', 'Calle 789, Ciudad', '789-012-3456', 'luis.martinez@email.com'),
('María', 'López', '1992-12-05', 'Femenino', 'Av. Secundaria 789, Ciudad', '234-567-8901', 'maria.lopez@email.com'),
('Carlos', 'Sánchez', '1982-06-18', 'Masculino', 'Calle 456, Ciudad', '567-890-1234', 'carlos.sanchez@email.com'),
('Laura', 'Fernández', '1995-09-30', 'Femenino', 'Av. Nueva 012, Ciudad', '678-901-2345', 'laura.fernandez@email.com'),
('Pedro', 'González', '1980-02-25', 'Masculino', 'Calle 789, Ciudad', '789-012-3456', 'pedro.gonzalez@email.com'),
('Sofía', 'Ramírez', '1987-07-12', 'Femenino', 'Av. Principal 567, Ciudad', '890-123-4567', 'sofia.ramirez@email.com'),
('Miguel', 'Hernández', '1993-04-15', 'Masculino', 'Calle 234, Ciudad', '901-234-5678', 'miguel.hernandez@email.com'),
('Elena', 'Díaz', '1984-11-20', 'Femenino', 'Av. Nueva 345, Ciudad', '123-234-5678', 'elena.diaz@email.com');

-- Inserciones en la tabla Doctores
INSERT INTO Doctores (nombre, apellido, especialidad, telefono, correo_electronico)
VALUES
('Dr. Martínez', 'García', 'Cardiología', '789-012-3456', 'martinez.garcia@email.com'),
('Dra. Rodríguez', 'López', 'Dermatología', '234-567-8901', 'rodriguez.lopez@email.com'),
('Dr. González', 'Hernández', 'Pediatría', '567-890-1234', 'gonzalez.hernandez@email.com'),
('Dra. Sánchez', 'Ramírez', 'Ginecología', '678-901-2345', 'sanchez.ramirez@email.com'),
('Dr. Díaz', 'Martínez', 'Ortopedia', '890-123-4567', 'diaz.martinez@email.com'),
('Dra. Fernández', 'Gómez', 'Oftalmología', '901-234-5678', 'fernandez.gomez@email.com'),
('Dr. Ramírez', 'Sánchez', 'Neurología', '123-234-5678', 'ramirez.sanchez@email.com'),
('Dra. Pérez', 'Díaz', 'Endocrinología', '234-567-8901', 'perez.diaz@email.com'),
('Dr. López', 'Fernández', 'Urología', '345-678-9012', 'lopez.fernandez@email.com'),
('Dra. Martínez', 'Gómez', 'Psiquiatría', '456-789-0123', 'martinez.gomez@email.com');

-- Inserciones en la tabla ResultadosExamenes
INSERT INTO ResultadosExamenes (id_paciente, id_doctor, tipo_examen, resultado, fecha_resultado)
VALUES
(1, 1, 'Análisis de sangre', 'Normal', '2023-01-15'),
(2, 2, 'Radiografía', 'Sin anomalías', '2023-01-16'),
(3, 3, 'Tomografía computarizada', 'Posible infección', '2023-01-17'),
(4, 4, 'Electroencefalograma', 'Normal', '2023-01-18'),
(5, 5, 'Ecocardiograma', 'Función cardíaca normal', '2023-01-19'),
(6, 6, 'Pruebas de glucosa', 'Diabetes tipo 2', '2023-01-20'),
(7, 7, 'Espirografía', 'Capacidad pulmonar reducida', '2023-01-21'),
(8, 8, 'Resonancia magnética', 'Sin anomalías', '2023-01-22'),
(9, 9, 'Radiografía', 'Fractura consolidada', '2023-01-23'),
(10, 10, 'Pruebas de alergia', 'Alergia a los mariscos', '2023-01-24');
