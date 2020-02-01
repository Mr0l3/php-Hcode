<?php

if(file_exists('dados-usuarios.csv')){
    header('Content-Type: application/json');

    $file = fopen('dados-usuarios.csv', 'r');

    $header = explode(',', fgets($file));
    $data = array();

    while($row = fgets($file)){  // Linhas
        $rowData = explode(',', $row);
        
        $row = array();
        for($i = 0; $i < count($header); $i++){  // Colunas
            $row[$header[$i]] = $rowData[$i];
        }

        array_push($data, $row);
    }
    fclose($file);
    echo json_encode($data);
}
