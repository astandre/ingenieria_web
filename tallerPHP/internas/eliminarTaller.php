<?php
include ("../dll/config.php");
include ("../dll/mysql.php");
extract($_GET);
$query = "DELETE FROM talleres WHERE id=".$id;
$result = mysqli_query($link,$query) or die ('Error al eliminar el curso '.mysqli_error);
echo "<script>alert('Taller Eliminado')</script>";
echo "<script>location.href='../internas/talleres.php'</script>";

?>
  