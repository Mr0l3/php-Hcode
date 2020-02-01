<?php
$nome = "Henrique";
$sobreNome = "de Mello";
$nomeCompleto = $nome . " " . $sobreNome; //concatenando
echo "Seu primeiro nome é: $nome <br/>";
echo "Seu segundo nome é: $nome <br/>";
echo "Seu nome completo é: $nomeCompleto <br/>";

//exit; -> comando para terminar a execução
unset($nome, $sobreNome);  //Exclui as variaveis

if(isset($nome, $sobreNome)){  //Verifica se as variáveis existem
    echo "As variáveis não foram excluidas";
}else{
    echo "As variáveis \$nome e \$sobreNome foram excluidas"; //E necessario colocar contrabarra para escapar
}
