<?php

/* 
    Passagem de parẽmtro por referência altera o valor da variável que passou o valor no parâmetro, assim
    o que for modificado no parâmetro será modificado na variável que passou o valor de um parâmetro.
    
    Ex: abaixo passamos a variável $a como parâmetro, já nossa função recebe um valor como parâmetro $b,
    porém, ele está sendo passado como referência (adicionamos o & antes do nome do parâmetro).
    Assim, ao somarmos 50 no parâmetro $b, a variável $a também é alterada.

*/

function aumentaValor(&$b){
    $b += 50;
    return $b;
}


$a = 10;

echo aumentaValor($a)."<br/>";
echo aumentaValor($a)."<br/>";
echo $a;
