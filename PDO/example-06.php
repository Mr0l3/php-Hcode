<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=dbphp7', 'root', 'root');

$idUser = $_GET['id'];

$conn->beginTransaction();  // Inicia a transação
$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE idusuario = :ID');
$stmt->bindParam(':ID', $idUser);
$stmt->execute();

//$conn->rollBack();  Se dar rollback toda a ação é desfeita
$conn->commit();  // No commit a ação é concluída com êxito

echo 'Exclusão de dados OK';
