<?php

header("Content-type: image/jpg");

$img = imagecreatefromjpeg("certificado.jpg");
$bevan_regular = "fonts" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";
$playball_regular = "fonts" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf";
$name = "Daniel Orivaldo da Silva";

$black = imagecolorallocate($img, 0, 0, 0);

imagettftext($img, 32, 0, 190, 150, $black, $bevan_regular, "CERTIFICADO DE CURSO");
imagettftext($img, 30, 0, 300, 350, $black, $playball_regular, $name);
imagestring($img, 5, 450, 380, utf8_decode("Concluído em: ") . date("d/m/Y"), $black);

imagejpeg($img);
imagedestroy($img);
