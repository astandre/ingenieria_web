<?php
include("config.php");
$link = mysqli_connect ($db_host,$db_usr,$db_pass,$db_name) or die ("No se ha podido conectar a la BD".mysql_error());
mysqli_select_db($link,$db_name) or die ("No se ha podido conectar a la BD");
?>