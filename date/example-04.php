<?php

$tz = new DateTimeZone('America/Sao_Paulo');
$dt = new DateTime('now', $tz);

echo '<b>Antes:</b> ' . $dt->format('l, d/m/Y H:i:s') . '<br/>';

$dt->add(new DateInterval('P2WT2M'));  //mais 2 semanas (2W) e 2 minutos (T2M)

echo '<b>Depois:</b> ' . $dt->format('l, d/m/Y H:i:s');
