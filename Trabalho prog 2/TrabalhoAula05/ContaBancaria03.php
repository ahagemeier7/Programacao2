<?php
//Criação da classe ContaBancaria com os atributos private id e saldo, 
// e os métodos Depositar, Sacar, getSaldo e setId
class ContaBancaria{
    private static int $id;
    private float $saldo = 0;

    public function Depositar(float $valor): void {
        if($valor > 0){
            $this->saldo += $valor;
        }
    }

    //Contém exercicio 09 em que valida o saldo antes do saque
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