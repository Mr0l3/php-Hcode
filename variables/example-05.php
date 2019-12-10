<?php
$nome = "Henrique";

function teste1(){
    //para poder usar a variável nome com conteudo 'henrique', deve-se declarar ela como global na função
    global $nome;
    echo "Função teste1 = $nome<br/>";
}

function teste2(){
    $nome = "João"; //essa variável é local, só funciona dentro da function
    echo "Função teste2 = $nome";
}

teste1();
teste2();