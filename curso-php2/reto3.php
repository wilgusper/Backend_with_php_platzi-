<?php
$num_casa = readline("escribe el numero de la casa mayor a 0 y menor o igual a 100 : \n "); 
if ($num_casa > 0 && $num_casa<=100) {  
    $x = 0;
    $y = 1;
    $z = 1;
    for ($i=2; $i<=$num_casa;$i++) { 
        $z=$x+$y;
        echo "para la casa : ".$i." los caminos son: ".$z."\n";
        $x = $y;
        $y = $z;
    }
}
else
echo "no se cumplen los requerimeintos: ";

//escondida encontramos la serie de Fibonacci, interesante manera de ponernos a prueba.
//la fromula es Xn =Xn-1 + Xn-2
    