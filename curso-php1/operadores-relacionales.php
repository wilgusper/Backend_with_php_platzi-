<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;
// == Igual
//var_dump($a == $b);
// === Idéntico
/*var_dump($a === $b);
var_dump($a === $b2);*/
// != Diferente
//var_dump($a != $b);
//var_dump($a != $b2);
// !== Diferente
/*var_dump($a !== $b);
var_dump($a !== $b2);*/
// < MEnor que
/*var_dump($a < $b);
var_dump($c < $b);
var_dump($d < $b);*/
// < Mayor que
/*var_dump($a > $b);
var_dump($c > $b);
var_dump($d > $b);*/
// >= Mayor o igual que
/*var_dump($a >= $b);
var_dump($c >= $b);
var_dump($d >= $b);*/
// <= Menor o igual que
/*var_dump($a <= $b);
var_dump($c <= $b);
var_dump($d <= $b);*/
// <=> operador nave espacial
//echo 2 <=> 1; //1
//echo 1 <=> 1; //0
//echo 2 <=> 8;  //-1
//?? Fusión de null
$edad_de_pepito = 23;
echo $edad_de_juanito ?? $edad_de_pepito ?? $edad_de_jaimito;

echo "\n";
