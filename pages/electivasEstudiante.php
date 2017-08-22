<?php
require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

	$sql="select ucase(elec_desc),elec_cupos,ucase(elec_descripcion),elec_id from electiva where elec_cupos>0";

	$Objlectivas=$Objeconexion->Execute($sql);


include_once("menuEstudiante.php");
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
                <div class="panel-heading"><center><h3>LISTADO DE ELECTIVAS COMPLETO</h3> </center>
                <div class="table-responsive">
               


                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">                              
                            <tr>
                            <th>
                                Nombre
                            </th>
                            
                            <th>
                                Cupos
                            </th>
                            <th >
                                Descripcion de Electiva
                            </th>
                            <th>
                                Inscribirme
                            </th>
                            </tr>';
                                    
                                      
                                              
                for ($i=0; $i < count($Objlectivas); $i++) {                                
                    echo '<tr>
                            <td>'
                                .$Objlectivas[$i][0].'
                            </td>
                            <td>'
                                .$Objlectivas[$i][1].' 
                            </td>
                            <td style="width: 500px;">

                            '.$Objlectivas[$i][2].' 

                            </td>
                            
                            
                      
                            <td>
                                
                            
                                <a href="inscribirElectiva.php?id='.$Objlectivas[$i][3].'" data-toggle="tooltip" title="Inscribirme"><button class="btn btn-success btn-circle"><i class="fa fa-check-square-o"></i></button></a>

                             
                            
                        
                        </tr>';
                    }
                    echo '</table></div></div>';
                ?>



	


	</center>
</body>
</html>


