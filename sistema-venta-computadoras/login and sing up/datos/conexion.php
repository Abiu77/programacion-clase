<?php
// Conectar a la base de datos (reemplaza con tus propios detalles de conexión)
$host = "localhost";
$dbname = "miapp";
$username = "root";
$password = "admin";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta para verificar las credenciales
$query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // Inicio de sesión exitoso
    header("Location: otra_pagina.html");
} else {
    // Credenciales incorrectas
    echo "Inicio de sesión fallido. Por favor, verifique sus credenciales.";
}

// Cerrar la conexión a la base de datos
$conn = null;
?>
