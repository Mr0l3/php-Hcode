<!DOCTYPE html>
<form>
    <input type="text" name="n" id="nome" placeholder="Digite seu nome"><br/>
    <input type="date" name="d" id="data"><br/>
    <input type="password" name="p" id="pass" placeholder="Digite sua senha"><br/>
    <input type="submit" value="Login"><br/>
</form>

<?php
foreach ($_GET as $key => $value){
    echo "Chave: $key<br/>";
    echo "Valor: $value<br/><hr/>";
}