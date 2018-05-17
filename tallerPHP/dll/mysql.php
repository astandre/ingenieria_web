<?php
include("config.php");
$link = mysql_connect ($db_host,$db_usr,$db_pass) or die ("No se ha podido conectar a la BD".mysql_error());
mysql_select_db($db_name) or die ("No se ha podido conectar a la BD");
?>