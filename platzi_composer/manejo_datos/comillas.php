<?php
/*
echo 'un texto de una linea
varias lineas
comilla simple\'\' backslash\\
$variable ';*/
$name = 'Wilman';
echo "mi nombre es $name <br>";

$courses = [
    'backend' => [
        'php',
        'Laravel'
    ]
    ];
//echo "{$courses['backend'][0]}";
class user
{
    public $name = 'Wilman';
}
$user= new user;
    
echo "$user->name quiere aprender {$courses['backend'][0]}";

 