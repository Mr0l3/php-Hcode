<?php

$filename = 'images';

if(!is_dir($filename) && !is_file($filename) && !is_link($filename)){
    mkdir($filename);
    echo "Diretório $filename criado com sucesso";
}else{
    rmdir($filename);  // remove o diretório
    echo "Diretório $filename já existe, portanto foi excluído";
}
