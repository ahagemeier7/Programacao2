<?php

class Multa{

    private int Id
    private float Valor 
    private Aluguel $Aluguel

    public function getId(): int { return $this->Id; }
    public function getValor(): string { return $this->valor; }
    public function setValor(string $valor) { $this->valor = $valor; }
    public function getAluguel(): string { return $this->aluguel; }
    public function setAluguel(string $aluguel) { $this->aluguel = $aluguel; }

}


?>