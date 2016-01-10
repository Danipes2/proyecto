<?php
// comprobamos que el usuario se ha registrado
// Si no lo ha hecho, le enviamos a una página para que lo haga
session_name();
session_start("usuario, idusuario");
if (!(isset($_SESSION["usuario"]))){
	session_unset();
	session_destroy();
	header ("Location:iniciosesion.php");
}
?>