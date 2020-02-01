<?php

namespace Geral;

class Cadastro{

    protected $nome;
    protected $email;
    protected $senha;

    public function getNome():string{
        return $this->nome;
    }


    public function getEmail():string{
        return $this->email;
    }


    public function getSenha():string{
        return $this->senha;
    }


    public function setNome(string $nom){
        $this->nome = $nom;
    }


    public function setEmail(string $email){
        $this->email = $email;
    }


    public function setSenha(string $pass){
        $this->senha = $pass;
    }


    private function __sleep(){
        return array('nome', 'email', 'senha');
    }


    public function __toString():string{
        return '<b>Objeto Serializado:</b> ' . serialize($this);
    }
}
