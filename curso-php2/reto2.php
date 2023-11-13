<?php
//tu le pidas al usuario cuanto dinero tiene o cuanto le han donado 
$moneybox = readline("ingresa el dinero disponible en caja ");
$money_donation =readline("ingresa el dinero que tienes en donaciones ");
if ( $moneybox < 100 && $money_donation < 100) 
    echo "no puedes retirar el dinero : \n"."saldo insuficiente😢";
else
    echo "correcto puedes retirar tu dinero 😊";
echo "\n";