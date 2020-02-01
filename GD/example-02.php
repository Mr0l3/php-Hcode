<?php

//header("Content-type: image/jpg");
$img = imagecreatefromjpeg("certificado.jpg");
$name = "Daniel Orivaldo da Silva";

$black = imagecolorallocate($img, 0, 0, 0);

imagestring($img, 5, 450, 150, "CERTIFICADO", $black);
imagestring($img, 5, 380, 250, $name, $black);
imagestring($img, 5, 450, 280, utf8_decode("Concluído em: ") . date("d/m/Y"), $black);

imagejpeg($img, "certificado-$name.jpeg");  //cria a imagem no servidor
imagedestroy($img);

echo "<center><img src=\"certificado-$name.jpeg\" alt=\"Certificado\"></center>";
