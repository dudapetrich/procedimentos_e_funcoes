<?php 

//2. Fa�a uma fun��o que calcule a hipotenusa. Os catetos s�o os dados de entrada e a hipotenusa � o dado de sa�da.
//hipotenusa = √catetoA 2 + √catetoB 2

function hipotenusa ($cat1, $cat2){

    $hip = sqrt($cat1**2 + $cat2**2);

    return $hip;

}


print "Qual o valor do primeiro cateto? \n";
$cat1 = (float) fgets (STDIN);

print "Qual o valor do segundo cateto? \n";
$cat2 = (float) fgets (STDIN);

$hip = hipotenusa ($cat1, $cat2);

print "O valor da hipotenusa então será $hip";