<?php

//3. Escreva um programa para ler as notas das duas avalia��es de um aluno no semestre. Fa�a uma fun��o que receba as duas notas por par�metro e calcule e escreva a m�dia
//semestral e a mensagem " PARAB�NS! Voc� foi aprovado! "� somente se o aluno foi aprovado (considere 6.0 a m�dia m�nima para aprova��o).

function media ($n1, $n2){

    $media = ($n1 + $n2)/2;


if ($media >= 6.0){
    print "M�dia $media \n";
    print "PARAB�NS! Voc� foi aprovado! \n";
    }

else{
    print "M�dia $media \n";
    print "Voc� foi reprovado!"; 
}
}

print "Digite a primeira nota: ";
$n1= (float) fgets (STDIN);

print "Digite a segunda nota: ";
$n2= (float) fgets (STDIN);

media($n1, $n2);