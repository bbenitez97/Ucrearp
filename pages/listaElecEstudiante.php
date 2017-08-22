<?php @session_start();

require('../conect/ClassConexionsqli.php');
    $Objeconexion=new Connection;
    $usu_id=$_SESSION['usu'];

    $sql="select elec_id,elec_desc,elec_descripcion FROM `detalle_inscripcion` NATURAL JOIN electiva WHERE usu_id=$usu_id";

    
   
    $Objestudiante=$Objeconexion->Execute($sql);
   

    


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

        <div class="panel panel-default" style="margin-top: 4%;">
        <div class="panel-heading"><h3>ELECTIVAS</h3>
                <div class="table-responsive">

    <table class="table table-striped table-bordered table-hover">  
        <tr>
          <th colspan="2">
            Electiva(s)
          </th>
     
        </tr> 

          <?php
            for ($i=0; $i < count($Objestudiante); $i++) {
              $con=$i+1;
               echo '
                    <tr>
                      <td>'.$con.'</td>
                      <td>'.$Objestudiante[$i][0].' - '.$Objestudiante[$i][1].' - '.$Objestudiante[$i][2].'</td>
                    </tr>';
                            
                    
            }

            echo '</table></div></div>';
                ?>



    


    </center>
</body>
</html>