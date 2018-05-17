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
    <header>
        <h1>Formularios de inscripción</h1>
    </header>
    <main class="card">
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
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento"> <br>
            <label for="">Cedula: </label> <br>
            <input type="number" name="cedula" placeholder="Cédula" required class="inputForm"> <br>
            <label for="">Seleccione el tipo de participante: </label> <br>
            <select name="tipo" id="">
                <option value="0" >Profesor</option>
                <option value="1">Estudiante</option>
                <option value="2">Externo</option>
            </select> <br>
            <label for="">Cursos ofertados: </label> <br>
            <select name="curso" id="">
                <option value="1" > Ionic<br>
                <option  value="2" > Android<br>
                <option  value="3" > React <br>
            </select> <br>


            <label for="">Talleres ofertados:</label> <br>
             <select name="taller_ofer[]" id="" multiple>
                          <?php
$query = "select * from talleres";
$talleres = mysqli_query($link,$query) or die ('Error al obtener los talleres');
while ($taller = mysqli_fetch_array($talleres,MYSQLI_ASSOC)){
	?>
                <option  value="<?php echo $taller['id'];?>" class="option">
                <?php echo $taller['nombre'];?><br>
                <?php
}
?>
            </select> <br>
 
                <button>Guardar</button>
        </form>
    </main>
</body>

</html>
