<?php require_once('../conexiones/objCn.php'); ?>

<?php require_once('../funciones/sesiones.php'); ?>

<?php


	$id_usuario= mysql_real_escape_string($_REQUEST['id']);
	$nombre= mysql_real_escape_string($_REQUEST['nombre']);
	$apellidos= mysql_real_escape_string($_REQUEST['apellidos']);
	$sexo= mysql_real_escape_string($_REQUEST['sexo']);
	$email= mysql_real_escape_string($_REQUEST['email']);
	$telefono= mysql_real_escape_string($_REQUEST['telefono']);
	$fecha_nacimiento= mysql_real_escape_string($_REQUEST['fecha_nacimiento']);
	$localidad1= mysql_real_escape_string($_REQUEST['localidad1']);
	$texto= mysql_real_escape_string($_REQUEST['texto']);
	
	
	
	$updateSQL = "UPDATE usuario SET nombre='".$nombre."', apellidos='".$apellidos."', sexo='".$sexo."', email='".$email."',  telefono='".$telefono."', fecha_nacimiento='".$fecha_nacimiento."', localidad='".$localidad1."', texto='".$texto."' WHERE id_usuario='".$id_usuario."' ";
	
	
	$Result1 = mysql_query($updateSQL, $objCn) or die(mysql_error());
	 
	
	 $query_Recordset1 = "SELECT * FROM usuario WHERE id_usuario='".$id_usuario."'  ";
	$Recordset1 = mysql_query($query_Recordset1, $objCn) or die(mysql_error());
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	$totalRows_Recordset1 = mysql_num_rows($Recordset1);
	
	$_SESSION["usuario"]= $row_Recordset1['nombre'];
	$_SESSION["apellidos"]= $row_Recordset1['apellidos'];
	$_SESSION["sexo"]= $row_Recordset1['sexo'];
	$_SESSION["email"]= $row_Recordset1['email'];
	$_SESSION["telefono"]= $row_Recordset1['telefono'];
	$_SESSION["fecha_nacimiento"]= $row_Recordset1['fecha_nacimiento'];
	$_SESSION["contrasena"]= $row_Recordset1['contrasena'];
	$_SESSION["texto"]= $row_Recordset1['texto'];
	$_SESSION["valor_opiniones"]= $row_Recordset1['valor_opiniones'];
	$_SESSION["localidad"]= $row_Recordset1['localidad'];
	 
	
  header(sprintf("Location:../perfil.php"));
	




?>
