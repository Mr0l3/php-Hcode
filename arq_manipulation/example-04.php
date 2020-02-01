<?php

$file = fopen('teste.txt', 'a+');

fwrite($file, "teste\n");

fclose($file);

unlink('teste.txt');
