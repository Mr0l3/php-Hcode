<?php

echo "Home Page";
echo "<br/>";
echo "<a href=\"http://hcode.websitephp7.com/seguranca/recaptcha/cadastro.php\">Cadastre-se na newsletter</a>";

if(isset($_COOKIE["OKnews"]) && $_COOKIE["OKnews"]){
    echo "<br/>Email cadastrado com sucesso!";  
}