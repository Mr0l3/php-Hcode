<?php

function msg(){
    return 'Hello World!';
}

echo msg() . '<br/>';
$fras = msg();
echo 'A frase tem ' . strlen($fras) . ' letras';
