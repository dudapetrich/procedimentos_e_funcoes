<?php

//6. Escreva uma função que recebe 2 números inteiros n1 e n2 como entrada e retorna a
//soma de todos os números inteiros contidos no intervalo [n1,n2]. Use esta função em
//um programa que lê n1 e n2 do usuário e imprime a soma.

function intervalo ($numini, $numfim)
    {   if ($numini>$numfim)
            {
                for ($i=$numini; $i>=$numfim;$i--)
                    {$intervalo+= $i;}
                     print "A soma dos números no intervalo de $numini, até o $numfim, foi de: $intervalo";
            }
        elseif  ($numini<$numfim)
            {
                for ($i=$numini; $i<=$numfim; $i++)
                    {$intervalo+= $i;}
                     print "A soma dos números no intervalo de $numini, até o $numfim, foi de: $intervalo";
            }
                
        elseif ($numini==$numfim)
            {print "Os números são iguais";}    
    }
print "Digite o número inicial: ";
$numini= (int) fgets(STDIN);
print "Digite o número final: ";
$numfim=(int) fgets(STDIN);
intervalo ($numini, $numfim);
© 2019 GitHub, Inc.