<?php

header("Content-Type: image/png");

$img = imagecreate(256, 256);  // cria o resource e setta tamanho da imagem

// definir as cores
$black = imagecolorallocate($img, 0, 0, 0);  //primeira cor é sempre de fundo
$red = imagecolorallocate($img, 255, 0, 0);

imagestring($img, 5, 70, 128, "Curso de PHP 7", $red);  // coloca uma string na imagem

imagepng($img);  // cria a imagem efetivamente no formato PNG

imagedestroy($img); // destrói o resource
