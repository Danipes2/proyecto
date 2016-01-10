<?php require_once('../conexiones/objCn.php'); ?>


<?php
$localidad1= mysql_real_escape_string($_REQUEST['localidad1']);
$institutos= mysql_real_escape_string($_REQUEST['institutos']);
$horariosa= mysql_real_escape_string($_REQUEST['horariosa']);
$horariovu= mysql_real_escape_string($_REQUEST['horariovu']);
$precio=mysql_real_escape_string($_REQUEST['precio']);
$asientos=mysql_real_escape_string($_REQUEST['asientos']);
$ofertante=mysql_real_escape_string($_REQUEST['ofertante']);
$id_ofertante=mysql_real_escape_string($_REQUEST['id_ofertante']);



$insertSQL = "INSERT INTO trayectos (horario_ida,horario_vuelta,localidad,instituto,precio,asientos,ofertante,id_ofertante) VALUES ( '".$horariosa."', '".$horariovu."', '".$localidad1."', '".$institutos."', '".$precio."', '".$asientos."', '".$ofertante."','".$id_ofertante."')";


$Result1 = mysql_query($insertSQL, $objCn) or die(mysql_error());
 
  
  header(sprintf("Location:../perfil_trayectos.php"));





?>
