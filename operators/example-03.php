<?php
$a = "10";
$b = 10;
$c = NULL;

var_dump($a <=> $b); //Operador SpaceShip
/*Retorna 1 se o número da esquerda for maior
  Retorna 0 se os dois forem iguais. OBS: compara somente o valor e não a tipagem
  Retorna -1 se o número da esquerda for maior*/

echo "<br/>";
echo $c ?? $a; //Se $c é NULL, printa $a