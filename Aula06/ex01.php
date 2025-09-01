<?php
class ContaBancaria{
    private static int $id;
    private float $saldo = 0;

    public function Depositar(float $valor): void {
        if($valor > 0){
            $this->saldo += $valor;
        }
    }

    public function Sacar(float $valor): void {
        if($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor;
        }else{
            echo "Saldo insuficiente para saque";
        }

    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setId(): void {
        $this->id++;
    }
}


?>