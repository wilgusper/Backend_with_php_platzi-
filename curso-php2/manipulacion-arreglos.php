<?php
$edades = [18,22,40,34];
// funcion count
//echo count ($edades); // con ella podemos contar cuantos datos tenemos en un arreglo
//array push
//array_push($edades, 13); // nos permite insertar un dato en el arreglo en la aprte final
//var_dump($edades);
//is array
$esto_no_es_un_arreglo = "";
//var_dump(is_array($esto_no_es_un_arreglo)); verifica si es o no un arreglo
//var_dump(is_array($edades));

//explode
/*$lista_de_frutas = "fresa,cereza,manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);
var_dump($lista_de_frutas_array);
print_r($lista_de_frutas_array);*/

$lista_de_frutas_array= ["fresa","cereza","manzana"];
$lista_de_frutas = implode("*",$lista_de_frutas_array);
var_dump($lista_de_frutas);
echo "\n";