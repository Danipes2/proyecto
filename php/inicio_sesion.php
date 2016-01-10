<?php require_once('../conexiones/objCn.php'); ?>
<?php
ob_start();
if(isset($_POST["tcnUsername"])  && isset($_POST["tcnPassword"])){

	session_start();
	if ($_POST['action'] == "checkdata") {
		if ($_SESSION['tmptxt'] == $_POST['tmptxt']) {

			$userN =$_POST["tcnUsername"];
			$passN = $_POST["tcnPassword"];
			mysql_select_db($database_objCn, $objCn);
			$result = mysql_query("SELECT * FROM usuario WHERE nombre ='$userN'");
			if($row = mysql_fetch_array($result)){

				if(($row["contrasena"] == ($passN))){
					session_name();
					session_start();
					
					//session_register("usuario");
					
					
					$_SESSION['id_usuario']=$row["id_usuario"];
            		$_SESSION['usuario']=$row["nombre"];
					$_SESSION['apellidos']=$row["apellidos"];
					$_SESSION['sexo']=$row["sexo"];
					$_SESSION['email']=$row["email"];
					$_SESSION['telefono']=$row["telefono"];
					$_SESSION['fecha_nacimiento']=$row["fecha_nacimiento"];
					$_SESSION['contrasena']=$row["contrasena"];
					$_SESSION['texto']=$row["texto"];
					$_SESSION['valor_opiniones']=$row["valor_opiniones"];
					$_SESSION['localidad']=$row["localidad"];
					
					
					$url="Location:../index_user.php";
					header($url);
				} else {
					$url="Location:../iniciosesion.php";
					header($url);
					
				}
			} else {
				$url="Location:../iniciosesion.php";
					header($url);
				
			}
			mysql_free_result($result);
		
		}else {
				$url="Location:../iniciosesion.php";
					header($url);
				
			}
		
	}
	
	
}
mysql_close();
?>
