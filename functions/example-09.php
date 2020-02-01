<?php

function test($callback){  //$callback recebe uma função como parâmetro

    //Processo lento

    //O que será feito após o termino do processo lento
    $callback();
}

test(function(){
    echo 'Terminou o processo';
});
