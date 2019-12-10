<?php
$fras = "A repetição é a mãe da retenção";
$q = "mãe";

// case sensitive = strrpos() | case insensitive = strripos()
$qpos = strrpos($fras, $q);  //pode-se fazer busca a partir do final da string colocando offset = -1
var_dump($qpos);
echo "<br/>";

$part1 = substr($fras, 0, $qpos);
var_dump($part1);
echo "<br/>";

$part2 = substr($fras, $qpos + strlen($q) + 1, strlen($fras)); // adicionado 1 por causa do espaço
var_dump($part2);