<?php
/*Quando usando o require se o arquivo não for encontrado no path solicitado ou não estiver
  funcionando corretamente, irá gerar um fatal error, parando a execução do script*/

//require "inc/function.php";
require_once "inc/function.php"; // Isso evita problemas com redeclaração de functions

echo somar(10, 5);
