<?php

$cep = (int)$_GET['cep'];
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // diz que a conexão deverá ter um valor retorno
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // diz para não vertificar a autenticidade do ssl

$result = json_decode(curl_exec($ch), true); // decodifica o array e retorna um array
curl_close($ch);

print_r($result);
