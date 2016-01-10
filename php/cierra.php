<?php

//setcookie("usu_r40", "", time() - 3600, "/");

session_start();//para saber cual es la sesion a destruir
session_unset();//para eliminar las variables de sesion
session_destroy();//con esto destruyes la sesion



header(sprintf("Location:../index.php"));
?>
