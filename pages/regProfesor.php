<?php
require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

	$sql="select pro_id,pro_nombre,pro_apellido,pro_email,pro_tel from profesor";

	$Objreg=$Objeconexion->Execute($sql);


include_once("menuAdmin.php");
?>



<!DOCTYPE html>
<html>

<body>

<div id="page-wrapper">
    <div class="row"></div>
    <div class="panel panel-default"  style="margin-top: 2%;">
        <div class="panel-heading">
            Registar profesor
        </div>
	    <div class="panel-body">

			<form action="registrarProfesor.php" method="POST" name="frm" role="form">

				<div class="col-lg-6" >
	              	<div class="form-group">
	                <label>Id Profesor *</label>
	                <input type="text" class="form-control" placeholder="Ingrese Identificacion"  name="id" required>
	                </div>

		            <div class="form-group">
					<label>Nombre *</label>
					<input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre" required>
					</div>

					<div class="form-group">
					<label>Apellido *</label> 
					<input type="text" class="form-control" placeholder="Ingrese Apellido" name="apellido" required>
					</div>
					
					<div class="form-group">
					<label>Email: *</label>
					<input type="email" class="form-control" placeholder="Ingrese Email" name="email" required>
					</div>
					
					<div class="form-group">
					<label>Telefono: </label>
					<input type="text" class="form-control" placeholder="Ingrese Telefono" name="telefono">
					</div>

					<input type="submit" name="registrar" value="Registrar" class="btn btn-info" style="float: right;">
				</div>
			</form>
		</div>
	</div>
</div>
		

</body>
</html>