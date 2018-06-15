
<?php
include ("../dll/config.php");
include ("../dll/mysql.php");
extract($_POST);
$query = "INSERT INTO talleres VALUES ('','$codigo','$nombre','$costo','$costo')";
$result = mysqli_query($link,$query) or die ('Error al insertar en registros '.mysqli_error);
echo "<script>alert('Datos Guardados')</script>";
echo "<script>location.href='../internas/talleres.php'</script>";

?>
  