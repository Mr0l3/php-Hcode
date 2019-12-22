<?php
session_id('948718c97fc156e29eb6d1d5f36559d8');
session_start(); 
//antes de começar a sessão devemos passar o id de outra sessão, assim dois lugares usam a mesma sessão

session_regenerate_id();
echo session_id();
echo "<br/>";
var_dump($_SESSION);