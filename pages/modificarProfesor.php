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
		<form role="form" method="post" action="modificarProfesor.php" style="margin-top: 2%;">
		<div class="col-lg-6" >
            <div class="form-group">
                <input class="form-control" name="idpri" value="<?php echo $Objupdate[0][5] ?>" style="display: none">
            </div>
    		<div class="form-group">
     			<label>Id</label>
        		<input class="form-control" name="id" value="<?php echo $Objupdate[0][0] ?>" style="text-transform: uppercase;">
    		</div>
    		<div class="form-group">
     			<label>Nombre</label>
        		<input class="form-control" name="nom" value="<?php echo $Objupdate[0][1] ?>" style="text-transform: uppercase;">
    		</div>
    		<div class="form-group">
                <label>Apellido</label>
                <input class="form-control" name="ape" value="<?php echo $Objupdate[0][2] ?>" style="text-transform: uppercase;">
            </div>
    		<div class="form-group">
     			<label>Email</label>
        		<input class="form-control" type="Email" name="mail" value="<?php echo $Objupdate[0][3] ?>" style="text-transform: uppercase;">
    		</div>
    		
            <div class="form-group">
                <label>Telefono</label>
                <input class="form-control" name="tel" value="<?php echo $Objupdate[0][4] ?>" style="text-transform: uppercase;">
            </div>

    		<input type="submit" name="enviar" value="Actualizar" class="btn btn-info" style="float: right; margin-top: 4%;">
    	</div>
		</form>
	</div>

<?php

    $idpri=$_POST['idpri'];
	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$ape=$_POST['ape'];
	$mail=$_POST['mail'];
	$tel=$_POST['tel'];

	$sqlup="update profesor SET pro_id='$id', pro_nombre='$nom',pro_apellido='$ape',pro_email='$mail',pro_tel='$tel' WHERE  id='$idpri'";

	$update=$Objeconexion->Execute($sqlup);

	if (isset($_POST['enviar'])) {
		echo '<script type=text/javascript>alert("Registro modificado");window.location.href="listaProfesores.php"; </script>';
	}

	
?>