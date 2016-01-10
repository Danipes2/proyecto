<?php require_once('../conexiones/objCn.php'); ?>


<?php


$deleteSQL = "DELETE  FROM usuario WHERE id_usuario=".$_REQUEST['id'];

$Result1 = mysql_query($deleteSQL, $objCn) or die(mysql_error());

session_start();//para saber cual es la sesion a destruir
session_unset();//para eliminar las variables de sesion
session_destroy();//con esto destruyes la sesion


  header(sprintf("Location:../index.php"));





?>
