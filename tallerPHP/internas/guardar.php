
<?php
include ("../dll/config.php");
include ("../dll/mysql.php");
extract($_POST);
$query = "INSERT INTO registros VALUES ('','$nombres','$apellidos','$direccion','$correo','$cedula','$telefono','$fecha_nacimiento','$tipo','$curso','$taller_ofer[0]')";
$result = mysqli_query($link,$query) or die ('Error al insertar en registros '.mysqli_error);
echo $query."<br>";
$sql2 = "SELECT MAX(id) from registros";
$result2 = mysqli_query($link,$sql2) or die ("Error al obtener el maximo id ".mysqli_error);
while($line = mysqli_fetch_array($result2)){
    $id_registro = $line[0];
}
echo $sql2."<br>";

for($i=0;$i<count($taller_ofer);$i++){
    $sql3 = "INSERT INTO registrotaller values('','$id_registro','$taller_ofer[$i]')";
    $result3 = mysqli_query($link,$sql3) or die ("Error al insertar los talleres ".mysqli_error);
}
echo $sql3."<br>";
echo "<script>alert('Datos Guardados')</script>";
echo "<script>location.href='../internas/listar.php'</script>";

?>
  