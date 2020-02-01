<?php

spl_autoload_register(function ($className){
    $file = ucfirst($className) . ".php";
    if(file_exists($file)){
        require_once($file);
    }else if(file_exists('classes/' . $file)){
        require_once('classes/' . $file);
    }
});
