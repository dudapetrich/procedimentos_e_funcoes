<?php 

//4. Fa�a um programa que leia a altura e o sexo (codificado da seguinte forma: 1-feminino 2-masculino) de uma pessoa.
// Depois fa�a uma fun��o chamada pesoideal que receba a altura e o sexo via par�metro e que calcule e retorne seu peso ideal, utilizando
//as seguintes f�rmulas:
//   • para homens: (72.7 * h) – 58
//   • para mulheres: (62.1 * h) – 44.7
//    Observa��o: Altura = h (na f�rmula acima).

function pesoideal ($sexo, $altura){
    if ($sexo==1){
    $peso = (62.1 * $altura)-44.7;
    print "O seu peso ideial �: $peso"

    }

    elseif ($sexo==2){
    $peso = (72.7 * $altura)-58;
    print "O seu peso ideial �: $peso"
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