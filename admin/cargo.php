<?php 
function cargo($cargo){
 switch ($cargo) {
 	case '1':
 		 
            echo '<td>Director</td>';               
                              
 		break;
 	case '2':
			echo '<td>Profesor</td>'; 
 		break;
	case '3':
			echo '<td>Administrador</td>'; 	
		break;
 	default:
 		# code...
 		break;
 }

}

 ?>