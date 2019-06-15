<?php 

//4. Faзa um programa que leia a altura e o sexo (codificado da seguinte forma: 1-feminino 2-masculino) de uma pessoa.
// Depois faзa uma funзгo chamada pesoideal que receba a altura e o sexo via parвmetro e que calcule e retorne seu peso ideal, utilizando
//as seguintes fуrmulas:
//   вЂў para homens: (72.7 * h) вЂ“ 58
//   вЂў para mulheres: (62.1 * h) вЂ“ 44.7
//    Observaзгo: Altura = h (na fуrmula acima).

function pesoideal ($sexo, $altura){
    if ($sexo==1){
    $peso = (62.1 * $altura)-44.7;
    print "O seu peso ideial й: $peso"

    }

    elseif ($sexo==2){
    $peso = (72.7 * $altura)-58;
    print "O seu peso ideial й: $peso"
    }

    else{
    print "Digite corretamente."
    }
}

print "Qual o sexo da pessoa? \n";
$sexo = (float) fgets (STDIN);

print "Qual a altura da pessoa? \n";
$altura = (float) fgets (STDIN);

$peso = pesoideal ($sexo, $altura);

print "O peso ideal dessa pessoa seria: $peso ";