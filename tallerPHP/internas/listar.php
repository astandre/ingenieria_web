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
 <header class="card">
       <h2>Campus Party</h2>
        <nav >
        <a href="">Inicio</a>
          <a href="../index.php">Incripcion</a>
            <a href="listar.php">Listar</a>
            <a href="cursos.php">Cursos</a>
            <a href="talleres.php">Talleres</a>
            <a href="">Acerca De</a>
        </nav>
         
    </header>

<body>
    <main>
       <h1 class="title">Listado de Inscritos</h1>
        <?php
include ("../dll/config.php");
include ("../dll/mysql.php");
$sql = "SELECT * FROM registros";
$registros = mysqli_query($link,$sql) or die ("Error al obtener todos los registros ".mysqli_error);
?>
          <section class="buscador card">
              <h2>Buscador</h2>
            <form  action="buscarRegistro.php" method="post">
              <label for=""><strong>Parametro:</strong> </label> <br>
              <input type="radio" name="param" value="0"  checked> Cedula<br>
  <input type="radio" name="param" value="1" > Nombre<br>
  <input type="radio" name="param" value="2"  > Correo <br>
               <label for=""><strong>Busqueda: </strong> </label> <br>
            <input type="text" name="dato" placeholder="Ingrese el valor de busqueda" required class="inputForm"> <br>
            <button>Buscar</button>
           </form>
          </section>
           <section class="tabla">
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
                   </section>
    </main>
</body>

</html>
