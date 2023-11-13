<?php
/*$numerito = "5";
var_dump($numerito);
$numerito = (int) $numerito;
var_dump($numerito);  */

/*$dias = 5.89;
$dias = (int) $dias;
var_dump($dias);   */

/*-$banderita = "";
$banderita = (bool) $banderita; //convertir a booleanos.
var_dump( $banderita);
echo " \n";    */

//Fácil

$nombre = "Carlos";
$apellido = "Gómez";
$edad = 18;
$aprobado = true;

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " . $apellido;
$presento_examen = (bool) 0;

//Avanzado

$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo = $numero_respuestas / 1.0;
$michis = 3 + "5 michis"; 

var_dump( $promedio);
var_dump($nombre_completo );
var_dump($presento_examen);
var_dump($numero_preguntas);
var_dump($numero_respuestas);
var_dump($promedio_maximo);
var_dump($michis);
