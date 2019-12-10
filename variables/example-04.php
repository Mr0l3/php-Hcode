<?php
/* Variáveis SUPER-GLOBAIS -> são variáveis internas do PHP que podem ser utilizadas em qualquer script*/
$num = (int)$_GET["num"]; //query strings por padrao retornam strings, pega o parâmetro num na URL
$ip = $_SERVER["REMOTE_ADDR"]; //IP do usuário
$path = $_SERVER["SCRIPT_NAME"]; //path do arquivo

echo "A query string com chave \"num\" possui valor: $num<br/>";
echo "IP: $ip<br/>";
echo "PATH: $path<br/>";