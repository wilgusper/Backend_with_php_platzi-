<?php

$tiendita_de_cafe = array(
    "Americano" => 20,
    "Latte" => 25,
    "recalentado" => 10,
    "capuccino" => 27.5,
    "Mocca" => 24
);
/*
foreach ($tiendita_de_cafe as $cafe => $price) {
    echo "Actualmente Encontre el café $cafe \n ";
    if ($cafe == "Latte"){
        echo "encontramos Latte! \n";
        break;
    }
}
echo "";
*/
foreach ($tiendita_de_cafe as $cafe => $price){ 
    if ($cafe == "recalentado")
        continue;
    
    echo "El café $cafe es muy rico! \n ";
}
echo "";