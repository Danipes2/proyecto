<?php require_once('../conexiones/objCn.php'); ?>


<?php
$texto= mysql_real_escape_string($_REQUEST['texto']);
$nombre_receptor= mysql_real_escape_string($_REQUEST['nombre_receptor']);
$nombre_emisor= mysql_real_escape_string($_REQUEST['nombre_emisor']);
$fecha= mysql_real_escape_string($_REQUEST['fecha']);

$id_emisor= mysql_real_escape_string($_REQUEST['id_usuario_emisor']);
$id_receptor= mysql_real_escape_string($_REQUEST['id_usuario_receptor']);


$insertSQL = "INSERT INTO mensajes (asunto,fecha,usuario_emisor,usuario_receptor,id_usuario_emisor,id_usuario_receptor) VALUES ( '".$texto."', '".$fecha."', '".$nombre_emisor."', '".$nombre_receptor."', '".$id_emisor."', '".$id_receptor."')";


$Result1 = mysql_query($insertSQL, $objCn) or die(mysql_error());
 
  
 $insertSQL2 = "INSERT INTO mensajes_enviados (asunto,fecha,usuario_emisor,usuario_receptor,id_usuario_emisor,id_usuario_receptor) VALUES ( '".$texto."', '".$fecha."', '".$nombre_emisor."', '".$nombre_receptor."', '".$id_emisor."', '".$id_receptor."')";


$Result2 = mysql_query($insertSQL2, $objCn) or die(mysql_error());
 
  header(sprintf("Location:../mensajes.php"));





?>
