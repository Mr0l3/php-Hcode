<?php

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";
$oldImage = imagecreatefromjpeg($file);

list($oldWidht, $oldHeight) = getimagesize($file);  // pega tamanho e largura da imagem

$newWidht = $oldWidht * .2;
$newHeight = $oldHeight * .2;

$newImage = imagecreatetruecolor($newWidht, $newHeight);
imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidht, $newHeight, $oldWidht, $oldHeight);  // redimensiona a imagem

imagejpeg($newImage);
