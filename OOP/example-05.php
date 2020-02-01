<?php

interface ReqVeiculo{  // Interface mostra quais são os métodos mínimos para criar uma classe

    // Interfaces não devem incluir atributos

    public function __construct(string $cor = '', string $modelo = '', string $numChassi);
    public function getNumChassi():string;
    public function acelerar(float $velocidade);
    public function frenar(float $velocidade);
    public function trocarMarcha(int $marcha);
}

class Carro implements ReqVeiculo{
    public $cor;
    public $modelo;
    protected $numChassi;

    public function __construct(string $cor = '', string $modelo = '', string $numChassi){
        $this -> cor = $cor;
        $this -> modelo = $modelo;
        $this -> numChassi = $numChassi;
    }


    public function getNumChassi():string{
        return $this -> numChassi;
    }


    public function acelerar(float $velocidade){
        echo 'O carro acelerou até ' . $velocidade . 'km/h';
    }


    public function frenar(float $velocidade){
        echo 'O carro frenou até ' . $velocidade . 'km/h';
    }


    public function trocarMarcha(int $marcha){
        echo 'O carrou trocou para a ' . $marcha . 'ª marcha';
    }
}


$celta = new Carro('Preto', 'Celta 2019', '01GNS021N01893G');
echo $celta -> getNumChassi();
