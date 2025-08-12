<?php

class Funcionario{
    public string $nome;
    public float $salario;

    public function reajuste(int $porcentagem){
        $reajuste =  $this->salario + ($this->salario * ($porcentagem/100));

        echo "Salario atual é: $this->salario            Salario reajustado é: $reajuste";
    }
}

?>