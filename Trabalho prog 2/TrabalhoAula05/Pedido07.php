<?php
//Criação da classe Pedido com o atributo private produtos que é um array de objetos da classe Produto
class Pedido{
    private static int $id;
    private array $produtos = [];

    public function getProduto(): array {
        return $this->produtos;
    }

    public function setProduto($produto){
        $this->produtos[] =  $produto;
    }
}

?>