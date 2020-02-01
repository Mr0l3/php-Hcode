<?php

try{
    throw new Exception("Ocorreu um erro durante a execucao do script PHP", 7000);
    
}catch(Exception $e){
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "code"=>$e->getCode(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile()
    ));
}
