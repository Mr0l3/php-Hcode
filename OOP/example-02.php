<?php

class Endereco{
    private $rua;
    private $bairro;
    private $numero;
    private $cidade;

    // Método construtor = o que acontece quando for instânciar a classe
    public function __construct(string $rua, string $bairro, string $num = 'S/nº', string $cidad){
        $this -> rua = $rua;
        $this -> bairro = $bairro;
        $this -> numero = $num;
        $this -> cidade = $cidad;
    }


    // Método destruidor = o que vai acontecer quando a instância da classe for destruída
    public function __destruct(){
        echo 'Classe destruída';
    }


    // Método __toString = o que acontece quando quiser dar um echo com a classe
    public function __toString(){
        return 'Endereço = Rua: ' . $this -> rua . '. Bairro: ' . $this -> bairro . '. Número: ' . $this -> numero . '. Cidade: ' . $this -> cidade;
    }


    /* Método __sleep = informa quais dados do objeto devem ser serializados, para isso
       deve-se retornar um array com o nome dos atributos que devem ser serializados,
       isso evita a serialização de atributos indesejados
    */
    public function __sleep(){
        return array(
            'rua',
            'bairro',
            'numero',
            'cidade'
        );
    }


    /* Método __wakeup = informa o que acontece quando uma desserialização é feita.
       OBS: Ao dessserializar uma classe, é necessário que essa classe esteja importada ou
       definida dentro do script
    */
    public function __wakeup(){
        echo 'Objeto desserializado';
    }
}


$endereco1 = new Endereco('João de Ambrózio', 'Centro', '147', 'Santos');
echo '<b>Endereço 1:</b> ' . $endereco1;

echo '<br/><br/><b>Objeto serializado:</b> ' . serialize($endereco1) . '<br/><br/>';

$endereco1_serialized = serialize($endereco1);

$endereco2 = unserialize($endereco1_serialized);
echo "<br/><b>Endereço 2:</b> $endereco2<br/>";
