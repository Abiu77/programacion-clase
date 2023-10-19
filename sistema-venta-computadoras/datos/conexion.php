<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "miapp";
$port = 3308;

$connection = new mysqli($host, $username, $password, $database, $port);

if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
}

$username = $_POST["username"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$telefono = $_POST["telefono"];

// Inserta los datos en la base de datos (deberías mejorar la seguridad aquí)
$sql = "INSERT INTO usuarios (username, apellido, email, password, telefono) VALUES ('$username', '$apellido', '$email', '$password', '$telefono')";

if ($connection->query($sql) === TRUE) {
    $response = ["success" => true];
} else {
    $response = ["success" => false];
}

$connection->close();

header("Content-Type: application/json");
echo json_encode($response);
?>
