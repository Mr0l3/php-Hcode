<?php

/*
    Também podemos usar a passagem por referência dentro de foreach, neste exemplo procuramos no array
    valores inteiros, e somamos 10, porém como o $value está servindo como referência, ao adicionar 10
    no $value, modificamos também o valor da key 'idade'.
*/

$pessoa = array(
    'nome' => 'Henrique',
    'idade' => 15
);

foreach ($pessoa as &$value) {
    if(gettype($value) === 'integer') $value += 10;
}

var_dump($pessoa);
