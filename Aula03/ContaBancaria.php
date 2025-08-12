<?php

class ContaBancaria{
    public string $titular;
    public float $saldo;

    public function depositar(float $valor){
        $soma = $this->saldo + $valor;
        
        $this->saldo = $soma;
    }

    public function sacar(float $valor){
        $soma = $this->saldo - $valor;
        
        $this->saldo = $soma;
    }
}

?>