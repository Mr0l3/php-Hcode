<?php
header('Content-Type: application/json');
//É necessário adicionar o content-type para visualizar o JSON corretamente no navegador

$people = array(
    "pessoa1" => array(
        "nome" => "Henrique",
        "idade" => 15,
        "pais" => "Brasil"
    ),
    "pessoa2" => array(
        "nome" => "Gabriel",
        "idade" => 6,
        "pais" => "Brasil"
    )
);

echo json_encode($people);
