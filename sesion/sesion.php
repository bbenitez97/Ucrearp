<?php @session_start();

	$usu=$_POST["usuario"];
	$pass=$_POST["pw"];
$_SESSION['usu']=$_REQUEST['usuario'];
$_SESSION['pw']=$_REQUEST['pw'];


require('../conect/ClassConexionsqli.php');
			$Objeconexion=new Connection;
			$Objingreso=$Objeconexion->Execute("select usu_id,usu_pw,usu_rol FROM usuarios where usu_id='$usu'");
			$cont_usu=0;
			
			for ($i=0; $i < count($Objingreso); $i++) { 
				if ($Objingreso[$i][1]==$pass) {
						if ($Objingreso[$i][2]==2) {
							echo '<script type="text/javascript">
							window.location.href="../pages/electivasAdmin.php";
							</script>';
						}else{
							echo '<script type="text/javascript">
							window.location.href="../pages/electivasEstudiante.php";
							</script>';
						}

					}else{
						$_SESSION['cont_usu']=$_SESSION['cont_usu']+1;
						if ($_SESSION['cont_usu']==3) {
							echo '<script type="text/javascript">
							alert("Usted a superado el numero de intentos")
							</script>';		
						}else{
							echo '<script type="text/javascript">
								  alert("la contraseña no es valida")
								  window.location.href="../"</script>';
						}


		
			}
			}	
?>