<?php
$val = 150;
$descont = 0.95;

do{
    $val *= $descont;
    echo 'R$' . str_replace('.', ',' , number_format($val, 2)) . "<br/>"; //Formatação dinheiro
}while ($val > 100);
