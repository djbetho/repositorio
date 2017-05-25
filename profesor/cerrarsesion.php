<?php 
session_start();
 
/* comprobamos que un usuario registrado es el que accede al archivo, 
sino no tendría sentido que pasara por este archivo */
if (!isset($_SESSION[admin])) 
{
    header("location:../index.php"); 
}
if (!isset($_SESSION[profesor])) 
{
    header("location:../index.php"); 
}
if (!isset($_SESSION[director])) 
{
    header("location:../index.php"); 
}
 
/* usamos la función session_unset() para liberar la variable 
de sesión que se encuentra registrada */
session_unset($_SESSION[admin]);
 session_unset($_SESSION[profesor]);
 session_unset($_SESSION[director]);
// Destruye la información de la sesión
session_destroy();
 
//volvemos a la página principal
header("location:../index.php"); ?>