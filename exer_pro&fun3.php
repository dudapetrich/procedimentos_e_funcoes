<?php

//3. Escreva um programa para ler as notas das duas avaliações de um aluno no semestre. Faça uma função que receba as duas notas por parâmetro e calcule e escreva a média
//semestral e a mensagem " PARABÉNS! Você foi aprovado! " somente se o aluno foi aprovado (considere 6.0 a média mí­nima para aprovação).

function media ($n1, $n2){

    $media = ($n1 + $n2)/2;


if ($media >= 6.0){
    print "Média $media \n";
    print "PARABÊNS! Você foi aprovado! \n";
    }

else{
    print "Média $media \n";
    print "Você foi reprovado!"; 
}
}

print "Digite a primeira nota: ";
$n1= (float) fgets (STDIN);

print "Digite a segunda nota: ";
$n2= (float) fgets (STDIN);

media($n1, $n2);