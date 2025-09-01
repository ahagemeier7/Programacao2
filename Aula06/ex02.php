<?php
class Produto2{
    public string $nome;
    private float $preco;

    public function getpreco(): float {
        return $this->preco;
    }

    public function setpreco($preco){
        if($preco >= 0){
            $this->preco = $preco;
        }
        $this->preco = $preco;
    }
}

?>