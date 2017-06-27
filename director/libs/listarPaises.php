<?php include 'bd.php';
  include '../estados.php';
 
 
$result = mysqli_query($mysqli, "CALL seleccion_solicitudes_pendientes()");
 
?>
<script type="text/javascript">

function aceptar(rut) {
    alertify.confirm("<p>Esta apunto de guardar los datos.<br><br>Verifique los datos esten correctos y preciones <b>ACEPTAR</b></p>", function (e) {
        var id =rut; 
        

            if (e) {
        jQuery.post("libs/aceptar_solicitud.php", {
          id:id
           
        }, function(data, textStatus){
          if(data == 1){
          
            alertify.success("Datos insertados.");
         
                location.reload(true);
          }
          else{
             
            alertify.error("Ha ocurrido un error.");
            $('#res').css('color','red');
          }
        
           
           
        });


                  
            } else { 
                 alertify.error("Ha cancelado el registro.");       
            }
      }); 
      return false
}

</script>
 <script type="text/javascript" language="javascript" src="js/jslistadopaises.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
                <thead>
                    <tr>
                       
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Detalle Solicitud</th>
                        <th>Fecha Permiso</th>
                        <th>Reemplazo</th>
                        <th>Fecha Registro</th>
                        <th>Estado</th>
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
                          <th></th>
                    </tr>
                </tfoot>
                  <tbody>
                    <?php

     
                   while($reg=  $result->fetch_assoc() )
                   {
                               echo '<tr>';
                           
                               echo '<td>'.mb_convert_encoding($reg['rut'], "UTF-8").'</td>';
                               //echo'   <input type="text" name="" value="'.$reg['rut'].'">';
                                echo '<td >'.mb_convert_encoding($reg['nombre'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['detalle'], "UTF-8").'</td>';
                                echo '<td >'.mb_convert_encoding($reg['fecha'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['reemplazo'], "UTF-8").'</td>';
                                echo '<td >'.mb_convert_encoding($reg['fecha_registro'], "UTF-8").'</td>';
                                estado($reg['estado']);
         echo '<td ><a  href="javascript:void(0);" onClick="aceptar('.$reg['id_solicitud'].');"><img src="images/aceptar-cheque-verde-ok-si-icono-6092-16.png" width="22" height="22" border="0"></a> 
         <a href="#"><img src="images/eliminar-cancelar-icono-4935-16.png" width="22" height="22" border="0"></a></td>';
                              
                               echo '</tr>';
                     
                        }
                    ?>
                <tbody>
            </table>
