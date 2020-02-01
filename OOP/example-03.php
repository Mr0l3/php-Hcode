<?php

class Pessoa{

    public $nome = 'Rasmus Lerdof';  // Visto por todos
    protected $idade = 48;  // Visto pela classe 'originária' e pelas classes filhas
    private $senha = '123456789';  // Somente a classe que deu origim ao atributo 'enxerga'

    public function verDados(){
        echo $this -> nome . '<br/>';
        echo $this -> idade . '<br/>';
        echo $this -> senha . '<br/>';
    }
}


class Progamador extends Pessoa{
    public function verDados(){
        // É necessário recriar o método para não ser utilizado o método da classe pai
        echo $this -> nome . '<br/>';
        echo $this -> idade . '<br/>';
        //echo $this -> senha;  Essa linha geraria um erro por conta do encapsulamento
    }
}


$pess = new Progamador;
$pess -> verDados();
