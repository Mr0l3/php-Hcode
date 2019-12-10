<?php
//seta fuso horário para o de SP para todas as ações involvendo date
date_default_timezone_set('America/Sao_Paulo');
$diaSemana = date('w');

switch($diaSemana){
    case 0:
        echo 'Domingo';
        break;

    case 1:
        echo 'Segunda-feira';
        break;

    case 2:
        echo 'Terça-feira';
        break;

    case 3:
        echo 'Quarta-feira';
        break;

    case 4:
        echo 'Quinta-feira';
        break;

    case 5:
        echo 'Sexta-feira';
        break;

    case 6:
        echo 'Sábado';
        break;

    default:
        echo 'Data inválida!';
        break;
}