<?php

require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

	$sql="select elec_id,ucase(elec_desc),elec_cupos,ucase(elec_descripcion),pro_id,ucase(concat(pro_nombre,' ',pro_apellido)) from electiva, profesor where electiva.elec_pro=profesor.pro_id";

	$Objlectivas=$Objeconexion->Execute($sql);


include_once("menuAdmin.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Electivas</title>
</head>
<body>
<center>
	


<div id="page-wrapper">
      <div class="row"></div>
        <?php  


            
           echo '<div class="panel panel-default" style="margin-top: 4%;">
                <div class="panel-heading"><center><h3>Lista Electivas</h3> </center>
                <div class="table-responsive">
               


                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">                              
                            <tr>
                            <th>
                                Nombre
                            </th>
                            
                            <th>
                                Profesor
                            </th>
                            
                            <th>
                                Descripcion
                            
                            </th>
                            <th>
                                Cupos
                            </th>
                            <th>
                                Acciones
                            </th>
                            </tr>';
                                    
                                      
                                              
                for ($i=0; $i < count($Objlectivas); $i++) {                                
                    echo '<tr>
                            <td>'
                                .$Objlectivas[$i][1].'
                            </td>
                            <td>'
                                .$Objlectivas[$i][5].' 
                            </td>
                            <td>

                            '.$Objlectivas[$i][3].' 

                            </td>
                            
                            
                       
                            <td>
                            '.$Objlectivas[$i][2].'
                            
                            </td>
                            <td>
                                
                            
                                <a href="modificarElectiva.php?id='.$Objlectivas[$i][0].'" data-toggle="tooltip" title="Modificar Electiva"><button class="btn btn-success btn-circle"><i class="fa fa-pencil-square-o"></i></button></a>

                             
                            
                                <a  href="eliminarElectivas.php?id='.$Objlectivas[$i][0].'" title="Eliminar Electiva"><button class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button></a>
                            
                        
                        </tr>';
                    }
                    echo '</table></div></div>';
                ?>



	


	</center>
</body>
</html>