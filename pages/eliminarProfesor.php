<?php

include_once("menuAdmin.php");
require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;
	$id=$_GET['id'];

	$sql="select pro_id, pro_nombre, pro_apellido, pro_email, pro_tel,id FROM profesor where pro_id='$id'";
	$Objupdate=$Objeconexion->Execute($sql);
?>

<div id="page-wrapper">
      <div class="row"></div>
<div class="panel panel-default" style="margin-top: 4%;">
    <div class="panel-heading"><h3>Eliminar profesor?</h3>
  	<div class="table-responsive">
         <table class="table table-striped table-bordered table-hover" style="text-align: center; text-transform: uppercase;">                              
            <tr>
	            <th>
	               Id
	            </th>
	                            
	            <th>
	                Nombre
	            </th>
	                            
	            <th>
	                E-mail
	                            
	            </th>
	            <th>
	                Telefono
	            </th>
            </tr>
            <tr>
            	<td><?php echo $Objupdate[0][0]; ?></td>
            	<td><?php echo $Objupdate[0][1].' '.$Objupdate[0][2]; ?></td>
            	<td><?php echo $Objupdate[0][3]; ?></td>
            	<td><?php echo $Objupdate[0][4]; ?></td>
            </tr>
         </table>
    </div>
    <form action="eliminarProfesor.php?idb=<?php echo $Objupdate[0][0] ?>" method="post">
    <input type="submit" name="si" class="btn btn-info" value="Si">
    <a href="listaProfesores.php"><button type="button" name="no" class="btn btn-default">No</button></a>
    </form>
</div>
</div>
</div>

<?php
	
	$idb=$_GET['idb'];
	
	if (isset($_POST['si'])) {
		$sqlb="delete FROM profesor WHERE pro_id='$idb'";
		$borrar=$Objeconexion->Execute($sqlb);
		echo '<script type=text/javascript>alert("Registro eliminado");window.location.href="listaProfesores.php"; </script>';
	}

?>

