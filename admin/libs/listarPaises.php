<?php include 'bd.php';
  include '../cargo.php';
 
 
$result = mysqli_query($mysqli, "CALL lista_usuarios()");
 
?>

 <script type="text/javascript" language="javascript" src="js/jslistadopaises.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
                <thead>
                    <tr>
                       
                        <th>RUT</th>
                        <th>Nombre</th>
                        
                        <th>E-Mail</th>
                        <th>Cargo</th>
                        <th>Celular</th>
                        <th>Direccion</th>
                        <th>Acción</th>
                         
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th></th>
                          <th></th>
                       
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                           <th></th>
                         
                    </tr>
                </tfoot>
                  <tbody>
                    <?php

     
                   while($reg=  $result->fetch_assoc() )
                   {
                               echo '<tr>';
                           
                               echo '<td>'.mb_convert_encoding($reg['rut'], "UTF-8").'</td>';
                                echo '<td >'.mb_convert_encoding($reg['nombre'], "UTF-8").'</td>';
                             //  echo '<td>'.mb_convert_encoding($reg['password'], "UTF-8").'</td>';
                                echo '<td >'.mb_convert_encoding($reg['email'], "UTF-8").'</td>';
                                cargo($reg['cargo']);
                               echo '<td>'.mb_convert_encoding($reg['celular'], "UTF-8").'</td>';
                                echo '<td >'.mb_convert_encoding($reg['direccion'], "UTF-8").'</td>';
                                 echo '<td ><a href="#"><img src="images/editar-usuario.png" width="32" height="32" border="0"></a> <a href="#"><img src="images/eliminar-usuario.png" width="32" height="32" border="0"></a></td>';
                              
                              
                               echo '</tr>';
                     
                        }
                    ?>
                <tbody>
            </table>
