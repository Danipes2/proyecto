<?php require_once('conexiones/objCn.php'); ?>


 <?php
$localidades=mysql_query("select id_localidades, nombre
                       from localidades
					   order by nombre ASC");
$institutos=mysql_query("select id_institutos, nombre
                       from institutos
					   order by nombre ASC");
?>     
