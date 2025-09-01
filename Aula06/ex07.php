<?php

class Carro{
    private string $modelo;
    private string $cor;
    private int $velocidade = 0;

    public function getVelocidade(): int {
        return $this->velocidade;
    }

    public function acelerar(int $valor): void {
        if($valor > 0){
            if($this->velocidade + $valor > 200){
                $this->velocidade = 200;
            $this->velocidade += $valor;    
            }
        }
    }

    public function frear(int $valor): void {
        if($valor > 0){
            if($this->velocidade - $valor < 0){
                $this->velocidade = 0;
            }else{
                $this->velocidade -= $valor;
            }
        }
    }

}

?>