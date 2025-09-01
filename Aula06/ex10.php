<?php

class Carrinho{
    private static int $id;
    private float $total;

    public function getTotal(): float {
        return $this->total;
    }

    public function setValor($valor): void {
        if($valor > 0){
           $this->total += $valor;
        }
    }
}

?>