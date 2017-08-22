<?php

require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

	$sql="select pro_id,ucase(concat(pro_nombre,' ',pro_apellido)),ucase(elec_desc) from electiva,profesor WHERE profesor.pro_id=electiva.elec_pro ORDER BY pro_id";

    
   
	$Objprofesor=$Objeconexion->Execute($sql);
   

    


include_once("menuEstudiante.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
</head>
<body>
<center>
	


<div id="page-wrapper">
      <div class="row"></div>
        <?php  
        echo '
        <div class="panel panel-default" style="margin-top: 4%;">
        <div class="panel-heading"><center><h3>ELECTIVAS POR PROFESOR</h3> </center>
                <div class="input-group">
                <table class="table table-striped table-bordered table-hover" style="text-align: center;">  


                        <tr>
                                <th>
                                   Identificacion
                                </th>

                                <th>
                                   Profesor
                                </th>


                                <th>
                                    Electiva(s)
                                </th>
     
                     </tr>';


            for ($i=0; $i < count($Objprofesor); $i++) {



           echo '
                
                                         
                      <tr>
                                 <td>
                                    '.$Objprofesor[$i][0].'
                                </td>

                                <td>
                                    '.$Objprofesor[$i][1].'
                                </td>

                                <td>
                                    '.$Objprofesor[$i][2].'
                                </td>
     
                     </tr>';
                            
                    
                    }

                       

            echo '</table></div></div>';
                ?>



	


	</center>
</body>
</html>