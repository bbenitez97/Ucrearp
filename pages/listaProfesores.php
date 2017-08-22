<?php

require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

	$sql="select pro_id,ucase(pro_nombre),ucase(pro_apellido),ucase(pro_email),pro_tel from profesor";

	$Objprofesor=$Objeconexion->Execute($sql);


include_once("menuAdmin.php");
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


            
           echo '<div class="panel panel-default" style="margin-top: 4%;">
                <div class="panel-heading"><center><h3>Lista Profesores</h3> </center>
                <div class="table-responsive">
               


                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">                              
                            <tr>
                            <th>
                                Identificacion
                            </th>

                            <th>
                                Nombre
                            </th>
                            
                            <th>
                                Apellido
                            </th>
                            
                            <th>
                                Email
                            
                            </th>
                            <th>
                                Telefono
                            </th>
                            <th>
                                Acciones
                            </th>
                            </tr>';
                                    
                                      
                                              
                for ($i=0; $i < count($Objprofesor); $i++) {                                
                    echo '<tr>
                            <td>'
                                .$Objprofesor[$i][0].'
                            </td>
                            <td>'
                                .$Objprofesor[$i][1].' 
                            </td>
                            <td>

                            '.$Objprofesor[$i][2].' 

                            </td>
                            
                            <td>
                            '.$Objprofesor[$i][3].'
                            
                            </td>
                             <td>

                            '.$Objprofesor[$i][4].' 

                            </td>
        
                            
                            <td>
                                
                            
                                <a href="modificarProfesor.php?id='.$Objprofesor[$i][0].'" data-toggle="tooltip" title="Modificar Usuario"><button class="btn btn-success btn-circle"><i class="fa fa-pencil-square-o"></i></button></a>

                             
                            
                                <a  href="eliminarProfesor.php?id='.$Objprofesor[$i][0].'" title="Eliminar Usuario"><button class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button></a>
                            
                        
                        </tr>';
                    }
                    echo '</table></div></div>';
                ?>



	


	</center>
</body>
</html>