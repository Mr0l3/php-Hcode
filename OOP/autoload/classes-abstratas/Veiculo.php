<?php

abstract class Veiculo{
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
