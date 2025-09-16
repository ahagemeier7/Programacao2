<?php

class Veiculo {

    public function mover() {
        return "O veículo está acelerando.";
    }
}   

class Carro extends Veiculo {
    public function mover() {
        return "O carro está dirigindo.";
    }
}

class Bicicleta extends Veiculo {
    public function mover() {
        return "A bicicleta está pedalando.";
    }
}

class Aviao extends Veiculo {
    public function mover() {
        return "O aviao está voando.";
    }
}

?>