<?php
$filename = 'images/php7.png';

$crypFile = base64_encode(file_get_contents($filename));
$mime = new finfo(FILEINFO_MIME_TYPE);
$mime = $mime->file($filename);
$crypFile = "data:$mime;base64,$crypFile";
// Essa tag de abertura: <?= é a forma abreviada de: <?php echo
?>

<img src="<?=$crypFile?>" width="400px"><br/>
<a href="<?=$crypFile?>" target="_blank">Link para a imagem</a><br/>
