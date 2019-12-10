<?php
$nome = "HenrIque de Mello";

$nome = str_replace("e", "3", $nome); // case sensitive
echo $nome;
echo "<br/>";

$nome = str_ireplace("i", "1", $nome); // case insensitive
echo $nome;