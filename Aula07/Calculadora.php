<?php

class Calculadora {
    public function somar($a, $b, $c = null)
    {
        if ($c === null) {
            // Somar apenas dois números
            return $a + $b;
        } else {
            // Somar três números
            return $a + $b + $c;
        }
    }
}

?>