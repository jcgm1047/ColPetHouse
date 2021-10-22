<?php 
include './config/dbconection.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

$query =  "INSERT INTO registro_usuario (nombre, apellido, email, tel, contrasena) VALUES ('$nombre', '$apellido')";
$mysqli->query($query);


?>