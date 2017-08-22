<?php
include_once("menuAdmin.php");

require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

		
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];

	$Numreg=$Objeconexion->Execute("select * from profesor where pro_id=$id");

	if (count($Numreg)>0)
	{

		echo '<script type=text/javascript>alert("ERROR: El ID Ingresado Ya Se Encuentra Registrado");window.location.href="regProfesor.php"; </script>';
	}
	else
	{


			$registrar = "insert INTO profesor (pro_id,pro_nombre,pro_apellido,pro_email,pro_tel) VALUES ('$id', '$nombre', '$apellido', '$email', '$telefono')";
			$Objeconexion->execute($registrar);

			echo '<script type=text/javascript>alert("Profesor registrado con exito");window.location.href="listaProfesores.php"; </script>';





	}








 ?>
	