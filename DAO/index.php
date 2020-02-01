<?php

header('Content-Type: application/json');

require_once('config.php');

//Carrega info de um único usuário e mostra o JSON 
//$user = new User();
//$user->loadById('tb_usuarios', 1);
//echo $user;

//Carrega info de usuários e ordena
//echo User::allOrdSelect('tb_usuarios', 'dessenha');

//Procura no banco por coluna que possui determina string
//$user = new User();
//$result = $user->search('e%i', 'tb_usuarios', 'deslogin', 'dessenha');
//echo json_encode($result);

//Carrega info de usuário por login e senha
//$user = new User();
//$user->loadByLogin('tb_usuarios', 'admin', 'admin123');
//echo $user;

//Insere novo usuário no banco
//$user = new User('usuario', 'Us&er');
//$user->insertUser();
//echo $user;

//Atualiza info de algum usuário
//$user = new User();
//$user->loadById('tb_usuarios', 9);
//$user->updateUser('', 'D1r3t@r');
//echo $user;

//Deleta um usuário do banco
$user = new User();
$user->loadById('tb_usuarios', 9);
$user->deleteUser('tb_usuarios');
echo $user;
