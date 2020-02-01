<?php

$connec = new mysqli('127.0.0.1', 'root', 'root', 'dbphp7', 3306);  // Conecta com o BD

if ($connec->connect_error) {  // Mostra o erro se ocorrer algum
    echo $connec->connect_error;
}

$connec->close();
