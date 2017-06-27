<?php 
 
// hostname o ip del servidor de BBDD
$bd_host='localhost';
 
// nombre de usuario 
$bd_usuario='root';
 
// la contrasena para la BBDD  
$bd_password='';
 
// nombre del BBDD
$bd_base='class';


$mysqli = mysqli_connect($bd_host, $bd_usuario, $bd_password, $bd_base);
 
if ($mysqli->connect_errno) 
{
    echo "No se pudo conectar a la BBDD: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
  
 ?>