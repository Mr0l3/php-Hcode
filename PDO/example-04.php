<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=dbphp7', 'root', 'root');

// Altera dados no banco
$stmt = $conn->prepare('UPDATE tb_usuarios SET dessenha = :NEWPASS WHERE idusuario = :IDUSER');

$stmt->bindParam(':NEWPASS', $newPassw);
$stmt->bindParam(':IDUSER', $iduser);

$newPassw = $_GET['p'];
$iduser = $_GET['id'];

$stmt->execute();

// Consulta o nome do usuário no banco e faz o callback
$stmt = $conn->prepare('SELECT deslogin FROM tb_usuarios WHERE idusuario = :IDUSER');
$stmt->bindParam(':IDUSER', $iduser);

$stmt->execute();

$userName = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]['deslogin'];

echo "Dados alterados com sucesso para o usuário " . $userName;
