<?php
/*Quando usando o include, o php irá tentar buscar o arquivo no path declarado, se não achar,
  ele irá tentar buscar o arquivo dentro do include-path (é necessário configurar o include-path).
  Se o arquivo não funcionar corretamente ou não for encontrado, o script continua a rodar.
  Também é possível incluir arquivos remotamente (embora seja uma puta brecha de segurança).*/

//include "inc/function.php";
include_once "inc/function.php"; // isso evita problemas de redeclaração de funções

$a = 5;
$b = 10;
echo somar(5, 10);