<?php require_once('../conexiones/objCn.php'); ?>


<?php

$query_Recordset1 = "SELECT id_trayecto FROM reservas WHERE id_reservas=".$_REQUEST['id'];
	$Recordset1 = mysql_query($query_Recordset1, $objCn) or die(mysql_error());
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	$totalRows_Recordset1 = mysql_num_rows($Recordset1);
	
	$id_trayecto= $row_Recordset1['id_trayecto'];
	
	$query_Recordset1 = "SELECT asientos FROM trayectos WHERE id_trayecto='".$id_trayecto."' ";
	$Recordset1 = mysql_query($query_Recordset1, $objCn) or die(mysql_error());
	$row_Recordset1 = mysql_fetch_assoc($Recordset1);
	$totalRows_Recordset1 = mysql_num_rows($Recordset1);
	
	$asientos= $row_Recordset1['asientos'];
	
	
	$asientosactualizados = $asientos+1;
	$updateSQL = "UPDATE trayectos  SET asientos='".$asientosactualizados."' WHERE id_trayecto='".$id_trayecto."' ";
	
	$Result1 = mysql_query($updateSQL, $objCn) or die(mysql_error());
	


$deleteSQL = "DELETE FROM reservas WHERE id_reservas=".$_REQUEST['id'];

$Result1 = mysql_query($deleteSQL, $objCn) or die(mysql_error());





	
  header(sprintf("Location:../perfil_trayectos.php"));

?>
