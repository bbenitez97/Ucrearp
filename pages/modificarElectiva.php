<?php
include_once("menuAdmin.php");
require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;
	$id=$_GET['id'];

	$sql="select * FROM `electiva` INNER JOIN profesor ON electiva.elec_pro=profesor.pro_id WHERE elec_id='$id'";
	$Objupdate=$Objeconexion->Execute($sql);

	$sqlpro='select * FROM `profesor` WHERE pro_id!='.$Objupdate[0][4].'';
	$objpro=$Objeconexion->Execute($sqlpro);
?>

<div id="page-wrapper">
      <div class="row"></div>
		<form role="form" method="post" action="modificarElectiva.php" style="margin-top: 2%;">
		<div class="col-lg-6" >
    		<div class="form-group">
     			<label>Id</label>
        		<input class="form-control" readonly name="id" value="<?php echo $Objupdate[0][0] ?>" style="text-transform: uppercase;">
    		</div>
    		<div class="form-group">
     			<label>Nombre</label>
        		<input class="form-control" name="nom" value="<?php echo $Objupdate[0][1] ?>" style="text-transform: uppercase;">
    		</div>
    		<div class="form-group">
     			<label>Descripci&oacute;n</label>
        		<textarea class="form-control" name="des"><?php echo $Objupdate[0][3] ?></textarea>
    		</div>
    		<div class="form-group">
     			<label>Cupos</label>
        		<input class="form-control" name="cupos" value="<?php echo $Objupdate[0][2] ?>" style="text-transform: uppercase;">
    		</div>
    		<div class="form-group">
     			<label>Profesor</label>
        		<select class="form-control" name="pro" style="text-transform: uppercase;">
        			<option value="<?php echo $Objupdate[0][4] ?>"><?php echo $Objupdate[0][7].' '.$Objupdate[0][8] ?></option>
        			<?php  
        				for ($i=0; $i < count($objpro); $i++) { 
        					echo '<option value='.$objpro[$i][1].'>'.$objpro[$i][2].' '.$objpro[$i][3].'</option>';
        				}
        			?>
        		</select>
    		</div>
    		<input type="submit" name="enviar" value="Actualizar" class="btn btn-info" style="float: right; margin-top: 4%;">
    	</div>
		</form>
	</div>

<?php

	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$cupos=$_POST['cupos'];
	$des=$_POST['des'];
	$pro=$_POST['pro'];

	$sqlup="update electiva SET elec_desc='$nom',elec_cupos='$cupos',elec_descripcion='$des',elec_pro='$pro' where elec_id='$id'";

	$update=$Objeconexion->Execute($sqlup);

	if (isset($_POST['enviar'])) {
		echo '<script type=text/javascript>alert("Electiva modificada");window.location.href="electivasAdmin.php"; </script>';
	}

	
?>