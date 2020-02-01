<?php

$conec = new mysqli('127.0.0.1', 'root', 'root', 'dbphp7', 3306);

if ($conec->connect_error) {
    echo $conec->connect_error;
}

$stmt = $conec->prepare('INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)');

// Diz qual o tipo de dado e quais serão as variáveis utilizadas nas interrogações do prepare
$stmt->bind_param('ss', $usr, $pass); 

$usr = 'admin';
$pass = 'admin123';

$stmt->execute(); // Só aqui ele monta a query e então executa no banco

$usr = 'userTeste';
$pass = '123456789';

$stmt->execute();
