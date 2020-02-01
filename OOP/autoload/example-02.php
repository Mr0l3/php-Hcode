<?php

spl_autoload_register(function(string $nomeClass){  // Adiciona um autoload personalizado
    if(file_exists($nomeClass . '.php')){
        require_once($nomeClass . '.php');
    }elseif(file_exists('classes-abstratas' . DIRECTORY_SEPARATOR . $nomeClass . '.php')) {
        require_once('classes-abstratas' . DIRECTORY_SEPARATOR . $nomeClass . '.php');
    }elseif(file_exists('interfaces' . DIRECTORY_SEPARATOR . $nomeClass . '.php')){
        require_once('interfaces' . DIRECTORY_SEPARATOR . $nomeClass . '.php');
    }
});

$brasilia = new Carro('Amarelo', 'Brasília', '754057hjg58s0g89s');
$brasilia->trocarMarcha(5);
echo '<br/>';
$brasilia->acelerar(90);
