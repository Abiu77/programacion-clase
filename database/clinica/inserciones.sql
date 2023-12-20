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

-- Inserciones en la tabla Tratamientos
INSERT INTO Tratamientos (nombre, id_paciente, id_doctor)
VALUES
('Fisioterapia', 1, 1),
('Psicoterapia', 2, 2),
('Quimioterapia', 3, 3),
('Cirugía', 4, 4),
('Radioterapia', 5, 5),
('Terapia ocupacional', 6, 6),
('Rehabilitación pulmonar', 7, 7),
('Terapia cognitivo-conductual', 8, 8),
('Terapia hormonal', 9, 9),
('Terapia de pareja', 10, 10);

-- Inserciones en la tabla Examenes
INSERT INTO Examenes (nombre_examen, resultado, fecha_realizacion, id_doctor)
VALUES
('Análisis de sangre', 'Normal', '2023-02-01', 1),
('Radiografía', 'Sin anomalías', '2023-02-02', 2),
('Tomografía computarizada', 'Posible infección', '2023-02-03', 3),
('Electroencefalograma', 'Normal', '2023-02-04', 4),
('Ecocardiograma', 'Función cardíaca normal', '2023-02-05', 5),
('Pruebas de glucosa', 'Diabetes tipo 2', '2023-02-06', 6),
('Espirografía', 'Capacidad pulmonar reducida', '2023-02-07', 7),
('Resonancia magnética', 'Sin anomalías', '2023-02-08', 8),
('Radiografía', 'Fractura consolidada', '2023-02-09', 9),
('Pruebas de alergia', 'Alergia a los mariscos', '2023-02-10', 10);



-- Inserciones en la tabla SalaConsulta
INSERT INTO SalaConsulta (nombre_sala, ubicacion)
VALUES
('Sala 1', 'Planta Baja'),
('Sala 2', 'Planta Alta'),
('Sala 3', 'Planta Baja'),
('Sala 4', 'Planta Alta'),
('Sala 5', 'Planta Baja'),
('Sala 6', 'Planta Alta'),
('Sala 7', 'Planta Baja'),
('Sala 8', 'Planta Alta'),
('Sala 9', 'Planta Baja'),
('Sala 10', 'Planta Alta');

-- Inserciones en la tabla Citas
INSERT INTO Citas (id_paciente, id_doctor, id_sala_consulta, fecha_hora_cita, duracion_minutos)
VALUES
(1, 1, 1, '2023-01-10 09:00:00', 30),
(2, 2, 2, '2023-01-11 14:30:00', 45),
(3, 3, 3, '2023-01-12 11:00:00', 30),
(4, 4, 4, '2023-01-13 10:30:00', 60),
(5, 5, 5, '2023-01-14 15:00:00', 45),
(6, 6, 6, '2023-01-15 12:30:00', 30),
(7, 7, 7, '2023-01-16 13:00:00', 60),
(8, 8, 8, '2023-01-17 16:30:00', 45),
(9, 9, 9, '2023-01-18 10:00:00', 30),
(10, 10, 10, '2023-01-19 14:30:00', 45);

-- Inserciones en la tabla HistoriasClinicas
INSERT INTO HistoriasClinicas (id_paciente, observaciones)
VALUES
(1, 'Historial de alergias: ninguna'),
(2, 'Historial de enfermedades crónicas: hipertensión'),
(3, 'Historial de alergias: penicilina'),
(4, 'Historial de cirugías: apendicitis'),
(5, 'Historial de alergias: aspirina'),
(6, 'Historial de enfermedades crónicas: diabetes'),
(7, 'Historial de enfermedades crónicas: asma'),
(8, 'Historial de alergias: ninguna'),
(9, 'Historial de cirugías: fractura de pierna'),
(10, 'Historial de alergias: sulfa');

-- Inserciones en la tabla Recetas
INSERT INTO Recetas (id_paciente, id_doctor, fecha_emision)
VALUES
(1, 1, '2023-01-10'),
(2, 2, '2023-01-11'),
(3, 3, '2023-01-12'),
(4, 4, '2023-01-13'),
(5, 5, '2023-01-14'),
(6, 6, '2023-01-15'),
(7, 7, '2023-01-16'),
(8, 8, '2023-01-17'),
(9, 9, '2023-01-18'),
(10, 10, '2023-01-19');

-- Inserciones en la tabla Facturas
INSERT INTO Facturas (id_paciente, total_amount, fecha_emision)
VALUES
(1, 150.00, '2023-01-20'),
(2, 200.00, '2023-01-21'),
(3, 300.00, '2023-01-22'),
(4, 250.00, '2023-01-23'),
(5, 180.00, '2023-01-24'),
(6, 220.00, '2023-01-25'),
(7, 280.00, '2023-01-26'),
(8, 190.00, '2023-01-27'),
(9, 210.00, '2023-01-28'),
(10, 170.00, '2023-01-29');

-- Inserciones en la tabla Pagos
INSERT INTO Pagos (id_factura, monto_pago, fecha_pago)
VALUES
(1, 150.00, '2023-01-22'),
(2, 200.00, '2023-01-23'),
(3, 300.00, '2023-01-24'),
(4, 250.00, '2023-01-25'),
(5, 180.00, '2023-01-26'),
(6, 220.00, '2023-01-27'),
(7, 280.00, '2023-01-28'),
(8, 190.00, '2023-01-29'),
(9, 210.00, '2023-01-30'),
(10, 170.00, '2023-01-31');

-- Inserciones en la tabla Medicamentos
INSERT INTO Medicamentos (id_receta, id_tratamiento, nombre, descripcion, id_proveedor)
VALUES
(1, 1, 'Paracetamol', 'Analgésico y antifebril', 1),
(2, 2, 'Amoxicilina', 'Antibiótico', 2),
(3, 3, 'Ibuprofeno', 'Antiinflamatorio no esteroideo', 3),
(4, 4, 'Omeprazol', 'Inhibidor de la bomba de protones', 4),
(5, 5, 'Atorvastatina', 'Estatina para reducir el colesterol', 5),
(6, 6, 'Insulina', 'Hormona para controlar la glucosa', 6),
(7, 7, 'Metformina', 'Antidiabético oral', 7),
(8, 8, 'Losartán', 'Bloqueador de los receptores de angiotensina II', 8),
(9, 9, 'Aspirina', 'Antiagregante plaquetario', 9),
(10, 10, 'Ciprofloxacino', 'Antibiótico fluoroquinolona', 10);

-- Inserciones en la tabla EquiposMedicos
INSERT INTO EquiposMedicos (nombre_equipo, descripcion)
VALUES
('ECG', 'Electrocardiograma'),
('Rayos X', 'Equipo de radiografía'),
('Tomógrafo', 'Tomografía computarizada'),
('EEG', 'Electroencefalograma'),
('Ecocardiograma', 'Ecografía del corazón'),
('Espirografía', 'Pruebas de función pulmonar'),
('Resonancia magnética', 'Imágenes por resonancia magnética'),
('Endoscopio', 'Equipo para endoscopias'),
('Desfibrilador', 'Desfibrilador automático externo'),
('Ventilador mecánico', 'Soporte respiratorio');

-- Inserciones en la tabla SalaConsulta
INSERT INTO SalaConsulta (nombre_sala, ubicacion)
VALUES
('Sala 1', 'Planta Baja'),
('Sala 2', 'Planta Alta'),
('S
