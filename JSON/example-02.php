<?php

$rawJSON = '{"pessoa1":{"nome":"Henrique","idade":15,"pais":"Brasil"},"pessoa2":{"nome":"Gabriel","idade":6,"pais":"Brasil"}}';
$people = json_decode($rawJSON, true);

foreach ($people as $valuePess) {
    foreach ($valuePess as $keyData => $value) {
        echo ucfirst($keyData) . ': ' . ucfirst($value) . '<br/>';
    }
    echo '<hr size="2px" width="30%" align="left"/>';

}
