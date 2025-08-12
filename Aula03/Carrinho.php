<?php

class Item{

    public int $id;
    public string $nome;
    public  float $valor;
    public function __construct(int $id, string $nome,float $valor){
        $this->id = $id;
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $itens = [];

    public function __construct($itens){
        $this->itens = $itens;
    }
}

?>