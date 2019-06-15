<?php

//1. Faзa uma funзгo para converter uma temperatura em graus Fahrenheit para Celsius. A temperatura em Fahrenheit й o dado de entrada e a temperatura em Celsius й o dado
//de saн­da. Utilize a fуrmula C = (F - 32) * 5/9 , onde F й a temperatura em Fahrenheit e C й a temperatura em Celsius.

function graus ($f){
 
    $c = ($f - 32) * 5/9;
  
    return $c;
}

print "Temperatura em Fahrenheit: ";
$f = (float) fgets (STDIN);

$c = graus ($f);

print "Temperatura em Celsius: $c \n"; 