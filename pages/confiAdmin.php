<?php  @session_start();
include_once("menuAdmin.php");
require('../conect/ClassConexionsqli.php');
    $Objeconexion=new Connection;
    $usu_id=$_SESSION['usu'];

    $sql="select * FROM usuarios inner JOIN rol ON usuarios.usu_rol=rol.rol_id WHERE usu_id='$usu_id'";
    $Objupdate=$Objeconexion->Execute($sql);
?>
    <div id="page-wrapper">
      <div class="row"></div>
		<form role="form" method="post" action="confiAdmin.php" style="margin-top: 2%;">
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
    		<button type="button" id="myBtnreg" class="btn btn-info" style="float: right; margin-top: 4%; margin-right: 2%;"><span class="fa fa-plus"></span></button>
    	</div>
		</form>
	</div>
	<div class="container">
  
 

  <div class="modal fade" id="myModalreg" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px; background-color: #0006A3;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="background-color: #0006A3;"><span class="fa fa-user"></span> Crear usuario administrador</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="registrarUsuarios.php" method="post">

            <div class="form-group">
              <label for="usrname">Id usuario*</label>
              <input type="text" class="form-control" id="usrname" placeholder="Ingrese Id" name="usuario" required/>
            </div>

             <div class="form-group">
              <label>Nombre*</label>
              <input class="form-control" type="text" placeholder="Ingrese Nombre" name="nom" required>
            </div>

            <div class="form-group">
              <label>Apellido*</label>
              <input class="form-control" type="text" placeholder="Ingrese Apellido" name="ape" required>
            </div>

            <div class="form-group">
              <label>Email*</label>
              <input class="form-control" type="email" placeholder="Ingrese Email" name="email" required>
            </div>

            <div class="form-group">
              <label>Contraseña</label>
              <input class="form-control" type="password" placeholder="Crear Contraseña" name="pw">
            </div>

            <div class="form-group" style="display: none;">
              <label>Rol</label>
              <input class="form-control" type="number" placeholder="Crear Contraseña" name="rol" value="2">
            </div>

              <button type="submit" class="btn btn-success btn-block" style="background-color: #0006A3;"><span class="menu-icon icon-checkmark"></span>Registrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>
          
        </div>
      </div>
      
    </div>
  </div> 
  </div> 


<script>
$(document).ready(function(){
    $("#myBtnreg").click(function(){
        $("#myModalreg").modal();
    });
});
</script>

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
		echo '<script type=text/javascript>alert("Registro modificado");window.location.href="confiAdmin.php"; </script>';
	}

	
?>