<?php
header('Content-Type: application/json');

$connec = new mysqli('127.0.0.1', 'root', 'root', 'dbphp7', 3306);

if($connec->connect_error){
    echo $connec->connect_error;
}

$rawResult = $connec->query('SELECT * FROM tb_usuarios ORDER BY idusuario');
$data = array();

while($row = $rawResult->fetch_assoc()){
    array_push($data, $row);
}

echo json_encode($data);
