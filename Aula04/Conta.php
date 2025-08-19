<?php

class Conta{
    public string $titular;
    public float $saldo;
    public static int $numero;

    public function __construct($titular,$saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numero = $this->numero + 1;
    }

    public function exibirDados(){
        echo "Titular: $this->titular, Saldo: $this->saldo, Número da Conta: $this->numero";
    }

    public function depositar(float $valor){
        $this->saldo += $valor;
        echo "Depósito de $valor realizado. Novo saldo: $this->saldo";
    }
}

?>