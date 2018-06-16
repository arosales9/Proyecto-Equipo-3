<?php 

session_start();

require('configuration.php');
  $connection = new mysqli($database_host, $database_user, $database_password, $database_name);

if ($connection===true) {

  $statement = "select * from Usuarios where Usuario = '$username'";
  $result = $connection->query($statement);

  if ($result->num_rows > 0) {
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if (hash('sha256', $password) === $row['Contrasena']) {
      $_SESSION['logged'] = true;
      $_SESSION['usuario'] = $username;
      $_SESSION['start'] = time();
      $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
      $_SESSION['tipousuario'] = $row['tipousuario'];
      
      if($_SESSION['tipousuario'] == "usuario"){
      header("Location: ../UsuariosHtml/VistasUsuarios/Usuario.html");
      }else{
      header("Location: ../UsuariosHtml/VistasEvaluadores/Evaluador.html");
      }
    } else {
      echo "Credenciales incorrectas.";
    }
  }

  mysqli_close($connection);
}

?>