<?php

include_once("menuAdmin.php");
require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;
	$id=$_GET['id'];

	$sql="select * FROM `electiva` INNER JOIN profesor ON electiva.elec_pro=profesor.pro_id WHERE elec_id='$id'";
	$Objupdate=$Objeconexion->Execute($sql);
?>

<div id="page-wrapper">
      <div class="row"></div>
<div class="panel panel-default" style="margin-top: 4%;">
    <div class="panel-heading"><h3>Eliminar Electiva?</h3>
  	<div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" style="text-align: center; text-transform: uppercase;">                              
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
            </tr>
            <tr>
            	<td><?php echo $Objupdate[0][1]; ?></td>
            	<td><?php echo $Objupdate[0][6].' '.$Objupdate[0][7]; ?></td>
            	<td><?php echo $Objupdate[0][3]; ?></td>
            	<td><?php echo $Objupdate[0][2]; ?></td>
            </tr>
         </table>
    </div>
    <form action="eliminarElectivas.php?idb=<?php echo $Objupdate[0][0] ?>" method="post">
    <input type="submit" name="si" class="btn btn-info" value="Si">
    <a href="electivasAdmin.php"><button type="button" name="no" class="btn btn-default">No</button></a>
    </form>
</div>
</div>
</div>

<?php
	
	$idb=$_GET['idb'];
	
	if (isset($_POST['si'])) {
		$sqld="delete FROM `detalle_inscripcion` WHERE elec_id='$idb'";
		$detalle=$Objeconexion->Execute($sqld);
		$sqlb="delete FROM electiva WHERE elec_id='$idb'";
		$borrar=$Objeconexion->Execute($sqlb);

		echo '<script type=text/javascript>alert("Electiva eliminada");window.location.href="electivasAdmin.php"; </script>';
	}

?>

