-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS clinicaAbiu;

-- Seleccionar la base de datos
USE clinicaAbiu;

-- Crear la tabla Paciente
CREATE TABLE Paciente (
    id_paciente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    fecha_nacimiento DATE,
    genero ENUM('Masculino', 'Femenino', 'Otro'),
    direccion VARCHAR(100),
    telefono VARCHAR(15),
    correo_electronico VARCHAR(50)
);

-- Crear la tabla Doctores
CREATE TABLE Doctores (
    id_doctor INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    especialidad VARCHAR(50),
    telefono VARCHAR(15),
    correo_electronico VARCHAR(50)
);

-- Crear la tabla ResultadosExamenes
CREATE TABLE ResultadosExamenes (
    id_resultado_examen INT PRIMARY KEY AUTO_INCREMENT,
    id_paciente INT,
    id_doctor INT,
    tipo_examen VARCHAR(50),
    resultado TEXT,
    fecha_resultado DATE,
    FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente),
    FOREIGN KEY (id_doctor) REFERENCES Doctores(id_doctor)
);

-- Crear la tabla Tratamientos
CREATE TABLE Tratamientos (
    id_tratamiento INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    id_paciente INT,
    id_doctor INT,
    FOREIGN KEY(id_paciente) REFERENCES Paciente(id_paciente),
    FOREIGN KEY(id_doctor) REFERENCES Doctores(id_doctor)
);

CREATE TABLE Examenes (
    id_examen INT PRIMARY KEY,
    nombre_examen VARCHAR(100),
    resultado VARCHAR(255),
    fecha_realizacion DATE,
    id_doctor INT,
    FOREIGN KEY (id_doctor) REFERENCES Doctores(id_doctor)
);

-- Crear la tabla SalaConsulta
CREATE TABLE SalaConsulta (
    id_sala_consulta INT PRIMARY KEY AUTO_INCREMENT,
    nombre_sala VARCHAR(50) NOT NULL,
    ubicacion VARCHAR(100)
);

-- Crear la tabla Citas
CREATE TABLE Citas (
    id_cita INT PRIMARY KEY AUTO_INCREMENT,
    id_paciente INT,
    id_doctor INT,
    id_sala_consulta INT,
    fecha_hora_cita DATETIME,
    duracion_minutos INT,
    FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente),
    FOREIGN KEY (id_doctor) REFERENCES Doctores(id_doctor),
    FOREIGN KEY (id_sala_consulta) REFERENCES SalaConsulta(id_sala_consulta)
);

-- Crear la tabla HistoriasClinicas
CREATE TABLE HistoriasClinicas (
    id_historia_clinica INT PRIMARY KEY AUTO_INCREMENT,
    id_paciente INT,
    observaciones TEXT,
    FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente)
);

-- Crear la tabla Recetas
CREATE TABLE Recetas (
    id_receta INT PRIMARY KEY AUTO_INCREMENT,
    id_paciente INT,
    id_doctor INT,
    fecha_emision DATE,
    FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente),
    FOREIGN KEY (id_doctor) REFERENCES Doctores(id_doctor)
);

-- Crear la tabla Facturas
CREATE TABLE Facturas (
    id_factura INT PRIMARY KEY AUTO_INCREMENT,
    id_paciente INT,
    total_amount DECIMAL(10, 2),
    fecha_emision DATE,
    FOREIGN KEY (id_paciente) REFERENCES Paciente(id_paciente)
);

-- Crear la tabla Pagos
CREATE TABLE Pagos (
    id_pago INT PRIMARY KEY AUTO_INCREMENT,
    id_factura INT,
    monto_pago DECIMAL(10, 2),
    fecha_pago DATE,
    FOREIGN KEY (id_factura) REFERENCES Facturas(id_factura)
);

-- Crear la tabla ProveedoresMedicamentos
CREATE TABLE ProveedoresMedicamentos (
    id_proveedor INT PRIMARY KEY AUTO_INCREMENT,
    nombre_proveedor VARCHAR(50) NOT NULL,
    direccion VARCHAR(100),
    telefono VARCHAR(15),
    correo_electronico VARCHAR(50)
);

-- Crear la tabla Medicamentos
CREATE TABLE Medicamentos (
    id_medicamento INT PRIMARY KEY AUTO_INCREMENT,
    id_receta INT,
    id_tratamiento INT,
    nombre VARCHAR(50) NOT NULL,
    descripcion TEXT,
    id_proveedor INT,
    FOREIGN KEY (id_proveedor) REFERENCES ProveedoresMedicamentos(id_proveedor),
    FOREIGN KEY (id_receta) REFERENCES Recetas (id_receta),
    FOREIGN KEY (id_tratamiento) REFERENCES Tratamientos (id_tratamiento)
);

-- Crear la tabla EquiposMedicos
CREATE TABLE EquiposMedicos (
    id_equipo_medico INT PRIMARY KEY AUTO_INCREMENT,
    nombre_equipo VARCHAR(50) NOT NULL,
    descripcion TEXT
);

-- Crear la tabla EspecialidadesMedicas
CREATE TABLE EspecialidadesMedicas (
    id_especialidad INT PRIMARY KEY AUTO_INCREMENT,
    nombre_especialidad VARCHAR(50) NOT NULL
);

-- Crear la tabla Enfermeros
CREATE TABLE Enfermeros (
    id_enfermero INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(15),
    correo_electronico VARCHAR(50)
);


-- Relaciones adicionales

-- Relación entre EquiposMedicos y SalaConsulta (muchos a muchos)
CREATE TABLE EquiposSalaConsulta (
    id_equipo_medico INT,
    id_sala_consulta INT,
    PRIMARY KEY (id_equipo_medico, id_sala_consulta),
    FOREIGN KEY (id_equipo_medico) REFERENCES EquiposMedicos(id_equipo_medico),
    FOREIGN KEY (id_sala_consulta) REFERENCES SalaConsulta(id_sala_consulta)
);

-- Relación entre Doctores y EspecialidadesMedicas (muchos a muchos)
CREATE TABLE DoctoresEspecialidades (
    id_doctor INT,
    id_especialidad INT,
    PRIMARY KEY (id_doctor, id_especialidad),
    FOREIGN KEY (id_doctor) REFERENCES Doctores(id_doctor),
    FOREIGN KEY (id_especialidad) REFERENCES EspecialidadesMedicas(id_especialidad)
);

-- Relación entre Enfermeros y SalaConsulta (muchos a muchos)
CREATE TABLE EnfermerosSalaConsulta (
    id_enfermero INT,
    id_sala_consulta INT,
    PRIMARY KEY (id_enfermero, id_sala_consulta),
    FOREIGN KEY (id_enfermero) REFERENCES Enfermeros(id_enfermero),
    FOREIGN KEY (id_sala_consulta) REFERENCES SalaConsulta(id_sala_consulta)
);
