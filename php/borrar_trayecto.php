<?php require_once('../conexiones/objCn.php'); ?>


<?php

$deleteSQL = "DELETE FROM trayectos WHERE id_trayecto=".$_REQUEST['id'];
$Result1 = mysql_query($deleteSQL, $objCn) or die(mysql_error());



$deleteSQL = "DELETE FROM reservas WHERE id_trayecto=".$_REQUEST['id'];

$Result1 = mysql_query($deleteSQL, $objCn) or die(mysql_error());





	
  header(sprintf("Location:../perfil_trayectos.php"));

?>
