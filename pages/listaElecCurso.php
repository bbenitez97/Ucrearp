<?php
require('../conect/ClassConexionsqli.php');
    $Objeconexion=new Connection;

    
    $sqle="select * FROM electiva";

    $Objelec=$Objeconexion->Execute($sqle);


    $sql="select GROUP_CONCAT(usuarios.usu_id,' - ',ucase(concat(usu_nombre,' ',usu_apellido)),' - ',ucase(usu_correo)SEPARATOR'<br>'),elec_desc,COUNT(detalle_inscripcion.usu_id) from usuarios,detalle_inscripcion,electiva WHERE usuarios.usu_id=detalle_inscripcion.usu_id AND electiva.elec_id=detalle_inscripcion.elec_id and usu_rol=1 GROUP By electiva.elec_id"; 
    $Objcurso=$Objeconexion->Execute($sql);

include_once("menuEstudiante.php");

?>

<div id="page-wrapper">
      <div class="row"></div>
        <?php  
        echo '
        <div class="panel panel-default" style="margin-top: 4%;">
        <div class="panel-heading"><center><h3>ELECTIVAS POR ESTUDIANTES</h3> </center>
                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" style="text-align: center;">  


                        <tr>
                                <th>
                                   Electiva
                                </th>

                                <th>
                                   Estudiantes
                                </th>


                                <th>
                                    Cantidad
                                </th>
     
                     </tr>';


            for ($i=0; $i < count($Objcurso); $i++) {



           echo '
                
                                         
                      <tr>
                                 <td>
                                    '.$Objcurso[$i][1].'
                                </td>

                                <td>
                                    '.$Objcurso[$i][0].'
                                </td>

                                <td>
                                    '.$Objcurso[$i][2].'
                                </td>
     
                     </tr>';
                            
                    
                    }

                       

            echo '</table></div></div>';
                ?>