<?php @session_start();
include_once("menuEstudiante.php");

$id=$_GET['id'];

require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

$sql="select ucase(elec_desc),elec_cupos,ucase(elec_descripcion),elec_id from electiva where elec_id=$id";

	$Objlectivas=$Objeconexion->Execute($sql);


$usu_id=$_SESSION['usu'];


?>
<div id="page-wrapper">
    <div class="row"></div> 
	<div class="panel panel-default" style="margin-top: 4%;">
         <div class="panel-heading"><h3>Inscribir lectiva?</h3>
            <div class="table-responsive">
    	        <table class="table table-striped table-bordered table-hover" style="text-align: center;">                              
                    <tr>
                       	<th>
                           	Id
                       	</th>
                            
                       	<th>
                           	Nombre
                       	</th>
                       	<th>
                           	Descripci&oacute;n
                       	</th>
                       	<th>
                           	Cupos
                       	</th>
                	</tr>                               
                   	<tr>
                        <td><?php echo $Objlectivas[0][3]; ?></td>
                        <td><?php echo $Objlectivas[0][0]; ?></td>
                        <td><?php echo $Objlectivas[0][2]; ?></td>
                        <td><?php echo $Objlectivas[0][1]; ?></td>
                    </tr>
                </table>
                <form action="inscribirElectiva.php?idb=<?php echo $Objlectivas[0][3] ?>" method="post">
    				<input type="submit" name="si" class="btn btn-info" value="Si">
    				<a href="electivasEstudiante.php"><button type="button" name="no" class="btn btn-default">No</button></a>
    			</form>
            </div>
        </div>
     </div>
</div>

                            
<?php
	
	$idb=$_GET['idb'];
	
	if (isset($_POST['si'])) {

		echo $Numreg=$Objeconexion->Execute("select * FROM detalle_inscripcion WHERE elec_id='$idb' AND usu_id='$usu_id'");

		if ($Numreg) {
			echo '<script type=text/javascript>alert("Usted ya se encuentra inscrito");window.location.href="electivasEstudiante.php"; </script>';
		}else{

			$sqlc="select elec_cupos FROM electiva WHERE elec_id='$idb'";
			$cupos=$Objeconexion->Execute($sqlc);
			
			if ($cupos[0][0]==0) {
				echo '<script type=text/javascript>alert("Electiva llena no hay cupos");window.location.href="electivasEstudiante.php"; </script>';
			}else{

				$sql="select elec_id,  elec_cupos-1 FROM electiva WHERE elec_id='$idb'";
				$con=$Objeconexion->Execute($sql);
				$cupos=$con[0][1];

				$sqlu="update electiva SET elec_cupos='$cupos' WHERE elec_id='$idb'";
				$cu=$Objeconexion->Execute($sqlu);

				$sqli="INSERT INTO detalle_inscripcion(usu_id, elec_id) VALUES ('$usu_id','$idb')";
				$borrar=$Objeconexion->Execute($sqli);
				echo '<script type=text/javascript>alert("Inscrito exitosamente");window.location.href="electivasEstudiante.php"; </script>';
			}
		}
	}

?>