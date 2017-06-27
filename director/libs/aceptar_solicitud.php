<?php 
include 'bd.php';
$id 		= $_REQUEST['id'];
  

$sql = "UPDATE solicitud_historial
SET estado =1
WHERE id_solicitud = $id ";
 
$result = mysqli_query($mysqli,$sql);


if ($result === false) {
 trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);	
echo "No se encontraron resultados con el termino ".'<b>'.$empresa.'<b>'.".";
}

 echo "registro actualizado".$sql;
			

 ?>