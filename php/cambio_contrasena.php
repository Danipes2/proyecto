<?php require_once('../conexiones/objCn.php'); ?>


<?php
$id_usuario= mysql_real_escape_string($_REQUEST['id']);

$contraseña_nueva= mysql_real_escape_string($_REQUEST['contraseña_nueva_1']);



$updateSQL = "UPDATE usuario  SET contrasena='".$contraseña_nueva."' WHERE id_usuario='".$id_usuario."' ";
		
$Result1 = mysql_query($updateSQL, $objCn) or die(mysql_error());
	
	$_SESSION['contrasena']=$contraseña_nueva;
				
header(sprintf("Location:../perfil.php"));
			


?>
