<?php
session_start();
ob_start();

$_SESSION['NOMBREUSER'] = $_POST['usuario'];

require('configuration.php');

$username = $_POST['usuario'];
$password = $_POST['pass'];
$tipoUser = $_POST['tipousuario'];




if (isset($username) && isset($password)) {
  $connection = new mysqli($database_host, $database_user, $database_password, $database_name);

  if ($connection->connect_error) {
    die("Connection failure: " . $connection->connect_error);
  }

  $statement = "select * from usuarios where Usuario = '$username'";
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
      header("Location: ../UsuariosHtml/VistasUsuarios/Usuario.php");
      }else{
      header("Location: ../UsuariosHtml/VistasEvaluadores/Evaluador.php");
      }
    } else {
      echo "Credenciales incorrectas.";
    }
  }

  mysqli_close($connection);
}

?>
