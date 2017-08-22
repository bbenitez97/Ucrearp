<?php

require('../conect/ClassConexionsqli.php');
	$Objeconexion=new Connection;

$id=$_POST['usuario'];
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$mail=$_POST['email'];
$pw=$_POST['pw'];
$rol=$_POST['rol'];

echo $sql="insert INTO usuarios(usu_id,usu_pw, usu_nombre, usu_apellido, usu_correo, usu_rol) VALUES ('$id','$pw','$nom','$ape','$mail','$rol')";

	$Objusu=$Objeconexion->Execute($sql);

	if ($rol==1) {
		echo '<script type=text/javascript>alert("usuario registrado con exito");window.location.href="../"; </script>';
	}
	if ($rol==2) {
		echo '<script type=text/javascript>alert("usuario registrado con exito");window.location.href="confiAdmin.php"; </script>';
	}

?>