<?php

class Conversor{

    public $celsius;

    public function conversor(){
        $far = $this->celsius * 1.8 + 32;
        echo "A temperatura em Fahrenheit é: " . $far . "°F";
    }

}

?>