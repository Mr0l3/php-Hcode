<?php
$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);  // pega o conteudo do arquivo da url

$basename = basename(parse_url($link)['path']);  // pega nome do arquivo da url

$file = fopen("images/" . $basename, "w+");

fwrite($file, $content);  // coloca o conteudo dentro do arquivo criado no server

fclose($file);
?>

<center><img src="images/<?=$basename?>"></center>

