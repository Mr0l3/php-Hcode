<?php
$a = 10;
$b = 5;
$c = 3;

var_dump($a > 5 && $b + $c < $a); //Operador AND, todas as expressões devem ser true

var_dump($a < 10 || $c !== 3); //Operador OR, pelo menos uma das expressões deve ser true
