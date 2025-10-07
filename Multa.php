<?php
require_once 'Aluguel.php';
class Multa{

    private int $Id;
    private float $Valor ;
    private Aluguel $Aluguel;

    public function getId(): int { return $this->Id; }
    public function getValor() { return $this->Valor; }
    public function setValor(float $valor) { $this->Valor = $valor; }
    public function getAluguel(): Aluguel { return $this->Aluguel; }
    public function setAluguel(Aluguel $aluguel) { $this->Aluguel = $aluguel; }

}


?>