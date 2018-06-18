<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../../Estilos/Estilos.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/Modal.css">
  <link rel="stylesheet" type="text/css" href="../../Estilos/EsUser.css">
  <link rel="stylesheet" type="text/css" href="Usuario.css">
  <link href="../../PHP/estilosPHP.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="../../JavaScrit/jquery-latest.js"></script>
  <script type="text/javascript" src="../../JavaScrit/scrit.js"></script>

  <script type="text/javascript">
    function desplegar(_valor,nombre){
      document.getElementById(nombre).style.visibility=_valor;
    };
  </script>

</head>
<body>
  <header>
    <div class="container">
      <h1 class="logo">Generico<span>Logo</span></h1>
  
      <nav class="site-nav">
        <ul>
          <li><a href="../../index.html"><i class="fa fa-home site-nav--icon"></i>Inicio</a></li> 
          <li><a href="../../Login.html"><i class="fa fa-info site-nav--icon"></i>Login</a></li><!--Direccionar validando el tipo de usuario-->
          <li><a href="../../Conocenos.html"><i class="fa fa-pencil site-nav--icon"></i>Conocenos</a></li>
        </ul>
      </nav>
  
      <div class="menu-toggle">
        <div class="hamburger"></div>
      </div>

    </div>
  </header>

  <div class="ConUser">
    <div class="ConArreglo">

        <div class="MenuUser">
          <!--
            Aqui va el menu de usuario
          -->
          <div class="SecMenu"><h1>MENU</h1></div>
          <br>
          <a href="javascript:desplegar('visible','bgventana');">Calificaciones</a>
          <br><br>
          <a href="javascript:desplegar('visible','bgventana1');">Resuldados Generales</a>
          <br><br>
          <a href="">Cerrar Sesión</a>
        </div>

        <div class="NoticiasUser">
          <div class="SecMenu"><h1>NOTICIAS</h1></div>
          <br>
          <a href="javascript:desplegar('visible','bgventana2');">Ganadores</a>
          <br><br>
        </div>
    </div>

    <div class="RegisProyet">
      <div class="formulario">
        <div class="ConvocatoriasPadre">
          <p>
            <h1>COMBOCATORIAS</h1>
          </p>
        </div>

        <div class="ConvocatoriasHijos" onclick="window.location ='RegistroProyectoUsuario.html';">
          <div class="combData">
            <div class="combData1">
              <p></p>
            </div>
          </div>
        </div>

         <div class="ConvocatoriasHijos" onclick="window.location ='RegistroProyectoUsuario.html';">
          <div class="combData">
            <div id="combData1">
              <p></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="bgventana">
    <div id="ventana">
      <a id="Modsalir" href="javascript:desplegar('hidden','bgventana');">X</a>
      <?php 
      session_start();
      ob_start();

      echo '<h1 id="Calif">Calificaciones</h1>';
      require('../../PHP/configuration.php');
      $connection = new mysqli($database_host, $database_user,      $database_password, $database_name);

      if ($connection)
      {
        $statement1 = "select * from proyectos";
        $result1 = $connection->query($statement1);

        echo "<table class='tabla'>";  
        echo "<tr class='tabla'>";  
        echo "<th>ID</th>";  
        echo "<th>NOMBRE PROYECTO</th>";  
        echo "<th>DESCRIPCIPON</th>";
        echo "<th>ENCARGADO</th>";  
        echo "<th>CALIFICACION</th>"; 
        echo "</tr>";

        while ($row1 = $result1->fetch_array(MYSQLI_ASSOC))
        {
          if($_SESSION['NOMBREUSER']===$row1['encargado'])
          {
            echo "<tr class='tabla'>";  
            echo "<td>".$row1['idproyecto']."</td>";  
            echo "<td>".$row1['nombreproyecto']."</td>";  
            echo "<td>".$row1['descripcion']."</td>";
            echo "<td>".$row1['encargado']."</td>";  
            echo "<td>".$row1['CalificacionPro']."</td>";
            echo "</tr>";  
          }
        }echo "</table>";
      }
      ?>
    </div>
  </div>

  <div id="bgventana1">
    <div id="ventana">
      <a id="Modsalir" href="javascript:desplegar('hidden','bgventana1');">X</a>

      <?php 
      echo '<h1 id="Calif">Resultados Generales</h1>';
      require('../../PHP/configuration.php');
      $connection = new mysqli($database_host, $database_user,      $database_password, $database_name);

      if ($connection)
      {
        $statement = "select * from proyectos";
        $result = $connection->query($statement);

        echo "<table class='tabla'>";  
        echo "<tr class='tabla'>";  
        echo "<th>ID</th>";  
        echo "<th>NOMBRE PROYECTO</th>";  
        echo "<th>DESCRIPCIPON</th>";
        echo "<th>ENCARGADO</th>";  
        echo "<th>CALIFICACION</th>"; 
        echo "</tr>";

        while ($row = $result->fetch_array(MYSQLI_ASSOC))
        {   
          echo "<tr class='tabla'>";  
          echo "<td>".$row['idproyecto']."</td>";  
          echo "<td>".$row['nombreproyecto']."</td>";  
          echo "<td>".$row['descripcion']."</td>";
          echo "<td>".$row['encargado']."</td>";  
          echo "<td>".$row['CalificacionPro']."</td>";
          echo "</tr>";  
        }echo "</table>";   
      }
      ?>
    </div>
  </div>

  <div id="bgventana2">
    <div id="ventana">
      <h1>Ganadores</h1>
      <a id="Modsalir" href="javascript:desplegar('hidden','bgventana2');">X</a>
      <br>
      <br>
      <br>
      <p><h1>aqui se pondra quien obtube la mejor calificacion</h1></p>
    </div>
  </div>

  <!--Pie de pagina-->
  <div id="footer">
    <p>Pie de pagina</p>
  </div>

</body>
</html>