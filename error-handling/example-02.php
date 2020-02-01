<?php

error_reporting("E_ALL & ~E_NOTICE"); //mostra apenas os erros e não os notices

$nome = $_GET["nome"];

echo ucfirst($nome);
