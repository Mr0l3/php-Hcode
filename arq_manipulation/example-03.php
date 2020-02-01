<?php

require_once('config.php');

$user = new User();
$userData = json_decode($user->allOrdSelect('tb_usuarios', 'idusuario'));

// Start header
$header = array();

foreach($userData[0] as $key => $value){
    array_push($header, ucfirst($key));
}

$file = fopen('dados-usuarios.csv', 'w+');
fwrite($file, implode(",", $header) . "\n");
// End Header

// Start content
foreach($userData as $row){
    $data = array();

    foreach ($row as $column) {
        array_push($data, $column);
    }

    fwrite($file, implode(",", $data) . "\n");
}
//End content

fclose($file);
