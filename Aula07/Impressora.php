<?php

class Impressora {
    public function imprimir($texto) {
        return $texto;
    }
}

class PDF extends Impressora {
    public function imprimir($texto) {
        return "PDF: " . $texto;
    }
}

class Texto extends Impressora {
    public function imprimir($texto) {
        return "Texto: " . $texto;
    }
}

class Imagem extends Impressora {
    public function imprimir($texto) {
        return "Imagem: " . $texto;
    }
}


?>