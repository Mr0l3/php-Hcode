<?php

function ola(){
    $args = func_get_args();
    $nArgs = func_num_args();
    var_dump($args);
    echo "<br/>Você digitou $nArgs argumentos";
}

ola("Henrique", 15, true, 18.847);
