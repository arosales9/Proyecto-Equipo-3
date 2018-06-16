<?php

session_start();
echo '<link href="estilosPHP.css" type="text/css" rel="stylesheet">';
echo '<h1>CALIFICACIONES</h1>';
require('configuration.php');
$connection = new mysqli($database_host, $database_user, $database_password, $database_name);

if ($connection){
	$statement = "select * from proyectos";
	$result = $connection->query($statement);



		echo "<table class='tabla'>";  
		echo "<tr>";  
		echo "<th>ID</th>";  
		echo "<th>NOMBRE PROYECTO</th>";  
		echo "<th>DESCRIPCIPON</th>";
		echo "<th>ENCARGADO</th>";  
		echo "<th>CALIFICACION</th>"; 
		echo "</tr>";

		while ($row = $result->fetch_array(MYSQLI_ASSOC)){   
    	echo "<tr>";  
    	echo "<td>".$row['idproyecto']."</td>";  
    	echo "<td>".$row['nombreproyecto']."</td>";  
    	echo "<td>".$row['descripcion']."</td>";
    	echo "<td>".$row['encargado']."</td>";  
    	echo "<td>".$row['CalificacionPro']."</td>";
    	echo "</tr>";  
    }echo "</table>";  	
}
?>