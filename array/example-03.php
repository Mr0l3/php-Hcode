<?php
$pessoa = array();

array_push($pessoa, array(
    'nome' => 'Henrique',
    'idade' => 15,
    'nascimento' => 2004,
    'pais' => 'Brasil')
);

array_push($pessoa, array(
    'nome' => 'Gabriel',
    'idade' => 6,
    'nascimento' => 2013,
    'pais' => 'Brasil')
);

foreach ($pessoa as $keyPessoa) {
    foreach ($keyPessoa as $keyDado => $value) {
        echo ucfirst($keyDado) . " = " . ucfirst($value) . "<br/>";
    }
    echo '<hr width="20%" align="left"/>';
}
