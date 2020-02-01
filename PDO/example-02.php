<?php


header('Content-Type: application/json');

// Conectando no SqlServer
$connec = new PDO('sqlsrv:dbname=dbphp7;host=127.0.0.1\SQLEXPRESS;ConnetionPooling=0', 'root', 'root');

$stmt = $connec->prepare('SELECT * FROM tb_usuarios ORDER BY idusuario');

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
