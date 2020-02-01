<?php

require_once("conf.php");

session_regenerate_id();  //recria o ID de sessão, e mantém as informações, só muda o ID
echo session_id();  
/* Também é possível recuperar informações de outra sessão passando o ID de uma sessão antes de 
   chamar o session_start(). EX: session_id('1kfnfg8nfg81k239fk9'); */
echo "<br/>";

var_dump($_SESSION);
