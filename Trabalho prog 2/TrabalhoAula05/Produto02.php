<?php
//Criação dos métodos getter e setter para o atributo private preco
class Produto2{
    public string $nome;
    private float $preco;

    public function getpreco(): float {
        return $this->preco;
    }

    public function setpreco($preco){
        $this->preco = $preco;
    }
}

?>