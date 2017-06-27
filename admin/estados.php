<?php 
function estado($estado){
 switch ($estado) {
 	case '0':
 		 
            echo '<td>Pendiente</td>';               
                              
 		break;
 	case '1':
			echo '<td>Anulado</td>'; 
 		break;
	case '2':
			echo '<td>Aceptado</td>'; 	
		break;
 	default:
 		# code...
 		break;
 }

}

 ?>