<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscripción | Evento - UTPL</title>
    <link rel="stylesheet" href="../css/stylephp.css" type="text/css">
    <meta name="description" content="Formulario de Inscripcion">
    <meta name="keywords" content="formulario, inscripcion">
    <meta name="author" content="Andre Herrera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
    <?php

$taller_html = 0;
$taller_css = 0;
$taller_vis = 0;
$taller_coci = 0;
extract($_GET);
           
include ("../dll/config.php");
include ("../dll/mysql.php");
$sql = "SELECT * FROM registros where id=".$id;
$registros = mysqli_query($link,$sql) or die ("Error al obtener todos los registros ".mysqli_error);
$registro = mysqli_fetch_array($registros,MYSQLI_ASSOC);

$costo_evento = 100;
$costo_curso = 80;
$costo_taller = 10;
    
$desc_docente = 10;
$desc_alumno = 20;
$cont_taller = 0;

$lista[0] = "Docente";
$lista[1] = "Estudiante";
$lista[2] = "Externo";


$lista_curso[0] = "Ionic";
$lista_curso[1] = "Andoroid";
$lista_curso[2] = "React";
    
$sql2 = "select registrotaller.id_registro, talleres.id,talleres.nombre,talleres.costo from registrotaller inner join talleres on registrotaller.id_taller = talleres.id where registrotaller.id_registro =".$id;
$registros2 = mysqli_query($link,$sql2) or die ("Error al obtener todos los registros ".mysqli_error);
//while ($registro2 = mysqli_fetch_array($registros2,MYSQLI_ASSOC)){
//    $cont_taller=$cont_taller+1;
//}

    ?>
        <header>
            <h1>
                Prefactura
            </h1>
        </header>
        <main class="card">
            <h2>Informacion personal</h2>
            <table>
                <tr>
                    <td>
                        <strong>Cedula:</strong>
                    </td>
                    <td class="info">
                        <?php echo $registro['cedula'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Nombre: </strong>
                    </td>
                    <td class="info">
                        <?php echo $registro['nombres']." ".$registro['apellidos'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Correo: </strong>
                    </td>
                    <td class="info">
                        <?php echo $registro['correo'] ?>
                    </td>
                </tr>
            </table>
            <h3>Detalle: </h3>
            <table class="tabla-detalle">
                <tr>
                    <th>Razon:</th>
                    <th>Costo:</th>
                </tr>
                <tr>
                    <td>Costo evento: </td>
                    <td class="detalle">
                        <?php echo  $costo_evento ?>$
                    </td>
                </tr>
                <tr>
                 <?php
    $sqlCursos = "SELECT * FROM curso where id_curso =".$registro['curso'];
$cursos = mysqli_query($link,$sqlCursos) or die ("Error al obtener todos los registros ".mysqli_error);
$curso= mysqli_fetch_array($cursos,MYSQLI_ASSOC);
                        $costo_curso = $curso['costo'];
                       
?>
                    <td>
                       Costo por curso
                        <?php echo "(". $curso['nombre'].")"?> :</td>
                    <td class="detalle">
                        <?php echo $costo_curso?>$
                    </td>
                </tr>
                <tr>
 
                       <td>Costo total por talleres:
                   <br>
                      
                       <?php
$costo_total_taller = 0 ;     
while ($registro2 = mysqli_fetch_array($registros2,MYSQLI_ASSOC)){
  $cont_taller=$cont_taller+1;
    echo "<strong>".$registro2['nombre']." >>>>> ".$registro2['costo'] ."</strong><br>";
$costo_total_taller = $costo_total_taller + (int) $registro2['costo'] ;  
}
                       
$costo_total = $costo_total_taller +$costo_evento;
$costo_total = $costo_total + $costo_curso;
$valor_desc = 0;
                        
                          ?>
                        </td>
                    <td class="detalle">
                        <?php echo $costo_total_taller ?>$
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                if($registro['tipo'] ==0){
    echo "Descuento por ".$lista[$registro['tipo']]." ".$desc_docente;
                }
                if($registro['tipo'] ==1){
    echo "Descuento por ".$lista[$registro['tipo']]." ".$desc_alumno;
                }
                        if($registro['tipo'] ==2){

    echo "No hay descuento";
}
                ?>%: </td>
                    <td class="detalle">
                        <?php
                if($registro['tipo'] ==0){
      $valor_desc = ($costo_total * $desc_docente) / 100;
                    echo "-".$valor_desc."$";
                }
                if($registro['tipo'] ==1){
    $valor_desc = ($costo_total * $desc_alumno) / 100;
                    echo "-".$valor_desc."$";
                }
                        if($registro['tipo'] ==2){
    echo 0;
}
                ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Costo total:
                    </td>
                    <td class="detalle">
                        <?php
    $costo_total = $costo_total - $valor_desc;
    echo $costo_total."$";
                        ?>
                    </td>
                </tr>
            </table>
            <h4 class="codigo"> Codigo de barras: </h4>

            <p class="codigo">
                |||||||||||||||||||||||||||||||||||||||||||||||||||||
            </p>
            <p class="codigo">
                <?php echo rand(0,100000).rand(0,100000).rand(0,1000000).rand(0,10000000)?>
            </p>

        </main>
</body>
</html>