<?php

require('configuration.php');

$nombre = $_POST['Nombrepro'];
$descripro = $_POST['Descripcionpro'];
$encargpro = $_POST['Encargadopro'];

$cero = 0;


$connection = new mysqli($database_host, $database_user, $database_password, $database_name);

if ($connection) {
 if ($connection->connect_error) {
   die("Connection failure: " . $connection->connection_error);
   	 echo "conectadoooooo";
 }

 $statement = "insert into proyectos (nombreproyecto, descripcion , encargado, CalificacionPro) values ('$nombre', '$descripro', '$encargpro', '$cero')";

 if ($connection->query($statement)) {
    echo "Registro creado";
    header("Location: ../UsuariosHtml/VistasUsuarios/Usuario.html");
 } 
 else {
   echo "Error al crear el registro: $connection->error";
   header("Location: ../UsuariosHtml/VistasUsuarios/Usuario.html");
 }

 mysqli_close($connection);
}else
{
	echo "no conectado";
}

?> 

