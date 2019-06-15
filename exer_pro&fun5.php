<?php
//5. Escreva um programa para ler o número de lados de um //polígono regular e a medida do lado (em cm). Faça uma //função que receba como parâmetro o número de lados e a //medida do lado deste polígono e calcule e imprima o //seguinte:
// Se o número de lados for igual a 3, escrever TRIÂNGULO e //o valor do seu perímetro.
// Se o número de lados for igual a 4, escrever QUADRADO e //o valor da sua área.
// Se o número de lados for igual a 5, escrever PENTÁGONO.
//Observação: Considere que o usuário só informará os //valores 3, 4 ou 5.

function triangularporai ($lado1, $lado2, $lado3)
    {$perimetrotriang= $lado1+$lado2+$lado3;
     print "TRIÂNGULO\n";
     print "Perímetro do triângulo: $perimetrotriang cm";}
function quadrangularporai ($lado1, $lado2)
    {$areaquadrado= $lado1*$lado2;
     print "QUADRADO\n";
     print "Área do quadrado: $areaquadrado cm";}
function pentagonarporai ()
    {print "PENTÁGONO";}
print "Digite o número de lados da figura geométrica, de 3 até 5: ";
$qtdlados= (int) fgets(STDIN);
if ($qtdlados==3)
{print "Digite o lado 1: ";
    $lado1= (float) fgets(STDIN);
    print "Digite o lado 2: ";
    $lado2= (float) fgets(STDIN);
    print "Digite o lado 3: ";
    $lado3= (float) fgets(STDIN);
    triangularporai ($lado1, $lado2, $lado3);
}
    
if ($qtdlados==4)
{print "Digite o lado 1: ";
    $lado1= (float) fgets(STDIN);
    print "Digite o lado 2: ";
    $lado2= (float) fgets(STDIN);
    quadrangularporai ($lado1, $lado2);
}
if ($qtdlados==5)
{pentagonarporai ();}
