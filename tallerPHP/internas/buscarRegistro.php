<?php 
include("../dll/config.php");
include("../dll/mysql.php");
extract($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $site_name;?>
    </title>
    <link rel="stylesheet" href="../css/listar.css" type="text/css">
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
         <h1 class="title"><?php 
            
             
             if($param == 0){
                 $sql = "SELECT * FROM registros where cedula  like %".$dato."%";
             }
              if($param == 1){
                 $sql = "SELECT * FROM registros where nombres like %".$dato."%";
             }
              if($param == 2){
                 $sql = "SELECT * FROM registros where correo  like %".$dato."%";
             }
             
             
$registros = mysqli_query($link,$sql) or die ("Error al obtener todos los registros ".mysqli_error);
             $eval = mysqli_fetch_array($registros,MYSQLI_ASSOC);
             if($eval!=""){
    echo "Resgistro Encontrado!";
}else{
        echo  "Registro no econtrado :(" ;
    }
?>
   </h1>
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
