<?php

//10. Criar uma função que calcule e retorne o MAIOR entre dois valores recebidos como
//parâmetros. Um algoritmo para testar tal função deve ser criado.

function maior ($num1, $num2)
    {
        if ($num1>$num2)
            {print "O primeiro número($num1) é maior que o segundo número($num2)";}
        elseif ($num1==$num2)
            {print "Os dois números tem o mesmo valor(são iguais)";}
        else {print "O segundo número($num2) é maior que o primeiro número($num1)";}
    }
print "Digite o primeiro número: ";
$num1= (float) fgets(STDIN);
print "Digite o segundo número : ";
$num2= (float) fgets(STDIN);
maior ($num1, $num2);