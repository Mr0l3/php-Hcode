<?php

namespace Cliente;

class Cadastro extends \Geral\Cadastro{
    public function registrarPedido(){
        return 'Registrado pedido para o cliente ' . $this->getNome();
    }
}
