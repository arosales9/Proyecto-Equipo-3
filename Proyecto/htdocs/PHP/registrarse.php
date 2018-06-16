<?php

require('configuration.php');

$nombre = $_POST['nombre'];
$username = $_POST['usuario'];
$password = $_POST['pass'];
$correo = $_POST['correo'];
$tipo = $_POST['tipo'];


if (isset($username) && isset($password)) {
 $connection = new mysqli($database_host, $database_user, $database_password, $database_name);
 
 if ($connection->connect_error) {
   die("Connection failure: " . $connection->connection_error);
 }

 $hashed_password = hash('sha256', $password);

 $statement = "insert into Usuarios (Nombre, Usuario, Contrasena, Correo_electronico, tipousuario) values ('$nombre', '$username', '$hashed_password', '$correo', '$tipo')";

 if ($connection->query($statement) === TRUE) {
  header("Location: ../Login.html"); 
 } else {
   echo "Error al crear el registro: $connection->error";
 }

 mysqli_close($connection);
}
