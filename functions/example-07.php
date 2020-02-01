<?php

/*
    Ao colocar tres pontos antes do nome do parâmetro ou variável, estamos dizendo que todos os argumentos
    que o usuário passar irão ser armazenados nessa variável.
*/


function somar(float ...$nums): float{
    return array_sum($nums);
}


echo somar(3, 7.8, 9);
echo "<br/>";
echo somar(5.7, 9.0, 3.5, 1.5, 9.1, .9);
