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
extract($_POST);
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

if ($taller_html!=0){
    $cont_taller = $cont_taller +1;
}
if ($taller_css!=0){
    $cont_taller = $cont_taller +1;
}
if ($taller_vis!=0){
    $cont_taller = $cont_taller +1;
}
if ($taller_coci!=0){
    $cont_taller = $cont_taller +1;
}
$costo_total_taller = $costo_taller * $cont_taller;
$costo_total = $costo_total_taller +$costo_evento;
$costo_total = $costo_total + $costo_curso;
$valor_desc = 0;
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
                        <?php echo $cedula ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Nombre: </strong>
                    </td>
                    <td class="info">
                        <?php echo $nombres." ".$apellidos ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Correo: </strong>
                    </td>
                    <td class="info">
                        <?php echo $correo ?>
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
                    <td>
                       Costo por curso
                        <?php echo "(".$lista_curso[$curso-1].")"?> :</td>
                    <td class="detalle">
                        <?php echo $costo_curso?>$
                    </td>
                </tr>
                <tr>
                    <td>Costo total por talleres
                        <?php echo $cont_taller ?>: </td>
                    <td class="detalle">
                        <?php echo $costo_total_taller ?>$
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                if($tipo ==0){
    echo "Descuento por ".$lista[$tipo]." ".$desc_docente;
                }
                if($tipo ==1){
    echo "Descuento por ".$lista[$tipo]." ".$desc_alumno;
                }
                        if($tipo ==2){

    echo "No hay descuento";
}
                ?>%: </td>
                    <td class="detalle">
                        <?php
                if($tipo ==0){
      $valor_desc = ($costo_total * $desc_docente) / 100;
                    echo "-".$valor_desc."$";
                }
                if($tipo ==1){
    $valor_desc = ($costo_total * $desc_alumno) / 100;
                    echo "-".$valor_desc."$";
                }
                        if($tipo ==2){
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