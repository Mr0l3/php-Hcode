<?php

class Carro extends Veiculo{
    public function encherTanque(float $litros){
        echo "Colocado $litros litros de gasolina na " . $this -> modelo;
    }
}
