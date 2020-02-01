<?php
// esse código gera um erro por que o autoload procura por padrão somente dentro do diretório
// do script

spl_autoload_register();
/*Ao chamar uma classe ou função inexistente no script atual, o nome da classe ou função
é passado para o autoload. Por padrão o autoload procura arquivos com tudo minúsculo,
porém, isso pode ser mudado registrando uma nova função
*/


$brasilia = new Carro('Preto', 'Fuke', 'fdmlg0201858750');
$brasilia->acelerar(90);
