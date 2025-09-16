<?php

class Animal {
    public $nome;

    public function falar() {
        return "Som";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Latido";
    }
}

class Gato extends Animal {
    public function falar() {
        return "Miado";
    }
}


?>