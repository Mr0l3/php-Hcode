<?php

date_default_timezone_set('America/Sao_Paulo');

//$ts = strtotime('2/2/2004');
/*
    A função strtotime() retorna um timestamp a partir de uma expressão.
    Ex: now; +1 day; -3 months; +5 years; +5 seconds; tomorrow; yesterday; last week; next week; etc...
*/
$ts = strtotime('last week');

echo date('d/m/Y', $ts);
