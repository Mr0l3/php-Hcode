<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=dbphp7', 'root', 'root');

// Inserindo dados no banco
$stmt = $conn->prepare('INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASS)');
// Usando a passagem por parâmetro no statement prepare, ataques no estilo SQL Injection são
// tratados (colocando contra-barra antes de aspas e etc), evitando que o atacante consiga
// executar esse tipo de ataque


$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASS', $passw);

$login = $_GET['u'];
$passw = $_GET['p'];

$stmt->execute();

echo "Usuário <b>$login</b> cadastrado com sucesso";
