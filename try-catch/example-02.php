<?php

function showName($name){
    echo $name;
    if(!$name){
        throw new Exception("<br/>Erro: Entrada inválida", 600);
    }
}

try {
    showName("João");
    showName("");
} catch (Exception $e) {
    echo $e->getMessage();
}finally{
    echo "<br/>Fim do bloco try-catch";
}
