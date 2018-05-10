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

echo "Prefactura <br>";
echo "Informacion personal <br>";
echo "Cedula: ". $cedula." <br>";
echo "Nombre: ". $nombres. " ".$apellidos ." <br>";
echo "Correo: ". $correo." <br>";
echo "<br>Detalle <br>";
echo "Costo evento = ".$costo_evento."<br>";
if($curso!=0){
    echo "Costo por curso ".$lista_curso[$curso-1] ." = ". $costo_curso."<br>";
    $costo_total = $costo_total + $costo_curso;
}
echo "Costo total por talleres ".$cont_taller ." = ".$costo_total_taller ."<br>";

$valor_desc = 0;
if($tipo ==0){
    echo "Descuento por ".$lista[$tipo]." ".$desc_docente."% <br>";
    $valor_desc = ($costo_total * $desc_docente) / 100;
    $costo_total = $costo_total - $valor_desc;
    echo "El valor total a pagar es de = ". $costo_total."$";
}

if($tipo ==1){
    echo "Descuento por ".$lista[$tipo]." ".$desc_alumno."% <br>";
    $valor_desc = ($costo_total * $desc_alumno) / 100;
    $costo_total = $costo_total -$valor_desc;
    echo "El valor total a pagar es de = ". $costo_total."$";
}
if($tipo ==2){

    echo "El valor total a pagar es de = ". $costo_total."$";
}
echo "<br> Codigo de barras: <br>";
echo "||||||||||||||||||||||||||||||||||||||||||||||||||||||||<br>";
echo "4 5 9 8 7 2 1 7 1 9 8 3 4 7 2 ";
?>