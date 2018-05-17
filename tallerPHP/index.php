<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscripción | Evento - UTPL</title>
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
        <form action="internas/procesar.php" method="post">
           <label for="">Nombres: </label> <br>
            <input type="text" name="nombres" placeholder="Nombres" required class="inputForm"> <br>
            <label for="">Apellidos: </label> <br>
            <input type="text" name="apellidos" placeholder="Apellidos" required class="inputForm"> <br>
            <label for="">Telefono: </label> <br>
            <input type="number" name="telefono" placeholder="Teléfono" class="inputForm"> <br>
            <label for="">Email: </label> <br>
            <input type="email" name="correo" placeholder="Correo" required class="inputForm"> <br>
<!--            <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento"> <br>-->
            <label for="">Cedula: </label> <br>
            <input type="number" name="cedula" placeholder="Cédula" required class="inputForm"> <br>
            <label for="" >Seleccione el tipo de participante: </label> <br>
               <select name="tipo" id="">
                <option value="0" >Profesor</option>
                <option value="1">Estudiante</option>
                <option value="2">Externo</option>
            </select> <br>
            <label for="">Cursos ofertados: </label> <br>
            <input type="radio" name="curso" value="1" class="option" checked> Ionic<br>
            <input type="radio" name="curso" value="2" class="option"> Android<br>
            <input type="radio" name="curso" value="3" class="option"> React <br>
            <label for="">Talleres ofertados:</label> <br>
            <input type="checkbox" name="taller_html" value ="1" class="option"> HTML <br>
            <input type="checkbox" name="taller_css" value ="2" class="option"> CSS <br>
            <input type="checkbox" name="taller_vis" value ="3" class="option"> JavaScript <br>
            <input type="checkbox" name="taller_coci" value ="4" class="option"> Diseño <br>
            <button>Guardar</button>
        </form>
    </main>
</body>
</html>