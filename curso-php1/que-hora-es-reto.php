<?php

$horas = readline("por favor, ingresa el numero de horas: ");
$minutos = readline("por favor, ingresa los minutos");
$segundos = readline("por favor, ingresa los segunods ");

$tiempo_en_segundos = ($horas *60 * 60)+($minutos * 60 ) + $segundos;

echo "Este tiempo equivale a $tiempo_en_segundos segundos. \n";