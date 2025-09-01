<?php
class Pedido{
    private static int $id;
    private array $itens = [];

    public function getProduto(): array {
        return $this->itens;
    }

    public function setProduto($produto){
        $this->itens[] =  $produto;
    }
}

?>