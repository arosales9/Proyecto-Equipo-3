<?php  

require('configuration.php');
function Conectarse()  
{  
   if (!($link=mysql_connect($database_host, $database_password, $database_name)))  
   {  
      echo "Error conectando a la base de datos.";  
      exit();  
   }  
   if (!mysql_select_db($database_user,$link))  
   {  
      echo "Error seleccionando la base de datos.";  
      exit();  
   }  
   return $link;  
}  
?>  