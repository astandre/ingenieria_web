<?php 
include("dll/config.php");
include("dll/mysql.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $site_name;?>
    </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
            <a href="index.php">Incripcion</a>
            <a href="internas/listar.php">Listar</a>
            <a href="internas/cursos.php">Cursos</a>
            <a href="internas/talleres.php">Talleres</a>
            <a href="">Acerca De</a>
        </nav>
         
    </header>
    <h1 class="title">Formularios de inscripción</h1>
    <main >
       <section class="card">
           
       
        <form action="internas/guardar.php" method="post">
            <label for="">Nombres: </label> <br>
            <input type="text" name="nombres" placeholder="Nombres" required class="inputForm"> <br>
            <label for="">Apellidos: </label> <br>
            <input type="text" name="apellidos" placeholder="Apellidos" required class="inputForm"> <br>
            <label for="">Direccion: </label> <br>
            <input type="text" name="direccion" placeholder="Direccion" required class="inputForm"> <br>
            <label for="">Telefono: </label> <br>
            <input type="number" name="telefono" placeholder="Teléfono" class="inputForm"> <br>
            <label for="">Email: </label> <br>
            <input type="email" name="correo" placeholder="Correo" required class="inputForm"> <br>
            <label for="">Fecha nacimiento: </label> <br>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="inputForm"> <br>
            <label for="">Cedula: </label> <br>
            <input type="number" name="cedula" placeholder="Cédula" required class="inputForm"> <br>
            <label for="">Seleccione el tipo de participante: </label> <br>
            <select name="tipo" id="" class="inputForm">
                <option value="0" >Profesor</option>
                <option value="1">Estudiante</option>
                <option value="2">Externo</option>
            </select> <br>
            <label for="">Cursos ofertados: </label> <br>
            <select name="curso" id=""  class="inputForm">
               <?php
                $query_cursos = "SELECT * FROM curso";
                $cursos = mysqli_query($link,$query_cursos) or die ('Error al obtener los talleres');
                echo $query_cursos;
                 
                while ($curso= mysqli_fetch_array($cursos,MYSQLI_ASSOC)){
                    if($curso['cupos']>0){
                         echo  "<option value=".$curso['id_curso']." >".$curso['nombre']." | $".$curso['costo']." Disponibles ".$curso['cupos']."<br>";
                    }else{
                         echo  "<option value=".$curso['id_curso']." disabled>".$curso['nombre']." | $".$curso['costo']." Disponibles ".$curso['cupos']."<br>";
                    }
               
                }
                ?>
            </select> <br>


            <label for="">Talleres ofertados:</label> <br>
             <select name="taller_ofer[]" id="" multiple class="inputForm">
                          <?php
$query = "select * from talleres";
$talleres = mysqli_query($link,$query) or die ('Error al obtener los talleres');
while ($taller = mysqli_fetch_array($talleres,MYSQLI_ASSOC)){
	
                 if ($taller['cupos']>0){
                     echo   "<option  value=".$taller['id']." class='option' >";
                     echo $taller['nombre'].' | $'.$taller['costo']." Disponibles(".$taller['cupos'].")<br>";
                 }else{
                  echo   "<option  value=".$taller['id']." class='option' disabled>";
                      echo $taller['nombre']." | $".$taller["costo"]." Disponibles(".$taller['cupos'].")<br>";
                 }               
}
?>
            </select> <br>
 
                <button>Guardar</button>
        </form>
        </section>
    </main>
</body>

</html>
