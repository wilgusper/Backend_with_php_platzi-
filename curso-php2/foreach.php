<?php

/* foreach ($iterable as $valor){         ****esta es una manera de escribirlo****
    //código a repetir por cada valor 
}
*********************************************************************************************
funciona para los arreglos asociativos.
foreach ($iterable as $llave => $valor){
    // codigo a repetir por cada valor
}

*/

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafe as $cafe => $price) {
    echo "El café $cafe cuesta $$price USD \n";
    echo "\n";
}