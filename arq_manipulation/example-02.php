<?php

header('Content-Type: application/json');

$images = scandir('images');  // retorna um array com o nome de cada arquivo
$imagesInfo = array();

foreach($images as $img){
    if(!in_array($img, array('.', '..'))){  //verifica se o conteúdo de $img encontra-se no array passado via parâmetro
        $filename = 'images' . DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);  //info sobre sobre do arquivo, path, diretório em que ele está
        $info['size'] = filesize($filename);  // tamanho do arquivo em bytes
        $info['modified'] = date('d/m/Y H:i:s', filemtime($filename));  // data de modificação formatada
        $info['url'] = 'http://127.0.0.1/php-Hcode/arq_manipulation/' . str_replace('\\', '/', $filename);
        array_push($imagesInfo, $info);
    }
}
echo json_encode($imagesInfo);
