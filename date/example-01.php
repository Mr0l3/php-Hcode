<?php
// Define o fuso horário padrão
date_default_timezone_set('America/Sao_Paulo');

// Timestamp é o tempo em segundos desde 1º de Janeiro de 1970


echo date('d/m/Y H:i:s', 1577049010);  // Colocando o timestamp o horário mostrado será sempre o mesmo
echo '<br/>';
echo 'Timestamp atual: ' . time();
