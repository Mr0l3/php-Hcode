<?php

class Animal{
    public function comunicar():string{
        return 'latir';
    }


    public function movimentar():string{
        return 'andar';
    }
}

class Gato extends Animal{
    public function comunicar():string{  // polimorfismo
        return 'miar';
    }
}


class Passaro extends Animal{
    public function movimentar():string{
        return 'Voar e ' . parent::movimentar(); // deve ser acessado estaticamente
        // embora usa o mesmo método 2x, eles fazem ações diferentes
    }
}


$mimi = new Gato();
echo $mimi->comunicar();
echo '<br/>';

$piriqutio = new Passaro;
echo $piriqutio->movimentar();
