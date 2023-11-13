<?php
/*$edades = array(
    "carlos" => 20,
    "Mr.Michi"=> 18,
    "juan" => 40,
);

echo "la edad de Mr michi es: ".$edades["Mr.Michi"];*/

$cafes = array (
            "Capuccino" => 50,
            "Latte"=>49,
            "Americano"=>70,
);
/*echo "El precio del cafe Americano es de {$cafes['Americano']}";*/

$personas = array(
            
    "carlos" => array(
        "edad" => 20,
        "apellido" => "santana",
    ),
    "Mr.Michi"=> array(
        "edad" => 18,
        "apellido" => "Mishisancio",
    ),
);
echo "la informacion de Mr, Michi es: Edad: ".$personas["Mr.Michi"]["edad"]."\napellido: ".$personas["Mr.Michi"]["apellido"];
echo "\n";