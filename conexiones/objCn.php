<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_objCn = "localhost";
$database_objCn = "proyecto_bd";
$username_objCn = "root";
$password_objCn = "";
$objCn = mysql_pconnect($hostname_objCn, $username_objCn, $password_objCn) or die(mysql_error()); 
mysql_select_db($database_objCn, $objCn);
mysql_query("SET NAMES 'utf8'");
?>