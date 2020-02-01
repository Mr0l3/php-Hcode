<?php

interface ReqVeiculo{  // Interface mostra quais são os métodos mínimos para criar uma classe

    // Interfaces não devem incluir atributos

    public function __construct(string $cor = '', string $modelo = '', string $numChassi);
    public function getNumChassi():string;
    public function acelerar(float $velocidade);
    public function frenar(float $velocidade);
    public function trocarMarcha(int $marcha);
}
