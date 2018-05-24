<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscripción | Evento - UTPL</title>    
    <link rel="stylesheet" href="../css/listar.css" type="text/css">
    <meta name="description" content="Formulario de Inscripcion">
    <meta name="keywords" content="formulario, inscripcion">
    <meta name="author" content="Andre Herrera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
 <header>
        <nav class="card">
            <a href="">Inicio</a>
           <a href="../index.php">Incripcion</a>
            <a href="internas/listar.php">Listar</a>
            <a href="">Acerca De</a>
        </nav>
         <h1 class="title">Listado de Inscritos</h1>
    </header>

<body>
    <main>
        <?php
include ("../dll/config.php");
include ("../dll/mysql.php");
$sql = "SELECT * FROM registros";
$registros = mysqli_query($link,$sql) or die ("Error al obtener todos los registros ".mysqli_error);
?>
            <table class="card">
                <tr>
                   <th>ID:</th>
                    <th>Nombres: </th>
                    <th>Direccion: </th>
                    <th>Correo: </th>
                    <th>Cedula: </th>
                    <th>Telefono: </th>
                    <th>Fecha nacimiento: </th>
                    <th>Detalle:  </th>
                </tr>

                <?php
while ($registro = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
  ?>
                    <tr>
                       <td>
                            <?php echo $registro['id'];?>
                       </td>
                        <td>
                            <?php echo $registro['nombres']." ".$registro['apellidos'];?>
                        </td>
                        <td>
                            <?php echo $registro['direccion'];?>
                        </td>
                        <td>
                            <?php echo $registro['correo'];?>
                        </td>
                        <td>
                            <?php echo $registro['cedula'];?>
                        </td>
                        <td>
                            <?php echo $registro['telefono'];?>
                        </td>
                        <td>
                            <?php echo $registro['fecha_nacimiento'];?>
                        </td>
                        <td>
<!--                            <a href="">Detalle</a>-->
                           
                            <a href="procesar.php?id=<?php echo $registro['id'] ?>">Detalle</a>
                        </td>
                    </tr>
                    <?php
}
?>
            </table>
    </main>
</body>

</html>
