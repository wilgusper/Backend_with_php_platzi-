<?php

$usernames = ["Pepito123","Mr.Michi","RetaxMain"];
do {
    $username = readline("por favor ingresa tu nombre de usuario: ");
    //echo "Esto se ejecuta por lo menos una vez";
    echo "\n";
} while (in_array($username,$usernames));

/*$i=0;
     do {
        echo $i++." ++";
        echo "ahora i vale :" .$i."\n"; 
     } while($i<=10);

echo "\n";*/