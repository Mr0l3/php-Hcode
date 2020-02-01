<?php
$idadUser = 18;
$idadCrianca = 12;
$idadMaior = 18;
$idadIdoso = 64;

if($idadUser > 0 && $idadUser < 100){
    if($idadUser <= $idadCrianca){
        echo 'Criança';
    }elseif($idadUser < $idadMaior){
        echo 'Adolescente';
    }elseif($idadUser < $idadIdoso){
        echo 'Adulto';
    }else{
        echo 'Idoso';
    }
}else{
    echo 'Valores Inválidos';
}

echo '<br/>';
echo ($idadUser < 18)?'Menor de idade':'Maior de idade'; //Operador ternário, bom para condição simples
