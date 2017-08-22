<?php  @session_start();
include_once("menuEstudiante.php");
require('../conect/ClassConexionsqli.php');
    $Objeconexion=new Connection;
    $usu_id=$_SESSION['usu'];

    $sql="select * FROM usuarios inner JOIN rol ON usuarios.usu_rol=rol.rol_id WHERE usu_id='$usu_id'";
    $Objupdate=$Objeconexion->Execute($sql);
?>
    <div id="page-wrapper">
      <div class="row"></div>
		<form role="form" method="post" action="confiEstudiante.php" style="margin-top: 2%;">
		<div class="col-lg-6" >
            <div class="form-group" style="display: none;">
                <input class="form-control" name="idpri" value="<?php echo $Objupdate[0][6] ?>"">
            </div>
    		<div class="form-group">
     			<label>Id</label>
        		<input class="form-control" name="id" value="<?php echo $Objupdate[0][0] ?>" style="text-transform: uppercase;">
    		</div>

    		<div class="form-group">
     			<label>Contrase&ntilde;a</label>
        		<input class="form-control" name="pw" value="<?php echo $Objupdate[0][1] ?>" style="text-transform: uppercase;">
    		</div>

    		<div class="form-group">
     			<label>Nombre</label>
        		<input class="form-control" name="nom" value="<?php echo $Objupdate[0][2] ?>" style="text-transform: uppercase;">
    		</div>
    		<div class="form-group">
                <label>Apellido</label>
                <input class="form-control" name="ape" value="<?php echo $Objupdate[0][3] ?>" style="text-transform: uppercase;">
            </div>
    		<div class="form-group">
     			<label>Email</label>
        		<input class="form-control" type="Email" name="mail" value="<?php echo $Objupdate[0][4] ?>" style="text-transform: uppercase;">
    		</div>
    		
            <div class="form-group">
                <label>Rol</label>
                <input class="form-control" name="rol" readonly value="<?php echo $Objupdate[0][8] ?>" style="text-transform: uppercase;">
            </div>

    		<input type="submit" name="enviar" value="Actualizar" class="btn btn-info" style="float: right; margin-top: 4%;">

    	</div>
		</form>
	</div>


<?php

  $idpri=$_POST['idpri'];
	$id=$_POST['id'];
	$pw=$_POST['pw'];
	$nom=$_POST['nom'];
	$ape=$_POST['ape'];
	$mail=$_POST['mail'];
	
	$sqlup="update usuarios SET usu_id='$id',usu_pw='$pw',usu_nombre='$nom',usu_apellido='$ape',usu_correo='$mail' WHERE  id='$idpri'";

	$update=$Objeconexion->Execute($sqlup);

	if (isset($_POST['enviar'])) {
		echo '<script type=text/javascript>alert("Registro modificado");window.location.href="confiEstudiante.php"; </script>';
	}

	
?>