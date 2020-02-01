<?php

$dir1 = "dir01";
$dir2 = "dir02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";
$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
fwrite($file, date("D/m/y H:i:s"));
fclose($file);

rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);
print("Arquivo movido com sucesso!");
