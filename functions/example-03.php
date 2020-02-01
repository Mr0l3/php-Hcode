<?php
/*
    Nas funções é possível determinar o tipo de parâmetro esperado que o programador passe.
    Ex: (string $mensagem, int $idade)

    Também é possível determinar o tipo de retorno que a função irá retornar, para isso, depois
    de declararmos quais os parâmetros da função, após os parênteses, adicionamos dois pontos ( : ) e 
    então colocamos o tipo do retorno.
    Ex: function teste(string $msg): string{ #code... }

    Quando criamos uma função com parâmetro que são obrigatórios, devemos colocá-los á esquerda,
    para assim evitar problemas de ter que passar parâmetros desnecessários.
*/

function ola(string $msg, string $period = 'Bom dia', bool $breakl = false): string{
    if ($breakl){
        return "Olá, $msg! $period!<br/>";
    }else{
        return "Olá, $msg! $period!";
    }
}


/*
    No PHP não é possível o uso de parãmetros nomeados, por exemplo: breakl => true
    Os parâmetros devem ser passados na ordem que foram determinados na função
*/
echo ola('Mundo') . '<br/>';
echo ola('Henrique', 'Bom dia', true);
echo ola('Gabriel', 'Boa noite');
