<?php

class Transporte {

    public function calcularTarifa($valor, $distancia, $horario) {
        return $valor;
    }
}

class Onibus extends Transporte {
    public function calcularTarifa($valor, $distancia = null, $horario = null) {
        return $valor;
    }
}

class Taxi extends Transporte {
    public function calcularTarifa($valor, $distancia, $horario) {
        if ($horario === 'noturno') {
            return $valor + ($distancia * 5.0);
        }        
        return $valor + ($distancia * 3.5);
    }
}

class Metro extends Transporte {
    public function calcularTarifa($valor, $distancia = null, $horario = null) {
        return $valor * 4.0;
    }
}

?>