<?php
include("dll/config.php");
include("dll/mysql.php");
$miconexion = new DB_mysql;
$miconexion -> conectar($db ,$host,$user_db,$pass);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clases en PHP</title>
</head>
<body>
    <header>
        <h1>Implementacion de la clase mysql</h1>
    </header>
    <main>
        <?php
         $miconexion -> consulta("select nombres, apellidos, correo from registros");
        $miconexion ->verconsultacrud();
        $miconexion -> consulta("select * from registros where id = 1");
        $lista = $miconexion ->consulta_lista();
        for ($i=0; $i < 10; $i++) { 
				echo $lista[$i]." <br>";
			}
        ?>

    </main>
</body>
</html>