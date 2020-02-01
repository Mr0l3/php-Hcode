<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=dbphp7', 'root', 'root');

$idUser = $_GET['id'];

// Consulta nome do usuário
$stmt = $conn->prepare('SELECT deslogin FROM tb_usuarios WHERE idusuario = :IDUSER');
$stmt->bindParam(':IDUSER', $idUser);
$stmt->execute();

$loginUser = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]['deslogin'];


// Deleta dados do banco
$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE idusuario = :IDUSER');
$stmt->bindParam(':IDUSER', $idUser);
$stmt->execute();

// Callback
echo 'Dados excluídos para o usuário ' . $loginUser;
