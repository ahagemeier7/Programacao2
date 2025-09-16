<?php

class Mensagem{
    public function formatarMensagem($mensagem) {
        return $mensagem;
    }
}

class Maiusculo extends Mensagem {
    public function formatarMensagem($mensagem) {
        return strtoupper($mensagem);
    }
}

class Minusculo extends Mensagem {
    public function formatarMensagem($mensagem) {
        return strtolower($mensagem);
    }
}

class Capitalizar extends Mensagem {
    public function formatarMensagem($mensagem) {
        return ucfirst($mensagem);
    }
}

?>