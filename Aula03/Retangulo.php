<?php

class Retangulo{
    public float $altura;
    public float $largura;

    public function calculaPerimetro(){
        echo ($this->altura * 2) + ($this->largura *2);
    }

    public function calculaArea(){
        echo $this->altura * $this->largura;
    }
}

?>