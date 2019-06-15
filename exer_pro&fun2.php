<?php 

//2. Faзa uma funзгo que calcule a hipotenusa. Os catetos sгo os dados de entrada e a hipotenusa й o dado de saнda.
//hipotenusa = в€љcatetoA 2 + в€љcatetoB 2

function hipotenusa ($cat1, $cat2){

    $hip = sqrt($cat1**2 + $cat2**2);

    return $hip;

}


print "Qual o valor do primeiro cateto? \n";
$cat1 = (float) fgets (STDIN);

print "Qual o valor do segundo cateto? \n";
$cat2 = (float) fgets (STDIN);

$hip = hipotenusa ($cat1, $cat2);

print "O valor da hipotenusa entГЈo serГЎ $hip";