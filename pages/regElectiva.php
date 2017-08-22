<?php
require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

	$sql="select pro_id,ucase(concat(pro_nombre,' ',pro_apellido)) as Profesor from profesor";

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
            Registar lectiva
        </div>
	    <div class="panel-body">
			<form action="registrarElectiva.php" method="POST" name="frm">

				<div class="col-lg-6" >
		            <div class="form-group">
		            <label>Id Lectiva *</label>
					<input type="text" class="form-control" placeholder="Ingrese Id" name="id" required>
					</div>
				
					<div class="form-group">
					<label>Nombre *</label>
					<input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre" required>
					</div>

					<div class="form-group">
					<label>Profesor: *</label>
					<select name="profesor" class="form-control" required>
						<option>Seleccione profesor</option>
						<?php
						for($i=0; $i<count($Objreg); $i++)
						{
							echo"<option value=".$Objreg[$i][0].">".$Objreg[$i][1]."</option>";			
						}
						?>
					</select>
					</div>
				
					<div class="form-group">
					<label>Descripcion *</label>
					<textarea name="descripcion" class="form-control" placeholder="Ingrese Descripcion De Electiva" required></textarea>
					</div>

					<div class="form-group">
					<label>Cupos *</label>
					<input type="text" class="form-control" placeholder="Ingrese Cupos " name="cupos" required>
					</div>
					
		            <input type="submit" name="registrar" value="Registrar" class="btn btn-info" style="float: right;">

		        </div>
			</form>
		</div>
	</div>
</div>

</body>
</html>