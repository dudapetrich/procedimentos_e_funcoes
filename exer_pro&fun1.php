<?php

//1. Fa�a uma fun��o para converter uma temperatura em graus Fahrenheit para Celsius. A temperatura em Fahrenheit � o dado de entrada e a temperatura em Celsius � o dado
//de sa�da. Utilize a f�rmula C = (F - 32) * 5/9 , onde F � a temperatura em Fahrenheit e C � a temperatura em Celsius.

function graus ($f){
 
    $c = ($f - 32) * 5/9;
  
    return $c;
}

print "Temperatura em Fahrenheit: ";
$f = (float) fgets (STDIN);

$c = graus ($f);

print "Temperatura em Celsius: $c \n"; 