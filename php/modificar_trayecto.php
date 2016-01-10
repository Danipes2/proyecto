<?php require_once('../conexiones/objCn.php'); ?>


<?php
$id_trayecto=mysql_real_escape_string($_REQUEST['id_trayecto']);
$ofertante=mysql_real_escape_string($_REQUEST['ofertante']);
$id_ofertante=mysql_real_escape_string($_REQUEST['id_ofertante']);
$localidad=mysql_real_escape_string($_REQUEST['localidad1']);
$institutos=mysql_real_escape_string($_REQUEST['institutos']);
$horariosa=mysql_real_escape_string($_REQUEST['horariosa']);
$horariovu=mysql_real_escape_string($_REQUEST['horariovu']);
$precio=mysql_real_escape_string($_REQUEST['precio']);
$asientos=mysql_real_escape_string($_REQUEST['asientos']);



	$updateSQL = "UPDATE trayectos  SET horario_ida='".$horariosa."', horario_vuelta='".$horariovu."',localidad='".$localidad."', instituto='".$institutos."', precio='".$precio."', asientos='".$asientos."', ofertante='".$ofertante."', id_ofertante='".$id_ofertante."' WHERE id_trayecto='".$id_trayecto."' ";
	
	$Result1 = mysql_query($updateSQL, $objCn) or die(mysql_error());


	
  header(sprintf("Location:../perfil_trayectos.php"));

?>
