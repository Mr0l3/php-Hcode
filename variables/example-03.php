<?php
//string
$nome = "Henrique";
$nome = 'de mello';

//int
$idade = 15;

//float
$tamanho = 1.70;

//boolean
$bloqueado = false;
//===================================================================================================

//array
$frutas = array("melancia", "laranja", "manga");//printar valor manga -> echo $frutas[2];

//object
$time = new DateTime();
//===================================================================================================

//resource
$arq = fopen("example-03.php", "r");

//null e vazio
$nula = NULL;
$vazio = "";
/* A diferança entre NULL e vazio, é que quando uma variável é vazia, ela já está dentro da memória,
porém não possui valor. Já NULL não existe na memória e qualquer operação com a variável nula gera erro */