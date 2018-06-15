
<?php
include ("../dll/config.php");
include ("../dll/mysql.php");
extract($_GET);
$query = "DELETE FROM curso WHERE id_curso=".$id;
$result = mysqli_query($link,$query) or die ('Error al eliminar el curso '.mysqli_error);
echo "<script>alert('Curso Eliminado')</script>";
echo "<script>location.href='../internas/cursos.php'</script>";

?>
  