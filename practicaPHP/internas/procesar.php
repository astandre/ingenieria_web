<?php
extract($_POST);
//$var1 = 2;
//$var2 = "3";
//echo $res = $var1 + $var2;
$fecha_actual = "2018-05-10";
$tiempo = strtotime($fecha_nacimiento);
$ahora = time();
$edad = ($ahora - $tiempo) / (60*60*24*365.25);
$edad = floor($edad);
echo "Hola PHP <br> Bienvenidos ".$nombres." ".$apellidos;
print "<br> Ud tiene: ". $edad . " años de edad,";
print "<br>";
//Condiciones
if($edad >=18){
    print "Usted es mayor de edad";
}else{
    print "Usted es menor de edad";
}
//Lista
$lista[0] = "Docente";
$lista[1] = "Estudiante";
$lista[2] = "Abogado";
$lista[3] = "Ingeniero";
$lista[4] = "Doctor";
$lista[5] = "Policia";
//For
for($i = 0; $i<count($lista); $i++){
    print "Elemnto: ". $i . " contenido: ". $lista[$i]."<br>";
}

?>