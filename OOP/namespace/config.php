<?php

spl_autoload_register(function($nameClass){
    $dirClass = 'classes';
    $fileName = str_replace('\\', '/', $dirClass . DIRECTORY_SEPARATOR . $nameClass . '.php');

    if(file_exists($fileName)){
        require_once($fileName);
    }
});

