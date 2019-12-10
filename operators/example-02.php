<?php
$a = "15";
$b = 15;

var_dump($a == $b);  //compara somente os valores
echo "<br/>";

var_dump($a === $b); //compara os valores e a tipagem
echo "<br/>";

var_dump($a != $b); //o valor de a tem que ser diferente de b, compara somente o valor
echo "<br/>";

var_dump($a !== $b); //o valor ou o tipo devem ser diferentes, compara valor e tipagem
