<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$fechaRegistro = $_POST['fechaRegistro'];

$query = "INSERT INTO clientes(nombre, apellido, direccion, telefono, email, fechaRegistro)
          VALUES('$nombre', '$apellido', '$direccion', '$telefono', '$email', '$fechaRegistro')";

mysqli_close($conexion);
?>