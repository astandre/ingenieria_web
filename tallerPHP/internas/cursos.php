<?php 
include("../dll/config.php");
include("../dll/mysql.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $site_name;?>
    </title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <meta name="description" content="Formulario de Inscripcion">
    <meta name="keywords" content="formulario, inscripcion">
    <meta name="author" content="Andre Herrera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
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
    <main>
        <h1 class="title">Administracion cursos</h1>
        <section class="card">
            <form action="guardarCursos.php" method="post">
                <label for=""><strong>Nombre curso:</strong> </label> <br>
                <input type="text" name="nombre" placeholder="Nombre curso" required class="inputForm"> <br>
                <label for=""><strong>Costo: </strong></label> <br>
                <input type="number" name="costo" placeholder="costo" required class="inputForm"> <br>
                <label for=""><strong>Cupos:</strong> </label> <br>
                <input type="number" name="cupos" placeholder="Cupos" required class="inputForm"> <br>
                <button>Guardar</button>
            </form>
        </section>
        <h2  class="title-small">Cursos Disponibles</h2>
        <section class="card">

            <table>
                <tr>
                    <th>ID:</th>
                    <th>Nombre: </th>
                    <th>Costo: </th>
                    <th>Cupos: </th>
                    <th>Eliminar:</th>

                </tr>
                <?php
$sql = "SELECT * FROM curso";
$cursos = mysqli_query($link,$sql) or die ("Error al obtener todos los registros ".mysqli_error);
               while ($curso = mysqli_fetch_array($cursos,MYSQLI_ASSOC)){
               ?>
                    <tr>
                        <td>
                            <?php echo $curso['id_curso'];?>
                        </td>
                        <td>
                            <?php echo $curso['nombre'];?>
                        </td>
                        <td>
                            <?php echo $curso['cupos'];?>
                        </td>
                        <td>
                            <?php echo $curso['costo'];?>
                        </td>
                        <td>
                            <a href="eliminarCurso.php?id=<?php echo  $curso['id_curso'] ?>">Eliminar</a>
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
