<?php

header('Content-Type: application/json');

// Conectando no MySQL
// No PDO é necessário especificar o banco que será utilizado
$connec = new PDO('mysql:dbname=dbphp7;host=127.0.0.1', 'root', 'root');

$stmt = $connec->prepare('SELECT * FROM tb_usuarios ORDER BY idusuario');

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
