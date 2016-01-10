<?php require_once('../conexiones/objCn.php'); ?>


<?php


$deleteSQL = "DELETE FROM mensajes WHERE id_mensajes=".$_REQUEST['id'];

$Result1 = mysql_query($deleteSQL, $objCn) or die(mysql_error());

  header(sprintf("Location:../mensajes.php"));





?>
