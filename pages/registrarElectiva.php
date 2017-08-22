<?php
include_once("menuAdmin.php");

require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

		
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
	$cupos=$_POST['cupos'];
	$profesor=$_POST['profesor'];

	$Numreg=$Objeconexion->Execute("select * from electiva where elec_id=$id");

	if (count($Numreg)>0)
	{

		echo '<script type=text/javascript>alert("ERROR: El ID de la Electiva Ya Se Encuentra Registrado");window.location.href="regElectiva.php"; </script>';
	}
	else
	{


			$registrar = "INSERT INTO electiva (elec_id,elec_desc,elec_cupos,elec_descripcion,elec_pro) VALUES ('$id', '$nombre', '$cupos', '$descripcion', '$profesor')";
			$Objeconexion->Execute($registrar);
			echo $inse="INSERT INTO detalle_inscripcion(usu_id, elec_id) VALUES ('1','$id')";
			$Objeconexion->Execute($inse);

			echo '<script type=text/javascript>alert("Lectiva registrada con exito");window.location.href="electivasAdmin.php"; </script>';





	}








 ?>
	