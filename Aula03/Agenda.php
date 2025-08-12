<?php

class Agenda{
    public string $nome;
    public string $telefone;
    public string $email;

    public function __construct(string $nome, string $telefone, string $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function lista(){
        echo"Nome: $this->nome  Telefone: $this->telefone";
    }
}
?>