<?php

class FiguraGeometrica {
    public $cor;

    public function calcularArea() {
        return 0;
    }
}

class Quadrado extends FiguraGeometrica {
    public $lado;

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends FiguraGeometrica {
    public $raio;

    public function calcularArea() {
        return pi() * ($this->raio * $this->raio);
    }
}

class Retangulo extends FiguraGeometrica {
    public $largura;
    public $altura;

    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}


?>